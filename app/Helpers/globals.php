<?php

if (!function_exists('service_menu')) {
    function service_menu(){
        $cats = \App\Models\ServiceProviderCategory::select('id', 'name', 'order')->orderBy('order','asc')->get();
        foreach ($cats as $value){
            $providers = $value->service_providers()->select('id', 'name', 'order')->orderBy('order','asc')->get();
            foreach ($providers as $provider){
                $services[] = ['id' => $provider->id,'name' => $provider->name, 'services' => $provider->services()->select('id', 'name', 'order')->orderBy('order', 'asc')->get()->toArray()];
            }
            $data[] = ['name' => $value->name,'order' => $value->order,'providers' => @$services];
            $services = [];
        }
        $providers_without_cat = \App\Models\ServiceProvider::select('id', 'name', 'order')->where('service_provider_category_id',0)->get();
        foreach ($providers_without_cat as $value){
            $data[] = ['id' => $value->id, 'name' => $value->name, 'order' => $value->order, 'services' => $value->services()->select('id', 'name', 'order')->get()->toArray()];
        }
        return array_values(array_sort($data, function ($value) {
            return $value['order'];
        }));
    }
}

if (!function_exists('ModelList')) {
    function ModelList($model, $name = 'name'){
        return $model::get()->pluck($name,'id');
    }
}

if (!function_exists('status')) {
    function status(){
        return [
            1 => __('Active'),
            0 => __('In-active')
        ];
    }
}

if (!function_exists('choose')) {
    function choose(){
        return [
            1 => __('yes'),
            0 => __('No')
        ];
    }
}

if (!function_exists('setting')) {
    /**
     * @param null $settingname
     * @return string
     */
    function setting($settingname)
    {
        $value = \App\Models\Setting::where('set_name', $settingname)->first()->value;
        return $value ?? 'Not Found';
    }
}

if (!function_exists('listLangCodes')) {
    /**
     * @return array
     */
    function listLangCodes()
    {
        return [
            'ar' => 'العربية',
            'en' => 'English'
        ];
    }
}
if (!function_exists('SendSms')) {
    /**
     * @param $mobile
     * @param $message
     * @return bool|string
     */
    function SendSms($mobile, $message)
    {
        $url = 'http://www.smsapril.com/api.php?' . http_build_query(array(
                'comm'    => "sendsms",
                'user'    => env('SMS_USER'),
                'pass'    => env('SMS_PASS'),
                'to'      => $mobile,
                'message' => $message,
                'sender'  => env('SMS_SENDER'),
            ));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $content = curl_exec($ch);
        return $content;
    }
}

if (!function_exists('getLang')) {
    /**
     * @return string
     */
    function getLang()
    {
        return app()->getLocale();
    }
}
if (!function_exists('distance')) {
    /**
     * @param $lat1
     * @param $lon1
     * @param $lat2
     * @param $lon2
     * @param $unit
     * @param $round
     * @return float
     */
    function distance($lat1, $lon1, $lat2, $lon2, $unit, $round)
    {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return round(($miles * 1.609344), $round);
        } else if ($unit == "N") {
            return round(($miles * 0.8684), $round);
        } else { // defult kilometer
            return round(($miles * 1.609344), $round);
        }
    }
}


