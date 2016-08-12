<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Hi $model->first_name $model->last_name,";?>
<br><br> Your account has succesfully activated.
<br><br> <a href="<?php echo Yii::app()->baseUrl ?>/user.php/login">Please login to continue..</a>

<?php 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.11.3.min.js');
//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap.min.js');
?>