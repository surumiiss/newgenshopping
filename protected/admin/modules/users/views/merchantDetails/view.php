

<h1>View MerchantDetails #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'user_id',
        'fullname',
        'users.email',
        'users.phone_number',
        'users.password',
        'product_categories',
        'merchant_type',
        'shop_name',
        'shop_logo',
        'shop_banner',
        'address',
        'pincode',
        'city',
        'locality',
        'district',
        'state',
        'country',
        'is_payment_done',
        array(
            'name' => 'users.user_status',
            'value' => function($data) {
                if ($data->users->user_status == 1) {
                    return "Activation pending";
                } elseif ($data->users->user_status == 2) {
                    return "Payment pending";
                } elseif ($data->users->user_status == 3) {
                    return "Enabled";
                } elseif ($data->users->user_status == 4) {
                    return "Disabled";
                } else {
                    return "Invalid";
                }
            },
            'filter' => array('1' => "Activation pending", '2' => "Payment pending", '3' => "Enabled", '4' => "Disabled")
        ),
        'users.last_login',
        'CB',
        'UB',
        'DOC',
        'DOU',
    ),
));
?>
