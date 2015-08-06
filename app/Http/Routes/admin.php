<?php


Route::get('admin', function () {
    return view('admin.home', array(
        'user'=>'Lucas Santos',
        'ip'=>'Meu IP'
    ));
});
