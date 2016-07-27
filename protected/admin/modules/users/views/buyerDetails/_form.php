<?php
/* @var $this BuyerController */
/* @var $model Buyer */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'buyer-form',
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
        <?php echo $form->labelEx($model, 'first_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'first_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'last_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'last_name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'dob', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
               <?php
            $from = date('Y') - 80;
            $to = date('Y') - 16;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'dob',
                'value' => 'dob',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'Date Of Birth',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'dob'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'gender', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'gender', array('male' => "male", 'female' => "fe-male"), array('empty' => 'Select Gender', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'gender'); ?>
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
        <?php echo $form->labelEx($model, 'phone_no_1', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'phone_no_1', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'phone_no_1'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone_no_2', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'phone_no_2', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'phone_no_2'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'confirm', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->passwordField($model, 'confirm', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'confirm'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'newsletter', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'status', array('1' => "Enabled", '0' => "Disabled"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'newsletter'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'wallet_amt', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'wallet_amt', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'wallet_amt'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'verification_code', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'verification_code', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'verification_code'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email_verification', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'email_verification', array('1' => "Verified", '0' => "Not Verified"), array('empty' => 'Select', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email_verification'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'status', array('1' => "Enabled", '0' => "Disabled"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>
  <?php /* 
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
        <?php echo $form->labelEx($model, 'last_login', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'last_login', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'last_login'); ?>
        </div>
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
     */ ?>

    <div class="box-footer">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-laksyah')); ?>
    </div>


    <?php $this->endWidget(); ?>

</div><!-- form -->