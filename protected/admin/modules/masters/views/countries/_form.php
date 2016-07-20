<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'countries-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <br/>
    <div class="form-inline">
                        <div class="form-group">
                    <?php echo $form->labelEx($model,'country_name'); ?>
                    <?php echo $form->textField($model,'country_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'country_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'zone'); ?>
                    <?php echo $form->textField($model,'zone',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'zone'); ?>
                </div>

                    </div>
    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->