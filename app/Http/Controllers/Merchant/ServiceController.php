<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\AbstractController;
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

    /**
     * Show the application dashboard.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $service = Service::find($id);
        return view('merchant.service')->with('service', $service);
    }

    public function provider($id)
    {
        $provider = ServiceProvider::find($id);
        return view('merchant.provider',['provider' => $provider]);
    }

}
