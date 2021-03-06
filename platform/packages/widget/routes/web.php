<?php

Route::group(['namespace' => 'Botble\Widget\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'widgets'], function () {
            Route::get('load-widget', 'WidgetController@showWidget');

            Route::get('', [
                'as'   => 'widgets.list',
                'uses' => 'WidgetController@getList',
            ]);

            Route::post('save-widgets-to-sidebar', [
                'as'         => 'widgets.save_widgets_sidebar',
                'uses'       => 'WidgetController@postSaveWidgetToSidebar',
                'permission' => 'widgets.list',
            ]);

            Route::post('delete', [
                'as'         => 'widgets.delete',
                'uses'       => 'WidgetController@postDelete',
                'permission' => 'widgets.list',
            ]);
        });
    });
});
