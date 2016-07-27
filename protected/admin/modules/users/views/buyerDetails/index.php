<?php
/* @var $this BuyerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buyers',
);

$this->menu=array(
	array('label'=>'Create BuyerDetails', 'url'=>array('create')),
	array('label'=>'Manage BuyerDetails', 'url'=>array('admin')),
);
?>

<h1>Buyers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
