   

<section class="banner">

    <div id="large-header" class="large-header " style="height: 124px; background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/img_inn.jpg)">


        <div class="banner_txt">
            <h1 class="animated fadeInLeft m2">My <span class="redish"> Products </span></h1>

        </div>

    </div>


</section>


<div class="clearfix"></div>



<section class="cart-main">
    <div class="container">



        <div class="heading">




        </div>


        <div class="row">
            <div class="col-md-9">

                <div class="left-my_acnt">
                    
                    
                    
                    <?php 
                    foreach ($data as $product)
                    {
                        echo '<br>'.$product->product_name;
                    }
                    
                    ?>


                    <div class="panel-body sis">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="tb"> Image</th>
                                        <th>Product Name</th>
                                        <th></th>
                                        <th>Price</th>


                                        <th>description</th> 

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="catz" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cart.jpg"></td>
                                        <td><h2>Lorem Ipsum</h2></td>
                                        <td class=""></td>
                                        <td><h2>₹ 25000</h2></td>

                                        <td  class=""><h2>Lorem Ipsum is simply dummy text </h2></td>

                                        <td></td>

                                    </tr>


                                    <tr>
                                        <td><img class="catz" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cart2.jpg"></td>
                                        <td><h2>Lorem Ipsum</h2></td>
                                        <td class=""></td>
                                        <td><h2>₹ 25000</h2></td>

                                        <td  class=""><h2>Lorem Ipsum is simply dummy text </h2></td>

                                        <td></td>

                                    </tr>


                                </tbody>


                            </table>
                        </div>


                    </div>



                    <div class="clearfix"></div>
                </div>

            </div>

            <div class="col-md-3 sidebar ">
                <ul>
                    <li ><a href="Profile.php"> <i class="fa fa-user fa-2x" aria-hidden="true"></i> <span>Profile</span></a></li>
                    <li><a href="add_products.php" > <i class="fa fa-cart-arrow-down  fa-2x" aria-hidden="true"></i> <span>Add product</span></a></li>
                    <li><a href="password.php"> <i class="fa fa-unlock-alt fa-2x" aria-hidden="true"></i></i> <span>Change Password</span></a></li>
                    <li><a href="my_products.php"   class="act "> <i class="fa fa-cube fa-2x" aria-hidden="true"></i> <span>My products</span></a></li>
                    <li><a href=""> <i class="fa fa-cc-diners-club  fa-2x" aria-hidden="true"></i><span>Paid Post</span></a></li>

                    <li><a href="Featured_ads.php" > <i class="fa fa-picture-o fa-2x" aria-hidden="true"></i> <span>Featured ads </span></a></li>
                    <li><a href="my_sales.php"> <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i> <span>My Sales</span></a></li>
                    <li><a href="payment.php"  > <i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i><span>Payment / Payout</span></a></li>
                </ul>

            </div>
        </div>



    </div>
</div>
</section> <!-- end of facial -->




<!-- end of container -->




<?php 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.11.3.min.js');
//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap.min.js');
?>