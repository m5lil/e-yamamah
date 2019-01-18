<?php

namespace App\Libs;

class Bee implements PaymentInterface
{
    use AdapterTrait;

    public static function makeRequest($action, array $data)
    {
        // TODO: Implement makeRequest() method.
        $data = [
            'AID' => '10009',
            'PWD' => '1989524',
            'BIN' => '0000',
        ];


        $response = \Requests::post('https://api.e-misr.com/json.php?auth=xZ1sOr8Xh54b6Um7', [], $data);
        return $response->body;

    }

    public static function inquiry(array $requestMap)
    {
        // TODO: Implement inquiry() method.

    }

    public static function payment(array $requestMap)
    {
        // TODO: Implement payment() method.
    }

}
