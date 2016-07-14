<?php
/* @var $this BuyerController */
/* @var $model Buyer */

$this->breadcrumbs=array(
	'Buyers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Buyer', 'url'=>array('index')),
	array('label'=>'Create Buyer', 'url'=>array('create')),
	array('label'=>'Update Buyer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Buyer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buyer', 'url'=>array('admin')),
);
?>

<h1>View Buyer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'dob',
		'gender',
		'email',
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
	),
)); ?>
