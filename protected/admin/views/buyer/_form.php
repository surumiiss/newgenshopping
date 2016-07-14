<?php
/* @var $this BuyerController */
/* @var $model Buyer */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buyer-form',
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
                    <?php echo $form->labelEx($model,'first_name'); ?>
                    <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'first_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_name'); ?>
                    <?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'last_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'dob'); ?>
                    <?php echo $form->textField($model,'dob',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'dob'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'gender'); ?>
                    <?php echo $form->textField($model,'gender',array('size'=>50,'maxlength'=>50,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'gender'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'phone_no_1'); ?>
                    <?php echo $form->textField($model,'phone_no_1',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'phone_no_1'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'phone_no_2'); ?>
                    <?php echo $form->textField($model,'phone_no_2',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'phone_no_2'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>225,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'newsletter'); ?>
                    <?php echo $form->textField($model,'newsletter',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'newsletter'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'wallet_amt'); ?>
                    <?php echo $form->textField($model,'wallet_amt',array('size'=>10,'maxlength'=>10,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'wallet_amt'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'verification_code'); ?>
                    <?php echo $form->textField($model,'verification_code',array('size'=>10,'maxlength'=>10,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'verification_code'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'activation_link'); ?>
                    <?php echo $form->textField($model,'activation_link',array('size'=>50,'maxlength'=>50,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'activation_link'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->textField($model,'status',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'status'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'bad_attempts'); ?>
                    <?php echo $form->textField($model,'bad_attempts',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'bad_attempts'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'CB'); ?>
                    <?php echo $form->textField($model,'CB',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'CB'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'UB'); ?>
                    <?php echo $form->textField($model,'UB',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'UB'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'DOC'); ?>
                    <?php echo $form->textField($model,'DOC',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'DOC'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'DOU'); ?>
                    <?php echo $form->textField($model,'DOU',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'DOU'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_login'); ?>
                    <?php echo $form->textField($model,'last_login',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'last_login'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'field1'); ?>
                    <?php echo $form->textField($model,'field1',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'field1'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'field2'); ?>
                    <?php echo $form->textField($model,'field2',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'field2'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'field3'); ?>
                    <?php echo $form->textField($model,'field3',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'field3'); ?>
                </div>

                    </div>
    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->