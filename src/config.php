<?php

/*
 * This file is part of the hongyejia/laravel-cors.
 *
 * (c) hongye <aqm@live.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [

	/*
	 * 允许访问该资源的外域 URI,多个用,号分隔
	 */
	 'access_control_allow_origin' => env('ACCESS_CONTROL_ALLOW_ORIGIN','localhost'),
	 
	 
	 /*
	  * 在跨源访问时，XMLHttpRequest对象的getResponseHeader()方法只能拿到一些最基本的响应头，
	  * Cache-Control、Content-Language、Content-Type、Expires、Last-Modified、Pragma，
	  * 如果要访问其他头，则需要服务器设置本响应头
	  */
	 'access_control_expose_headers' => env('ACCESS_CONTROL_EXPOSE_HEADERS','Cache-Control,Content-Language,Content-Type,Expires,Last-Modified,Pragma'),
	 
	 
	 
	 /*
	  * 参数表示preflight请求的结果在多少秒内有效
	  */
	 'access_control_max_age' => env('ACCESS_CONTROL_MAX_AGE',3600),
	 
	 
	 /*
	  * Access-Control-Allow-Credentials 头指定了当浏览器的credentials设置为true时是否允许浏览
	  * 器读取response的内容。当用在对preflight预检测请求的响应中时，它指定了实际的请求是否可以使
	  * 用credentials。请注意：简单 GET 请求不会被预检；如果对此类请求的响应中不包含该字段，这个响
	  * 应将被忽略掉，并且浏览器也不会将相应内容返回给网页。
	  */
	 'access_control_allow_credentials' => env('ACCESS_CONTROL_ALLOW_CREDENTIALS','true'),
	 
	 
	 
	 /*
	  * 首部字段用于预检请求的响应。其指明了实际请求所允许使用的 HTTP 方法。
	  */
	 'access_control_allow_methods' => env('ACCESS_CONTROL_ALLOW_METHODS','GET,POST,PATCH,PUT,DELETE,OPTIONS'),
	 
	 
	 /*
	  * 首部字段用于预检请求的响应。其指明了实际请求中允许携带的首部字段
	  */
	 'access_control_allow_headers' => env('ACCESS_CONTROL_ALLOW_HEADERS','Authorization,Content-Type,If-Match,If-Modified-Since,If-None-Match,If-Unmodified-Since,X-CSRF-TOKEN,X-Requested-With,token'),
	 
 
];
