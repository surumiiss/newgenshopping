<?php
/* @var $this ShippingChargesController */
/* @var $model ShippingCharges */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shipping-charges-form',
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
                    <?php echo $form->labelEx($model,'country'); ?>
                    <?php echo $form->textField($model,'country',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'country'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'shipping_rate'); ?>
                    <?php echo $form->textField($model,'shipping_rate',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'shipping_rate'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'doc'); ?>
                    <?php echo $form->textField($model,'doc',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'doc'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'dou'); ?>
                    <?php echo $form->textField($model,'dou',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'dou'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'cb'); ?>
                    <?php echo $form->textField($model,'cb',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'cb'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'ub'); ?>
                    <?php echo $form->textField($model,'ub',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'ub'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->textField($model,'status',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'status'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'sort_order'); ?>
                    <?php echo $form->textField($model,'sort_order',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'sort_order'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'zone'); ?>
                    <?php echo $form->textField($model,'zone',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'zone'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'weight'); ?>
                    <?php echo $form->textField($model,'weight',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'weight'); ?>
                </div>

                    </div>
    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->