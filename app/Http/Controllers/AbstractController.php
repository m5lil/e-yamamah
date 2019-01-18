<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\ApiTrait;
use App\Http\Controllers\Traits\HelpersTrait;
use Illuminate\Database\Eloquent\Model;
use Response;

abstract class AbstractController extends  Controller {
    use HelpersTrait,
        ApiTrait
        ;

    public $model;
    public $view_folder;
    protected $viewData = [];

    public function __construct(Model $model,$view_folder = '')
    {
        $this->model = $model;
        $this->view_folder = 'backend.'. $view_folder;
        $this->viewData['locale'] = app()->getLocale();
        $this->viewData['title'] = __(str_replace('_', ' ', title_case($view_folder)));
    }

    protected function view($file = ''){
        if(!empty($file))
            return view($this->view_folder . '.' . $file, $this->viewData);
        return view($this->view_folder, $this->viewData);
    }


    public function sendResponse($result, $message)
    {
        return Response::json(ApiTrait::makeResponse($message, $result));
    }

    public function sendError($data, $message, $code = 404)
    {
        return Response::json(ApiTrait::makeError($message, $data), $code);
    }



}