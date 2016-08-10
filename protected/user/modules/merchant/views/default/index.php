<?php

echo 'Welcome  Merchant ' . Yii::app()->user->getState('user_mail');
echo ' <br> <br>user_id  ' . Yii::app()->user->getState('user_id');
echo ' <br><br> user type  ' . Yii::app()->user->getState('user_type');
