<?php
/* @var $this BuyerController */
/* @var $model Buyer */
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
        <h1 style="float: left;" class="title">Buyer</h1>
        <p style="float: left;margin-top: 8px;margin-left: 11px;" class="description">Manage Buyer</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo Yii::app()->request->baseurl.'/site/home'; ?>"><i class="fa-home"></i>Home</a>
            </li>

            <li class="active">

                <strong>Manage Buyer</strong>
            </li>
        </ol>

    </div>

</div>
<div class="row">


    <div class="col-sm-12">

        <a class="btn btn-secondary btn-icon btn-icon-standalone" href="<?php echo Yii::app()->request->baseurl.'/buyer/create'; ?>" id="add-note">
            <i class="fa-pencil"></i>
            <span>Add Buyer</span>
        </a>
        <div class="panel panel-default">
            <?php $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id'=>'buyer-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
            		'id',
		'first_name',
		'last_name',
		'dob',
		'gender',
		'email',
		/*
		'phone_no_1',
		'phone_no_2',
		'password',
		'newsletter',
		'wallet_amt',
		'verification_code',
		'activation_link',
		'status',
		'bad_attempts',
		'CB',
		'UB',
		'DOC',
		'DOU',
		'last_login',
		'field1',
		'field2',
		'field3',
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

