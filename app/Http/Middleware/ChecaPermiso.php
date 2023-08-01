<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exception\UnauthorizedException;

class ChecaPermiso {
/**
 * 
 * @param \Illuminate\Http\Request $request
 * @param \Closure $next
 * @return mixed
 */

    public function handle ($request, Closure $next ){
if(app('auth')->guest()){
    throw new \Spatie\Permission\Exceptions\UnauthorizedException(401,'inicio requerido');

}
$id =$request-> route()->getAction()['as'];
    if(app('auth')->user()->can($id)){
return $next($request);
    }
    throw new \Spatie\Permission\Exceptions\UnauthorizedException(403,'SIN PERMISO');
}
}