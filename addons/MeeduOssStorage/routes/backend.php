<?php

Route::group(['prefix' => '/backend/meedu_oss_storage', 'middleware' => ['web', 'backend.login.check']], function () {
    Route::get('/setting', \Addons\MeeduOssStorage\Http\Controllers\SettingController::class.'@show');
    Route::post('/setting', \Addons\MeeduOssStorage\Http\Controllers\SettingController::class.'@save');
});