<?php

return array(
    '' => 'site/index',
    'merchant-registration' => 'registration/merchantDetails/create',
    'merchant-activation' => 'registration/merchantDetails/UserActivation',
    'user-registration' =>'registration/buyerDetails/create',
    'login' => 'site/login',
    'logout' => 'site/logout',
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
);

