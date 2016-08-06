<?php
/* @var $this MerchantDetailsController */
/* @var $model MerchantDetails */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'merchant-details-form',
        'htmlOptions' => array('class' => 'form-horizontal'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary(array($model, $user_model)); ?>
    <br/>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'fullname'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'fullname', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'fullname'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($user_model, 'email', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($user_model, 'email', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($user_model, 'email'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($user_model, 'phone_number', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($user_model, 'phone_number', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($user_model, 'phone_number'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($user_model, 'password', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->passwordField($user_model, 'password', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($user_model, 'password'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($user_model, 'confirm_password', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->passwordField($user_model, 'confirm_password', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($user_model, 'confirm_password'); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'product_categories'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'product_categories', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'product_categories'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'merchant_type'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'merchant_type', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'merchant_type'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'shop_name'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'shop_name', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'shop_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'shop_logo'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'shop_logo', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'shop_logo'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'shop_banner'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'shop_banner', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'shop_banner'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'address'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'address'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'pincode'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'pincode', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'pincode'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'city'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'city', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'city'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'locality'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'locality', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'locality'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'district'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'district', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'district'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'state'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'state', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'state'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'country'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'country', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'country'); ?>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'is_payment_done'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'is_payment_done', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_payment_done'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($user_model, 'user_status', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($user_model, 'user_status', array('3' => "Enabled", '4' => "Disabled"), array('class' => 'form-control')); ?>
            <?php echo $form->error($user_model, 'user_status'); ?>
        </div>
    </div>
    <div class="box-footer">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-laksyah pos', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->