<?php
/**
 * Created by PhpStorm.
 * User: xiaoteng
 * Date: 2019/1/13
 * Time: 12:07
 */

namespace Addons\MeeduWechatLogin;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class WechatLoginServiceProvider extends ServiceProvider
{

    protected $listen = [
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            'SocialiteProviders\\WeixinWeb\\WeixinWebExtendSocialite@handle',
        ],
    ];

    public function boot()
    {
        // 注册视图命名空间
        $this->loadViewsFrom(dirname(__FILE__).'/resources/views', 'meedu_wechat_login');
        // 注册路由
        $this->loadRoutesFrom(dirname(__FILE__).'/routes/backend.php');

        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                Event::listen($event, $listener);
            }
        }
    }

    public function register()
    {
    }

}