<!-- Start Header 
* #########################################################################
* By Mukesh
* Home/Front page temple 
Description: This page is used to customize Home page.
-->

<header>
    <div class="container">
        <h1 class="logo">
	    <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
		<?php endif; ?>
        </h1>
        <div class="navigation">
            <?php print render($page['main_menu']); ?>
        </div>
    </div><!-- container -->
</header>
<!-- End Header -->

<!-- HEADER REGION --> 


<!-- Start Banner -->
<section class="main-banner">
    <div class="container">
      <?php print render($page['preface_first']); ?>
    </div><!-- container -->
</section>
<!-- End Banner -->


<!-- Start Event Section -->
<section class="upcoming-event clearfix">  

    <div class="container">
        <div class="text-left">
<?php  print render($page['preface_second']); ?>
        </div>
        <a href="user/register" class="btn">Register</a>
    </div><!-- container -->
</section>
<!-- End Event Section -->


<!-- Start Get Involved -->
<section class="get-involved padded40 block-content clearfix">  
    <div class="container">
        <h2 class="animated fadeInUp" data-wow-delay="1s">Get Involved</h2>
        <div class="row">

<?php  print render($page['postscript_first']); ?>

        </div>
    </div><!-- container -->
</section>
<!-- End Get Involved -->

<!-- Start Our mission -->
<section class="padded40 block-content even clearfix">  
    <div class="container">
        <div class="our-mission clearfix">
            <h2 class="animated fadeInUp" data-wow-delay="1s">Our mission</h2>
            <p class="text-center animated fadeInRight">Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</p>
            <h4  class="text-center animated fadeInLeft">If you are a charity or a supplier, we are ready to welcome you.</h4>
            <div class="row">
                     <?php  print render($page['postscript_second']); ?>



            </div>
        </div>  
        <div class="our-members">
            <h2 class="animated fadeInUp" data-wow-delay="1s">Our Members</h2>

            <div id="partners" class="owl-carousel owl-theme animated fadeInUp" data-wow-delay="1.2s">
                    <?php  print render($page['our_members_reg']); ?>



            </div>
        </div>

    </div><!-- container -->
</section>
<!-- End Our mission -->

<!-- Start  Blog-->
<section class="padded40 block-content clearfix">  
    <div class="container">
        <h2 class="animated fadeInUp" data-wow-delay="1s">Blog</h2>

        <div id="blogs" class="owl-carousel blog owl-theme animated fadeInUp" data-wow-delay="1.2s">
             <?php  print render($page['our_blogs_reg']); ?>


        </div>
    </div><!-- container -->
</section>
<!-- End Blog -->

<!-- Start Footer -->
<footer>
  	<?php  print render($page['footer_first']); ?>
</footer>
<!-- End Footer -->


