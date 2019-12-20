<?php
/**
 * Created by PhpStorm.
 * User: xiaoteng
 * Date: 2019/1/13
 * Time: 12:11
 */

namespace Addons\MeeduOssStorage\Http\Controllers;

use App\Meedu\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function show()
    {
        $config = config('filesystems.disks.oss', []);
        return view('meedu_oss_storage::setting', compact('config'));
    }

    public function save(Request $request)
    {
        $config = app()->make(Setting::class)->get();
        $config['filesystems.disks.oss.access_id'] = $request->input('filesystems*disks*oss*access_id');
        $config['filesystems.disks.oss.access_key'] = $request->input('filesystems*disks*oss*access_key');
        $config['filesystems.disks.oss.bucket'] = $request->input('filesystems*disks*oss*bucket');
        $config['filesystems.disks.oss.endpoint'] = $request->input('filesystems*disks*oss*endpoint');
        $config['filesystems.disks.oss.cdnDomain'] = $request->input('filesystems*disks*oss*cdnDomain');
        $config['filesystems.disks.oss.ssl'] = $request->input('filesystems*disks*oss*ssl');
        $config['filesystems.disks.oss.isCName'] = $request->input('filesystems*disks*oss*isCName');
        $config['filesystems.disks.oss.debug'] = false;
        $config['filesystems.disks.oss.driver'] = 'oss';

        app()->make(Setting::class)->put($config);
        flash('配置保存成功', 'success');
        return back();
    }

}