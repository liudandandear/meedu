@extends('layouts.backend')

@section('title')
OSS存储
@endsection

@section('body')

    <div class="col-sm">
        <div class="alert alert-warning mb-2">
            <h3>如何启用OSS存储呢？</h3>
            <p>
                在下面配置完成之后，请在 <a href="{{route('backend.setting.index')}}">
                    系统配置</a> 页面找到 “图片存储磁盘 ”选项，并输入 “oss” ，保存即可启用。
            </p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label>AccessId</label>
                <input type="text" class="form-control" name="filesystems*disks*oss*access_id" value="{{$config['access_id'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>AccessKey</label>
                <input type="text" class="form-control" name="filesystems*disks*oss*access_key" value="{{$config['access_key'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>Bucket</label>
                <input type="text" class="form-control" name="filesystems*disks*oss*bucket" value="{{$config['bucket'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>Endpoint</label>
                <input type="text" class="form-control" name="filesystems*disks*oss*endpoint" value="{{$config['endpoint'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>CDN域名</label>
                <input type="text" class="form-control" name="filesystems*disks*oss*cdnDomain" value="{{$config['cdnDomain'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>SSL</label><br>
                <input type="radio" name="filesystems*disks*oss*ssl" value="1"
                        {{($config['ssl'] ?? '') == 1 ? 'checked' : ''}}> 开启
                <input type="radio" name="filesystems*disks*oss*ssl" value="0"
                        {{($config['ssl'] ?? '') == 0 ? 'checked' : ''}}> 不开启
            </div>
            <div class="form-group">
                <label>使用CDN域名</label><br>
                <input type="radio" name="filesystems*disks*oss*isCName" value="1"
                        {{($config['isCName'] ?? '') == 1 ? 'checked' : ''}}> 开启
                <input type="radio" name="filesystems*disks*oss*isCName" value="0"
                        {{($config['isCName'] ?? '') == 0 ? 'checked' : ''}}> 不开启
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">保存</button>
            </div>
        </form>
    </div>

@endsection
