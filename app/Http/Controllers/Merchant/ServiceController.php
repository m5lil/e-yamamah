<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\AbstractController;
use App\Libs\Abdeen;
use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceController extends AbstractController
{
    /**
     * Create a new controller instance.
     *
     * @param Service $model
     */
    public function __construct(Service $model)
    {
        parent::__construct($model);
        $this->middleware('auth:merchant');
    }

    public function provider($id)
    {
        $provider = ServiceProvider::find($id);
        return view('merchant.provider', ['provider' => $provider]);
    }

    public function service($id)
    {
        $data['service'] = $this->model->find($id);
        $data['service_api'] = $data['service']->service_api()->where('service_type', 'payment')->first() ?: null;
        $data['service_api_pars'] = $data['service_api'] ? $data['service_api']->service_api_pars()->where('visible', true)->get() : null;
//        dd($data);
        return view('merchant.service')->with($data);
    }



//  Make $requestMap array to pass to Api
    public function payment($id,Request $request)
    {
//        TODO: Validate inputs

        $service = $this->model->find($id);
        $service_api = $service->service_api->where('service_type' ,'payment')->first();

//1        get code of service to add to map
        $service_code = [$service_api->external_key => $service_api->value];

//2        get invisible attributes with default value of service to add to map
        $params_array_invisible = $service_api->service_api_pars()->where('visible',false)->get();  // don't use pluck because have default value
        $map_invisible = [];
        foreach ($params_array_invisible as $param){
            $map_invisible[$param->external_api_id] = $param->default_value;
        }

//3        get visible attributes with requested value by user to add to map
        $params_array_visible = $service_api->service_api_pars()->where('visible',true)->pluck('external_api_id')->toArray();
        $map_visible = [];
        foreach ($params_array_visible as $param){
            $map_visible[$param] = $request->$param;
        }

//merge        Merge 1,2,3 to $map
        $requestMap = array_merge($service_code, $map_visible, $map_invisible);
        $adapter = $service->sdk->adapter_name;
        $do_request = $adapter::payment($service_api ,$requestMap);



        return view('merchant.service', $id)->with($do_request);
    }

}
