
<div class="clearfix"></div>


<section class="facial services">
    <div class="container">
        <div class="row">



            <!-- end of left -->

            <div class="left col col-md-12 col-sm-12 col-xs-12 ab_rgt">

                <div class="thnk contact-form-box">

                    <h2>Thank you for registration</h2>

                    <br>
                  <p>  Hi Merchant,<br> we have sent a verification link to your e-mail address <?php echo $model->email; ?>.
                    <br>Please click on the verification link to help us create your account.
                    <br><br>
                    <br>Please note
                    <br>It might take upto 2-3 minutes for verification mail to arrive.
                    <br>Please check your Spam/Junk/Promotions folder as well if you don't receive the mail in your Inbox.
                    <br> 
                    Note : temporary link
                    <a href="<?php echo MerchantDetailsController::siteURL() . "user.php/merchant-activation?id=" . $user_model->activation_link; ?>"> Click here to activate </a>
                    <br><br><br>
                  </p>
                </div>

            </div></div>
    </div>
</section> <!-- end of facial -->


<!-- end of container -->


<div class="banner"> 
    <img class="img-responsive" src="images/layer.jpg" alt="">
    <h2>Turning your visions into realities<br><span class="wis">Top Event managers</span></h2>
    <div class="bottoms">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <h4>Prominence <span class="events">event managements</span></h4>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </h3>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <a href="#" class="lakshmi" tabindex="0">View More Details</a>
        </div>
    </div>
</div>
