<div class="left col col-md-34 col-sm-4 col-xs-6 fill">
    <div class="wrap-hover-content f3 facial-left-thumbnail thumbnail">
        <div class="hover-content">
            <div class="">
                <?php if ($data->main_image == NULL) { ?>
                        <img width="280" height="300" class="safe" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/products/no-productimage.jpg" />
                        <?php
                } else {
                        ?><div class="img_div_view">
                            <img  src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/products/<?php
                            echo Yii::app()->Upload->folderName(0, 1000, $data->id)
                            ?>/<?php echo $data->id; ?>/medium.<?php echo $data->main_image; ?>" alt=""/></div>
                            <?php
                    }
                    ?>
                <p><?= $data->product_name; ?></p>
            </div>
        </div>
    </div>
    <!--   min height set for h2.If dont need pls remove it-->
    <h2><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Product/Detail/name/<?php echo $data->canonical_name; ?>"><?= $data->product_name; ?></a></h2>
    <h3><?php echo Yii::app()->Currency->convert($data->price); ?></h3>
</div> <!-- end of left -->