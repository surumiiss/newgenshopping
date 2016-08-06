<?php
/* @var $this MerchantDetailsController */
/* @var $model MerchantDetails */
?>

<section class="content-header">
    <h1>
        MerchantDetails    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo Yii::app()->request->baseurl . '/site/home'; ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">MerchantDetails</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <a href="<?php echo Yii::app()->request->baseurl . '/admin.php/users/merchantDetails/create'; ?>" class='btn  btn-laksyah'>Add New MerchantDetails</a>
    <div class="col-xs-12 form-page" style="margin-top: .5em;">
        <div class="box">

            <?php
            $this->widget('booster.widgets.TbGridView', array(
                'type' => ' bordered condensed hover',
                'id' => 'merchant-details-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
//            		'id',
                    'user_id',
                    'fullname',
                    'product_categories',
                    'merchant_type',
                    'product_count',
                    array(
                        'name' => 'email',
                        'value' => '$data->users->email',
                    ),
                    array(
                        'name' => 'phone_number',
                        'value' => '$data->users->phone_number',
                    ),
                    array(
                        'name' => 'user_status',
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
                    /*
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
                      'vat_tin',
                      'CB',
                      'UB',
                      'DOC',
                      'DOU',
                      'is_payment_done',
                      'field2',
                      'field3',
                     */
                    array(
                        'name' => 'last_login',
                        'value' => '$data->users->last_login',
                    ),
//                    'email',
//                    'phone_number',
//                    'user_status',
//                    'last_login',
                    'DOC',
                    array(
                        'header' => '<font color="#61625D">Edit</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{update}',
                    ),
                    array(
                        'header' => '<font color="#61625D">Delete</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{delete}',
                    ),
                    array(
                        'header' => '<font color="#61625D">View</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{view}',
                    ),
                ),
            ));
            ?>
        </div>

    </div>


</div>
</section>

