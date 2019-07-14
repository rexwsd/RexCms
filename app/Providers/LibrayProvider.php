<?php

namespace App\Providers;

use App\Libraries\StringHelper;
use Illuminate\Support\ServiceProvider;

class LibrayProvider extends ServiceProvider
{

    /**
     * 显示是否延迟提供程序的加载
     *
     * @var bool
     */
    protected $defer = true;

    /********************
     * 创建人: Rex.栗田庆
     * 邮件: litq@guahao.com
     * 创建日期: 2019-04-17
     * 创建时间: 10:10
     * 功能描述: 注入常用类
     * @param
     * @return
     ********************/
    public function register()
    {
        //注册一个动态类型 不习惯操作array习惯操作对象的同学有帮助
        $this->app->bind('string.helper', function () {
            return new StringHelper();
        });
    }

    /**
     * 获取提供者提供的服务
     *
     * @return array
     */
    public function provides()
    {
        return ['string.helper'];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
