<?php

return array(
    '' => 'site/index',
    'login' => 'site/login',
    'logout' => 'site/logout',
    'merchant-registration' => 'registration/merchantDetails/create',
    'merchant-activation' => 'registration/merchantDetails/UserActivation',
    'user-registration' => 'registration/buyerDetails/create',
    'merchant-profile' => 'merchant/merchantDetails/profile',
    'merchant-editProfile' => 'merchant/merchantDetails/editProfile',
    'change-password' => 'merchant/merchantDetails/changePassword',
    'add-product' => 'products/products/addProduct',
    'my-products' => 'products/products/myProducts',
    'merchant-editProfile' => 'merchant/merchantDetails/change_password',
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
);

