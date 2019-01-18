<?php

namespace App\Http\Controllers\Traits;

trait ApiTrait{
    /**
     * @param string $message
     * @param mixed  $data
     *
     * @return array
     */
    public static function makeResponse($message, $data)
    {
        return [
            'code' => 1,
            'message' => $message,
            'data'    => $data,
        ];
    }

    /**
     * @param string $message
     * @param int $code
     * @param array  $data
     *
     * @return array
     */
    public static function makeError($message, array $data = [], $code = -1)
    {
        $res = [
            'code' => $code,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}