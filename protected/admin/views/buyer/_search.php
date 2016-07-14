<?php
/* @var $this BuyerController */
/* @var $model Buyer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dob'); ?>
		<?php echo $form->textField($model,'dob',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>50,'maxlength'=>50,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_no_1'); ?>
		<?php echo $form->textField($model,'phone_no_1',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_no_2'); ?>
		<?php echo $form->textField($model,'phone_no_2',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'newsletter'); ?>
		<?php echo $form->textField($model,'newsletter',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wallet_amt'); ?>
		<?php echo $form->textField($model,'wallet_amt',array('size'=>10,'maxlength'=>10,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verification_code'); ?>
		<?php echo $form->textField($model,'verification_code',array('size'=>10,'maxlength'=>10,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activation_link'); ?>
		<?php echo $form->textField($model,'activation_link',array('size'=>50,'maxlength'=>50,'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bad_attempts'); ?>
		<?php echo $form->textField($model,'bad_attempts',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CB'); ?>
		<?php echo $form->textField($model,'CB',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UB'); ?>
		<?php echo $form->textField($model,'UB',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOC'); ?>
		<?php echo $form->textField($model,'DOC',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOU'); ?>
		<?php echo $form->textField($model,'DOU',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login'); ?>
		<?php echo $form->textField($model,'last_login',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field1'); ?>
		<?php echo $form->textField($model,'field1',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field2'); ?>
		<?php echo $form->textField($model,'field2',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field3'); ?>
		<?php echo $form->textField($model,'field3',array('class' => 'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->