<?php

namespace App\Libs\Adapters;

use Illuminate\Support\Facades\Auth;

trait AdapterTrait
{
    private static function output($status, $msg, $code, $data = [])
    {
        return [
            'status'=> $status,
            'msg'=> (empty($msg)) ? '' : __((string)$msg),
            'code'=> $code,
            'data'=> (object) $data
        ];
    }

    private static function createPaymentTransaction($service_id, $serviceType, $request_map, $external_id = null,$response_msg){
//        dd($request_map);
        return Auth::user()->PaymentTransactions()->create([
            'service_id'=> $service_id,
            'total_amount'=> 0,
            'amount'=> $request_map['additional']['amount'],
            'request_map'=> $request_map,
            'external_id'=> $external_id,
            'response_type'=> $serviceType,
            'response'=> $response_msg,
            'ip' => request()->ip()
        ]);
    }




}