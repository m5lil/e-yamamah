<?php

namespace App\Http\Middleware;

use App\Http\Controllers\StaffController;
use Closure;
use Spatie\Permission\Exceptions\UnauthorizedException;

class Permission
{
    /**
     * List of actions with their mapping name to handle.
     *
     * @var array
     */
    protected $actions = [
        'index'     => 'view',
        'edit'      => 'edit',
        'show'      => 'view',
        'update'    => 'edit',
        'create'    => 'add',
        'store'     => 'add',
        'destroy'   => 'delete',
        'datatable' => 'ajax',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard)
    {
        if (auth()->guest()) {
            throw UnauthorizedException::notLoggedIn();
        }

        $q = str_replace(ucfirst($guard) . '::', '', $request->route()->getName());
        $routeName = explode('.', $q);

        $action = $this->actions[$request->route()->getActionMethod()];

        $permission = /*$guard . '-' .*/ $action . '-' . $routeName[0];

        if(!is_null($permission)) {
            if (!app('auth')->user()->can($permission)) {
                return redirect()->route('backend.home')->with(['errorMessage' =>  __('No Permission')]);
            }
        }

        return $next($request);

    }

}
