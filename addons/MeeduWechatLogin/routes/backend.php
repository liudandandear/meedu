<?php

Route::group(['prefix' => '/backend/meedu_wechat_login', 'middleware' => ['web', 'backend.login.check']], function () {
    Route::get('/setting', \Addons\MeeduWechatLogin\Http\Controllers\SettingController::class.'@show');
    Route::post('/setting', \Addons\MeeduWechatLogin\Http\Controllers\SettingController::class.'@save');
});