<?php
namespace app\http\middleware;

class Check
{
    public function handle($request, \Closure $next)
    {

        if ($request->param('token')) {
            $userInfo = ['param1'=>1,'param2'=>2];
            session('userInfo', $userInfo);
        } else {
               return json(['status' => '600040', 'info' => 'wrong request parameter！', 'chn_info' => '错误的请求参数！']);
        }

        return $next($request);
    }
}