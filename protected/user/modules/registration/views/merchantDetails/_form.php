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

    <?php echo $form->errorSummary($model); ?>
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
            <?php
            if (!$model->isNewRecord) {
                if (!empty($model->product_categories)) {
                    $ids = explode(',', $model->product_categories);
                    $selected = array();
                    foreach ($ids as $id) {
                        $selected[$id] = array('selected' => true);
                    }
                }
            }
            ?>
            <?php echo $form->hiddenField($model, 'product_categories'); ?>

            <?php
            $this->widget('application.user.components.CatSelect', array(
                'type' => 'category',
                'field_val' => $model->product_categories,
                'category_tag_id' => 'MerchantDetails_product_categories', /* id of hidden field */
                'form_id' => 'merchant-details-form',
            ));
            ?>
            <?php echo $form->error($model, 'product_categories'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2 control-label"> 
            <?php echo $form->labelEx($model, 'merchant_type'); ?>
        </div>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'merchant_type', array('2' => "Wholesale", '1' => "Retail", '0' => "Default"), array('empty' => 'Select', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'merchant_type'); ?>
        </div>
    </div>

    <div class="box-footer">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-laksyah pos', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->