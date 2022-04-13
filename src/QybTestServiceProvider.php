<?php
namespace Qybtest;

use Illuminate\Support\ServiceProvider;

class QybTestServiceProvider extends ServiceProvider{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/QybTest.php' => config_path('QybTest.php'),
            // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function register()
    {
        $this->app->singleton('QybTest', function () {
            return new QybTestService();
        });
    }
}
