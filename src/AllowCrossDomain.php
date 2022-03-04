<?php

namespace Hongyejia\LaravelCors;

use Closure;
use Illuminate\Http\Request;

class AllowCrossDomain
{
    protected $cookieDomain;

    protected $header = [];

    public function __construct()
    {
        $this->header['Access-Control-Allow-Credentials'] = config('cors.access_control_allow_credentials','true');
        $this->header['Access-Control-Max-Age'] = (int)config('cors.access_control_max_age',3600);
        $this->header['Access-Control-Allow-Methods'] = config('cors.access_control_allow_methods','GET,POST,PATCH,PUT,DELETE,OPTIONS');
        $this->header['Access-Control-Allow-Headers'] = config('cors.access_control_allow_headers','Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-CSRF-TOKEN, X-Requested-With');
        $this->header['Access-Control-Expose-Headers'] = config('cors.access_control_expose_headers','Cache-Control,Content-Language,Content-Type,Expires,Last-Modified,Pragma');

        $this->cookieDomain = config('cors.access_control_allow_origin', 'localhost');

    }


    /**
     * 处理传入的参数
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

    	$response = $next($request);

        $header = $this->header;
        $origin = $request->server('HTTP_ORIGIN') ? $request->server('HTTP_ORIGIN') : '';


        if (!isset($header['Access-Control-Allow-Origin'])) {
            if ($origin && ('' == $this->cookieDomain || strpos($origin, $this->cookieDomain))) {
                $header['Access-Control-Allow-Origin'] = $origin;
            } else {
                $header['Access-Control-Allow-Origin'] = '*';
            }
        }

        foreach ($header as $key => $value) $response->headers->set($key,$value);

        return $response;
    }

}


?>