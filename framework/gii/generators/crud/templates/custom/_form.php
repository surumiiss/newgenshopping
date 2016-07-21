<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'" . $this->class2id($this->modelClass) . "-form',
        'htmlOptions' => array('class' => 'form-horizontal'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>
    <br/>
    <!--<div class="form-inline">-->
        <?php
        foreach($this->tableSchema->columns as $column) {
                if($column->autoIncrement)
                        continue;
                ?>
                <div class="form-group">
                    <?php echo "<?php echo " . $this->generateActiveLabel($this->modelClass, $column, array('class' => 'col-sm-2 control-label')) . "; ?>\n"; ?>
                    <div class="col-sm-10">
                    <?php echo "<?php echo " . $this->generateActiveField($this->modelClass, $column) . "; ?>\n"; ?>
                    <?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
                    </div>
                </div>

                <?php
        }
        ?>
    <!--</div>-->
     <div class="box-footer">
        <label>&nbsp;</label><br/>
        <?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-laksyah pos', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>\n"; ?>
    </div>

    <?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->