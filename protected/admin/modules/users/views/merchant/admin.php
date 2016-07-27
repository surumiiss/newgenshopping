         
<section class="content-header">
    <h1>
        Merchant
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Merchant</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/users/Merchant/create'; ?>" class='btn  btn-laksyah'>Add Merchant</a>
    <div class="col-xs-12 form-page" style="margin-top: .5em;">
        <div class="box">



            <?php
            $this->widget('booster.widgets.TbGridView', array(
                'type' => ' bordered condensed hover',
                'id' => 'merchant-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    'id',
                    'fullname',
                    'email',
                    'phone_number',
                    'password',
                    'verification_code',
                    /*
                      'email_verification',
                      'product_categories',
                      'merchant_type',
                      'product_count',
                      'shop_name',
                      'shop_logo',
                      'shop_banner',
                      'address',
                      'pincode',
                      'city',
                      'locality',
                      'landmark',
                      'state',
                      'country',
                      'vat_tin',
                      'status',
                      'last_login',
                      'bad_attempts',
                      'CB',
                      'UB',
                      'DOC',
                      'DOU',
                      'is_payment_done',
                     */
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


