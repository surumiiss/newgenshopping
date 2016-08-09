<section class="content-header">
    <h1>
        OrderStatus                <small>Manage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/products/orderStatus/admin'; ?>"><i class="fa fa-dashboard"></i>  OrderStatus</a></li>
        <li class="active">Manage</li>
    </ol>
</section>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/products/orderStatus/create'; ?>" class='btn  btn-laksyah'>Add OrderStatus</a>
<div class="col-xs-12 form-page" style="margin-top: .5em;">
    <div class="box">
        <div class="box-body table-responsive no-padding">
            <?php
            $this->widget('booster.widgets.TbGridView', array(
                'type' => ' bordered condensed hover',
                'id' => 'order-status-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    'title',
                    'description',
                    array(
                        'name' => 'status',
                        'value' => function($data) {
                            if ($data->status == 1) {
                                return "Enabled";
                            } elseif ($data->status == 0) {
                                return "Disabled";
                            } else {
                                return "Invalid";
                            }
                        },
                        'filter' => array('1' => "Enabled", '0' => "disabled")
                    ),
                    array(
                        'header' => '<font color="#61625D">Edit</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{update}',
                    ),
                    array(
                        'header' => '<font color="#61625D">Delete</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{delete}',
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>
