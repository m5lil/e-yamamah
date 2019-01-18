<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\AbstractController;
use App\Models\MerchantContract;
use Illuminate\Http\Request;

class MainController extends AbstractController
{
    /**
     * Create a new controller instance.
     *
     * @param MerchantContract $model
     */
    public function __construct(MerchantContract $model)
    {
        parent::__construct($model);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        dd($data);

        return view('merchant.home');
    }

    public function change_lang()
    {
        $lang = \Session::has('locale') ? \Session::get('locale') : \Config::get('app.locale');
//        dd($lang);
        if ($lang == 'ar')
            \Session::put('locale', 'en');
        else
            \Session::put('locale', 'ar');
        return redirect()->back();
    }


}
