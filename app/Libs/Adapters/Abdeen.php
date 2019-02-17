<?php

namespace App\Libs\Adapters;

use App\Libs\PaymentInterface;

class Abdeen implements PaymentInterface
{
    use AdapterTrait;

    public static function makeRequest($action, array $request_map)
    {

        // TODO: Implement makeRequest() method.
        $map = array_merge([
            'AID' => '10009',
            'PWD' => '1989524',
            'BIN' => '0000',
        ],$request_map);


//        $response = \Requests::post('https://api.e-misr.com/json.php?auth=xZ1sOr8Xh54b6Um7', [], $map);
//        $callback_obj = json_decode($response->body);


        // Failed Air Charge
//        $callback_obj = json_decode(
//            '{"res": "ERR","txt": "كود الكرت غير مطابق للشركة"}'
////            '{"res":"ERR","txt":"Wrong amount, amount not found in service price list, check service parameter","ISP":"bee","BID":"2947376"}'
//        );

//         Succesful Air Charge
        $callback_obj = json_decode(
            '{"res":"YES","txt":"Transaction success","CUT":6.99,"BID":"2948297","ISP":"bee","PID":"5487841688004895"}'
        );

        //

        return $callback_obj;


    }

    public static function inquiry($service_api, array $requestMap)
    {
        // TODO: Implement inquiry() method.
    }

    public static function payment($service_api, array $requestMap)
    {
        $amount = @$service_api->service_api_pars()->where('type','S')->first()->external_api_id ?: false;  //5
        $amount = (float)$requestMap[$amount];

        if($service_api->commission){
            if($service_api->commission_type == 'percent'){
                $total_amount = $amount * $service_api->commission_value;
            }elseif ($service_api->commission_type == 'fixed'){
                $total_amount = $amount + $service_api->commission_value;
            }
        }else{
            $total_amount = $amount;
        }
        $additional_data['additional'] = [
            'total_amount' => $total_amount,  // 7.143
            'amount' => $amount               // 5
        ];
        $requestMap = array_merge($requestMap, $additional_data);
        $transaction = self::createPaymentTransaction($service_api->service->id, 'pending',$requestMap,null, __('Not yet'));
        $response = static::makeRequest('payment', $requestMap);

        if ($response->res == 'ERR'){
            $transaction->update([
                'response_type'=> 'fail',
                'response'=> __(isset($response->SMS) ?: $response->txt),
                'external_id'=> isset($response->BID) ? $response->BID : null
            ]);
            return self::outPut(false, $response->txt, 20001);
        }elseif ($response->res == 'YES'){
            $transaction->update([
                'total_amount'=> $requestMap['additional']['total_amount'],
                'response_type'=> 'done',
                'response'=> __($response->txt),
                'external_id'=> $response->BID
            ]);
            $data = (array) $response;
            return self::outPut(true, $response->txt,20006, $data);
        }else{
            return self::outPut(false, __('No Response'),20003);
        }

    }

}
