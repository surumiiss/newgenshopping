<?php
/* @var $this MerchantController */
/* @var $model Merchant */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'merchant-form',
        'htmlOptions' => array('class' => "form-horizontal"),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'fullname', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'fullname', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'fullname'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'email'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone_number', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'phone_number', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'phone_number'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'verification_code', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'verification_code', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'verification_code'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'activation_link', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'activation_link', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'activation_link'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'product_categories', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'product_categories', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'product_categories'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'merchant_type', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'merchant_type', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'merchant_type'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'product_count', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'product_count', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'product_count'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'shop_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'shop_name', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'shop_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'shop_logo', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'shop_logo', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'shop_logo'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'shop_banner', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'shop_banner', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'shop_banner'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'address', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'address'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'pincode', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'pincode', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'pincode'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'city', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'city', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'city'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'locality', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'locality', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'locality'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'landmark', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'landmark', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'landmark'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'state', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'state', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'state'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'country', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'country', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'country'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'vat_tin', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'vat_tin', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'vat_tin'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'status', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'last_login', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'last_login', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'last_login'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'bad_attempts', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'bad_attempts', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'bad_attempts'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'CB', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'CB', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'CB'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'UB', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'UB', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'UB'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'DOC', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'DOC', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'DOC'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'DOU', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'DOU', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'DOU'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_payment_done', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php echo $form->textField($model, 'is_payment_done', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'is_payment_done'); ?>
        </div>
    </div>

    <div class="box-footer">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-laksyah')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->