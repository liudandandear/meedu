<?php
/**
 * Created by PhpStorm.
 * User: xiaoteng
 * Date: 2019/1/13
 * Time: 12:11
 */

namespace Addons\MeeduWechatLogin\Http\Controllers;

use App\Meedu\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function show()
    {
        $config = config('services.weixinweb');
        return view('meedu_wechat_login::setting', compact('config'));
    }

    public function save(Request $request)
    {
        $config = app()->make(Setting::class)->get();
        $config['services.weixinweb.client_id'] = $request->input('services*weixinweb*client_id');
        $config['services.weixinweb.client_secret'] = $request->input('services*weixinweb*client_secret');
        $config['services.weixinweb.redirect'] = $request->input('services*weixinweb*redirect');
        $config['meedu.member.socialite.weixinweb.enabled'] = $request->input('meedu*member*socialite*weixinweb*enabled');
        $config['meedu.member.socialite.weixinweb.app'] = 'weixinweb';
        $config['meedu.member.socialite.weixinweb.name'] = '微信';
        $config['meedu.member.socialite.weixinweb.icon'] = '<i class="fa fa-weixin" aria-hidden="true"></i>';
        app()->make(Setting::class)->put($config);
        flash('配置保存成功', 'success');
        return back();
    }

}