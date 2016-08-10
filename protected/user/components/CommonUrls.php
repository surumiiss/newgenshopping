<?php

class CommonUrls {

    // common urls called in right side menu in merchant dashboard
    public static function merchant_profile() {
        $url = Yii::app()->request->baseUrl . "/user.php/merchant-profile";
        return $url;
    }

    public static function add_product() {
        $url = Yii::app()->request->baseUrl . "/user.php/add-product";
        return $url;
    }

    public static function change_password() {
        $url = Yii::app()->request->baseUrl . "/user.php/change-password";
        return $url;
    }

    public static function my_products() {
        $url = Yii::app()->request->baseUrl . "/user.php/my-products";
        return $url;
    }

}
