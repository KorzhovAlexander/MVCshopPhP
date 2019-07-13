<?php
return array(
    'products/([0-9]+)'=>'products/listByID/$1',
    'products'=>'products/list',

    'login'=>'auth/login',
    'registration'=>'auth/registration',
    'reset'=>'auth/reset',

    '^/*$' => 'main/index'
);