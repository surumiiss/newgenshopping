<?php

return array(
    '' => 'site/index',
    'merchant-registration' => 'registration/merchant/create',
    'merchant-activation' => 'registration/merchant/UserActivation',
    'login' => 'site/login',
    'logout' => 'site/logout',
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
);

