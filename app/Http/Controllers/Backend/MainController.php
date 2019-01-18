<?php

namespace App\Http\Controllers\Backend;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Requests_Hooks;

class MainController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }


    public function change_lang($lang)
    {
        \Session::put('locale', $lang);
        return redirect()->back();
    }

// TODO typeahead.js

    public function autocomplete(Request $request)
    {
        $data = Merchant::select("name", "username")
            ->where("name","LIKE","%{$request->input('query')}%")
            ->orWhere("username","LIKE","%{$request->input('query')}%")
            ->get();

        return response()->json($data);
    }


    // test new branch




}
