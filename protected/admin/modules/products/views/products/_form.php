<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'products-form',
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
    <br/>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'category_id', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'category_id', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'category_id'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'product_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'product_name', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'product_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'product_code', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'product_code', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'product_code'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'brand_id', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'brand_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'brand_id'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'merchant_id', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'merchant_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'merchant_id'); ?>
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
        <?php echo $form->labelEx($model, 'title', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'main_image', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'main_image', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'main_image'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'gallery_images', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'gallery_images', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'gallery_images'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'hover_image', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'hover_image', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'hover_image'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'canonical_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'canonical_name', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'canonical_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_title', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'meta_title', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_title'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_description', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textArea($model, 'meta_description', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_description'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_keywords', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'meta_keywords', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_keywords'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'header_visibility', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'header_visibility', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'header_visibility'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'sort_order', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'sort_order', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sort_order'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'display_category_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'display_category_name', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'display_category_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'price', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'price', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'price'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'wholesale_price', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'wholesale_price', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'wholesale_price'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_discount_available', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'is_discount_available', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_discount_available'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'discount', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'discount', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'discount'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'discount_type', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'discount_type', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'discount_type'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'discount_rate', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'discount_rate', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'discount_rate'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'quantity', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'quantity', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'quantity'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'requires_shipping', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'requires_shipping', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'requires_shipping'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'enquiry_sale', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'enquiry_sale', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'enquiry_sale'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'new_from', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'new_from', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'new_from'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'new_to', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'new_to', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'new_to'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'sale_from', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'sale_from', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sale_from'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'sale_to', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'sale_to', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sale_to'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'special_price_from', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'special_price_from', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'special_price_from'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'special_price_to', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'special_price_to', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'special_price_to'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'tax', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'tax', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tax'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'gift_option', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'gift_option', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'gift_option'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'stock_availability', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'stock_availability', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'stock_availability'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'video_link', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'video_link', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'video_link'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'weight', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'weight', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'weight'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'weight_class', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'weight_class', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'weight_class'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'status', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'exchange', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'exchange', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'exchange'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'search_tag', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'search_tag', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'search_tag'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'related_products', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'related_products', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'related_products'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_cod_available', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'is_cod_available', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_cod_available'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_available', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'is_available', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_available'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_featured', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'is_featured', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_featured'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_admin_approved', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'is_admin_approved', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_admin_approved'); ?>
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

     <div class="box-footer">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-laksyah')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->