<?php
/* @var $this MerchantController */
/* @var $model Merchant */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'merchant-form',
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
                    <?php echo $form->labelEx($model,'fullname'); ?>
                    <?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'fullname'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'phone_number'); ?>
                    <?php echo $form->textField($model,'phone_number',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'phone_number'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'verification_code'); ?>
                    <?php echo $form->textField($model,'verification_code',array('size'=>50,'maxlength'=>50,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'verification_code'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'activation_link'); ?>
                    <?php echo $form->textField($model,'activation_link',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'activation_link'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'product_categories'); ?>
                    <?php echo $form->textField($model,'product_categories',array('size'=>60,'maxlength'=>250,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'product_categories'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'merchant_type'); ?>
                    <?php echo $form->textField($model,'merchant_type',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'merchant_type'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'product_count'); ?>
                    <?php echo $form->textField($model,'product_count',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'product_count'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'shop_name'); ?>
                    <?php echo $form->textField($model,'shop_name',array('size'=>60,'maxlength'=>250,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'shop_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'shop_logo'); ?>
                    <?php echo $form->textField($model,'shop_logo',array('size'=>60,'maxlength'=>250,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'shop_logo'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'shop_banner'); ?>
                    <?php echo $form->textField($model,'shop_banner',array('size'=>60,'maxlength'=>250,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'shop_banner'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'address'); ?>
                    <?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50 , 'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'address'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'pincode'); ?>
                    <?php echo $form->textField($model,'pincode',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'pincode'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'city'); ?>
                    <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'city'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'locality'); ?>
                    <?php echo $form->textField($model,'locality',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'locality'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'landmark'); ?>
                    <?php echo $form->textField($model,'landmark',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'landmark'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'state'); ?>
                    <?php echo $form->textField($model,'state',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'state'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'country'); ?>
                    <?php echo $form->textField($model,'country',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'country'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'vat_tin'); ?>
                    <?php echo $form->textField($model,'vat_tin',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'vat_tin'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'status'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_login'); ?>
                    <?php echo $form->textField($model,'last_login',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'last_login'); ?>
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
                    <?php echo $form->labelEx($model,'is_payment_done'); ?>
                    <?php echo $form->textField($model,'is_payment_done',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'is_payment_done'); ?>
                </div>

                    </div>
    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->