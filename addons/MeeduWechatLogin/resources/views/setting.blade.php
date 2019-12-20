@extends('layouts.backend')

@section('title')
微信登录
@endsection

@section('body')

    <div class="col-sm">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label>微信登录登录</label><br>
                <input type="radio" name="meedu*member*socialite*weixinweb*enabled" value="1"
                        {{config('meedu.member.socialite.weixinweb.enabled') == 1 ? 'checked' : ''}}> 开启
                <input type="radio" name="meedu*member*socialite*weixinweb*enabled" value="0"
                        {{config('meedu.member.socialite.weixinweb.enabled') == 0 ? 'checked' : ''}}> 不开启
            </div>
            <div class="form-group">
                <label>微信ClientId</label>
                <input type="text" name="services*weixinweb*client_id" class="form-control" value="{{$config['client_id'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>微信ClientSecret</label>
                <input type="text" name="services*weixinweb*client_secret" class="form-control" value="{{$config['client_secret'] ?? ''}}">
            </div>
            <div class="form-group">
                <label>微信Redirect</label>
                <input type="text" name="services*weixinweb*redirect" class="form-control" value="http://xiaoteng.easy.echosite.cn/login/weixinweb/callback">
                <p><b>注意，这里只需要更改其中的域名就可以了，其它的不要动！</b></p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">保存</button>
            </div>
        </form>
    </div>

@endsection