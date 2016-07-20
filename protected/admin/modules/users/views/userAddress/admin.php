<?php
/* @var $this UserAddressController */
/* @var $model UserAddress */
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
        <h1 style="float: left;" class="title">UserAddress</h1>
        <p style="float: left;margin-top: 8px;margin-left: 11px;" class="description">Manage UserAddress</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo Yii::app()->request->baseurl.'/site/home'; ?>"><i class="fa-home"></i>Home</a>
            </li>

            <li class="active">

                <strong>Manage UserAddress</strong>
            </li>
        </ol>

    </div>

</div>
<div class="row">


    <div class="col-sm-12">

        <a class="btn btn-secondary btn-icon btn-icon-standalone" href="<?php echo Yii::app()->request->baseurl.'/userAddress/create'; ?>" id="add-note">
            <i class="fa-pencil"></i>
            <span>Add UserAddress</span>
        </a>
        <div class="panel panel-default">
            <?php $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id'=>'user-address-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
            		'id',
		'userid',
		'first_name',
		'last_name',
		'company',
		'contact_number',
		/*
		'address_1',
		'address_2',
		'city',
		'postcode',
		'country',
		'state',
		'default_billing_address',
		'default_shipping_address',
		'CB',
		'UB',
		'DOC',
		'DOU',
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

