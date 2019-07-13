<?php
return array(
    'products/category-([0-9]+)/page-([0-9]+)'=>'products/listCategory/$1/$2',

    'products/category-([0-9]+)'=>'products/listCategory/$1',
    'products/([0-9]+)'=>'products/listByID/$1',

    'products/page-([0-9]+)'=>'products/list/$1',
    'products'=>'products/list',

    'login'=>'auth/login',
    'registration'=>'auth/registration',
    'reset'=>'auth/reset',

    '^/*$' => 'main/index'
);