<h1 align="center"> laravel-cors </h1>

<p align="center"> laravel Cors middleware.</p>


## 框架要求

- Laravel >= 5.1


## 安装

```shell
$ composer require hongyejia/laravel-cors -vvv
```

## 配置

### Laravel 应用

1. 在 `config/app.php` 注册 ServiceProvider 

```php
'providers' => [
    // ...
    Hongyejia\LaravelCors\ServiceProvider::class,
],

```

2. 创建配置文件：

```shell
php artisan vendor:publish --provider="Hongyejia\LaravelCors\ServiceProvider"
```

3. 修改应用根目录下的 `config/cors.php` 中对应的参数即可。

## 使用

1.在`app/Http/kernel.php` 加入 中间件

```php
 protected $middleware = [
 	// ....
 	\Hongyejia\LaravelCors\AllowCrossDomain:class
 ]
```



## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/hongyejia/laravel-cors/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/hongyejia/laravel-cors/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT