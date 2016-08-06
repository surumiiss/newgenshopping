<div class="col-sm-4 col-xs-6" >
    <div class="products_item">
        <div class="product_image">
            <?php if ($data->main_image == NULL) { ?>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Products/Detail/name/<?php echo $data->canonical_name; ?>">
                        <img width="280" height="300" class="safe" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/products/no-productimage.jpg" /></a>
                    <?php
            } else {
                    ?><div class="img_div_view">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Products/Detail/name/<?php echo $data->canonical_name; ?>">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/products/<?php
                            echo Yii::app()->Upload->folderName(0, 1000, $data->id)
                            ?>/<?php echo $data->id; ?>/medium.<?php echo $data->main_image; ?>"/></a></div>

            <?php } ?>

            <?php
            if ($data->stock_availability == 0) {
                    ?>

                    <form action="<?= Yii::app()->baseUrl; ?>/index.php/products/ProductNotify/id/<?= $data->id; ?>" method="post" name="notify">

                        <div class="stock_notify">      <?php
                            if (isset(Yii::app()->session['user'])) {
                                    ?>
                                    <input class="form-control" type="text" placeholder="Email Address" id="email"  name="email" value="<?= Yii::app()->session['user']['email'] ?>">
                                    <?php
                            } else {
                                    ?>
                                    <input type="text"  class="form-control" placeholder="Email Address" id="email"  name="email">
                                    <?php
                            }
                            ?>
                            <input type="submit" class="btn btn-primary" href="#" value="Notify Me" style="margin-top: 8px;">
                        </div>
                    </form>

                    <div class="out_of_stock">OUT OF STOCK</div>
            <?php } ?>


            <!-- /Notifyme-->

        </div><!-- /Product Image-->

        <div class="list_title">
            <h4><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Products/Detail/name/<?php echo $data->canonical_name; ?>"><?php echo $data->product_name; ?></a></h4>
            <p><i class="fa fa-rupee"></i> <?php echo $data->price; ?></p>
        </div>
    </div>
</div>
