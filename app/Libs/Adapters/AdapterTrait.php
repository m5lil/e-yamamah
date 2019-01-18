<?php

namespace App\Libs;

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

    private static function createPaymentTransaction($service_id, $amount, $totalAmount, $external_key, $serviceType){
        return Auth::user()->PaymentTransactions()->create([
            'payment_services_id'=> $service_id,
            'amount'=> $amount,
            'total_amount'=> $totalAmount,
//            'request_map'=> Validator::$parametersToSDK,
            'external_system_id'=> $external_key,
            'service_type'=> $serviceType,
            'ip' => getRealIP()
        ]);
    }




}