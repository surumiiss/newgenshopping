<section class="content-header">
    <h1>
        Buyer
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Buyer</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/users/Buyer/create'; ?>" class='btn  btn-laksyah'>Add Buyer</a>
    <div class="col-xs-12 form-page" style="margin-top: .5em;">
        <div class="box">

            <?php
            $this->widget('booster.widgets.TbGridView', array(
                'type' => ' bordered condensed hover',
                'id' => 'buyer-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    
                    'first_name',
                    'last_name',
                    'dob',
                    'gender',
                    'email',
                    'status',
                    'last_login',
                    /*
                     'id',
                      'phone_no_1',
                      'phone_no_2',
                      'password',
                      'newsletter',
                      'wallet_amt',
                      'verification_code',
                      'email_verification',

                      'bad_attempts',
                      'CB',
                      'UB',
                      'DOC',
                      'DOU',

                      'field1',
                      'field2',
                      'field3',
                     */
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




