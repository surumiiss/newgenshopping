<section class="content-header" style="margin-bottom: .5em">
    <h1>
        Buyer
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Buyer</a></li>
        <li class="active">Create</li>
    </ol>
</section>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/users/Buyer/admin'; ?>" class='btn  btn-laksyah manage'>Manage Buyer</a>
<section class="content">

    <div class="box box-info">

        <div class="box-body">
            <?php $this->renderPartial('_form', array('model' => $model)); ?>
        </div>
    </div>
</section>
