<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
        <title>Newgen Shopping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mystyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>

        <script>
                var baseurl = "<?php print Yii::app()->request->baseUrl . "/index.php/"; ?>";
                var basepath = "<?php print Yii::app()->basePath; ?>";
        </script>
    </head>
    <body>

        <div class="container-two">

            <header>
                <div class="main-content">


                    <div class="content">

                        <div class="header animated">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 menu-padding">
                                        <div class="row ">

                                            <div class="col-md-4 col-sm-6 hidden-xs">
                                                <ul class="list-inline list-unstyled vendors headtop_right pull-right line-top">
                                                    <?php if (isset(Yii::app()->session['user'])) { ?>
                                                            <li><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/myaccount"><i class="fa un fa-user"></i>My Account</a></li>
                                                            <li><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/Logout"><i class="fa fa-sign-out"></i>Log Out</a></li>
                                                            <li><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cart/Mycart"><i class="fa fa-sign-out"></i>My Cart</a></li>

                                                            <?php
                                                    } else {
                                                            ?>
                                                            <li><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/login"><i class="fa un fa-unlock-alt"></i>Login</a></li>
                                                            <li><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/register"><i class="fa un fa-user-plus"></i>Sign Up</a></li>


                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 visible-xs">
                                                <ul class="list-inline list-unstyled software">

                                                    <li class="sp"><a class="log-new" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/login"><i class="fa uns fa-unlock-alt"></i>Login</a></li>
                                                    <li class="sp"><a class="log2-new" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/register"><i class="fa uns fa-user-plus"></i>Sign Up</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </header>
            <?php echo $content; ?>



        </div>






    </body>
</html>
