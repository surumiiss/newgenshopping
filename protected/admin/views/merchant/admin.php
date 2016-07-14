<?php
/* @var $this MerchantController */
/* @var $model Merchant */
?>
<style>
    .table th, td{
        text-align: center;
    }
    .table td{
        text-align: center;
    }
</style>


<div class="page-title">

    <div class="title-env">
        <h1 style="float: left;" class="title">Merchant</h1>
        <p style="float: left;margin-top: 8px;margin-left: 11px;" class="description">Manage Merchant</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo Yii::app()->request->baseurl.'/site/home'; ?>"><i class="fa-home"></i>Home</a>
            </li>

            <li class="active">

                <strong>Manage Merchant</strong>
            </li>
        </ol>

    </div>

</div>
<div class="row">


    <div class="col-sm-12">

        <a class="btn btn-secondary btn-icon btn-icon-standalone" href="<?php echo Yii::app()->request->baseurl.'/merchant/create'; ?>" id="add-note">
            <i class="fa-pencil"></i>
            <span>Add Merchant</span>
        </a>
        <div class="panel panel-default">
            <?php $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id'=>'merchant-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
            		'id',
		'fullname',
		'email',
		'phone_number',
		'password',
		'verification_code',
		/*
		'activation_link',
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
            'htmlOptions' => array('nowrap' => 'nowrap'),
            'class' => 'booster.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
            ),
            ),
            )); ?>
        </div>

    </div>


</div>

