<?php
/**
 * Created by PhpStorm.
 * User: xiaoteng
 * Date: 2019/1/13
 * Time: 12:07
 */

namespace Addons\MeeduOssStorage;

use Jacobcyl\AliOSS\AliOssServiceProvider;

class MeeduOssStorageServiceProvider extends AliOssServiceProvider
{

    public function boot()
    {
        parent::boot();

        // 注册视图命名空间
        $this->loadViewsFrom(dirname(__FILE__).'/resources/views', 'meedu_oss_storage');
        // 注册路由
        $this->loadRoutesFrom(dirname(__FILE__).'/routes/backend.php');
    }

    public function register()
    {
    }

}