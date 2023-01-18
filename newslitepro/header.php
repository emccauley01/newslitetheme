<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News_Lite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--SIDE ADS--> 
<!--googleoff: all-->
<div id="ad-page-takeover-wrap" class="ad-page-takeover-wrap">
   <div class="ad-page-takeover ad-page-takeover-left">

   <?php if ( is_active_sidebar( 'skin-left-banner' ) ) : ?>
        <?php dynamic_sidebar( 'skin-left-banner' ); ?>
	<?php endif; ?>

    </div>
   <div class="ad-page-takeover ad-page-takeover-right">
   <?php if ( is_active_sidebar( 'skin-right-banner' ) ) : ?>
        <?php dynamic_sidebar( 'skin-right-banner' ); ?>
	<?php endif; ?>
   </div>
</div>
<!--googleon: all-->
<!--./SIDE ADS-->         

<!--PAGE START--> 
<div id="page" class="hfeed site">
<!--HEADER START--> 
<header id="masthead" class="site-header" role="banner">
<div class="sleeve">

<!--googleoff: all-->
<div id="header-ads" class="ad-wrap">
<div class="ad header-ad header-ad-banner">
	
<img src="<?php echo get_template_directory_uri(); ?>/img/header-banner-spacer.png">

<span class="ad-wrap">

<?php if ( is_active_sidebar( 'header-ad-banner' ) ) : ?>
        <?php dynamic_sidebar( 'header-ad-banner' ); ?>
	<?php endif; ?>
<!--ADS CODE HERE--> 

<!-- <a data-ad-id="145782" href="http://www.constructionenquirer.com/wp-content/themes/constructionenquirer/adclick.php?url=https%3A%2F%2Fcscs.uk.com%2Fsmartcheck%3Futm_source%3Dconstruction-enquirer%26utm_medium%3Dbanner%26utm_campaign%3Dconstructionenq-ads" target="_blank" onclick="track_ad_click(this);"><img src="https://www.constructionenquirer.com/wp-content/uploads/Cons_Enq_590x200_v5.gif"></a> -->

</span>

</div>
<div class="ad header-ad header-ad-button">
	<img src="<?php echo get_template_directory_uri(); ?>/img/header-button-spacer.png">
	<span class="ad-wrap">
		
   <?php if ( is_active_sidebar( 'header-top-button' ) ) : ?>
      <?php dynamic_sidebar( 'header-top-button' ); ?>
   <?php endif; ?>
   <?php if ( is_active_sidebar( 'header-bottom-button' ) ) : ?>
      <?php dynamic_sidebar( 'header-bottom-button' ); ?>
   <?php endif; ?>
	<!--ADS CODE HERE--> 
	<!-- <a data-ad-id="141445" href="http://www.constructionenquirer.com/wp-content/themes/constructionenquirer/adclick.php?url=https%3A%2F%2Fwww.grasscrete.com%2F%3Futm_source%3Dconstruction-enquirer%26utm_medium%3Dbanner%26utm_campaign%3Dconstructionenq-ads" target="_blank" onclick="track_ad_click(this);"><img src="https://www.constructionenquirer.com/wp-content/uploads/grasscrete Con-Enq-GC-animated-gif.gif"></a><a data-ad-id="432568" href="http://www.constructionenquirer.com/wp-content/themes/constructionenquirer/adclick.php?url=https%3A%2F%2Fwww.walkermodular.com%2F%3Futm_source%3Dconstruction-enquirer%26utm_medium%3Dbanner%26utm_campaign%3Dconstructionenq-ads" target="_blank" onclick="track_ad_click(this);"><img src="https://www.constructionenquirer.com/wp-content/uploads/320x95.gif"></a> -->
	
	</span>
	</div>
</div><!--googleon: all-->


   <div id="header-social-media" class="social-media-links">

   <?php wp_nav_menu( array( 'theme_location' => 'social-menu','menu_class' => 'social_menu'  ) ); ?>

   </div>


   <div id="header-advertise-link"><a href="/advertise/">Advertise</a></div>
   <div id="header-subscribe-link"><a href="#">Daily email sign up</a></div>
   <div id="header-subscribe">
      <div class="sleeve">
         <form action="<?php echo get_home_url(); ?>" id="subscription-form" method="post" class="form">
            <div class="close-button"><a href="#"><span>Close</span></a></div>
            <h3>Daily News Bulletin</h3>
            <fieldset>
               <div class="formItem">					
                  <input type="text" autocomplete="off" placeholder="Email address here" name="subscriber_email">
               </div>
               <div class="formItem formItemCheckbox">					
                  <input type="checkbox" name="subscriber_confirm" id="subscriber_confirm" value="1">
                  <label for="subscriber_confirm">
                  Please sign me up to receive the Daily News Bulletin. I also agree to receive occasional 
                  marketing emails from Construction Enquirer and selected advertisers.	
                  </label>												
               </div>
               <div class="formItem">					
                  <input type="submit" value="Sign-up">					
               </div>
            </fieldset>
            <div class="response-wrap">
               <div class="response response-success hide">
                  <h4>Thanks</h4>
               </div>
               <div class="response response-error hide">
                  <h4>Sorry, there was a problem processing your request</h4>
               </div>
               <div class="response response-invalid-email hide">
                  <h4>Please enter a valid email address</h4>
               </div>
               <div class="response response-no-consent hide">
                  <h4>We can't sign you up!</h4>
                  <p>Please check the box. As a free news service Construction Enquirer relies on advertising for funding. We are unable to send you free daily news without your consent to receive occasional marketing emails.</p>
               </div>
            </div>
            <div class="info-wrap">
               <p>
                  Here at Construction Enquirer we take your privacy seriously and will only use 
                  your information to administer your account and provide requested services. We will not share
                  your data with other companies and promise to keep your details safe and secure.
               </p>
               <p>
                  Our daily newsletter and website is a free service funded by advertising.
               </p>
               <p>
                  Newsletter subscribers will also receive occasional marketing emails from advertisers promoting 
                  construction related products. They will be clearly labelled as promotions.
               </p>
            </div>
         </form>
      </div>
   </div>

   
   <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>

            <h1 class="site-title">
               <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?>
               </a>
            </h1>
				<?php
			else :
				?>
            <h1 class="site-title">
               <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?>
               </a>
            </h1>
				<?php
			endif;
			$newslitepro_description = get_bloginfo( 'description', 'display' );
			if ( $newslitepro_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $newslitepro_description; ?></p> -->
	<?php endif; ?>

</div><!--./sleeve-->

<div id="navbar-wrap">

<div id="navbar-bottom">
      <button class="menu-toggle">Menu</button>
      <nav id="static-navigation" class="static-navigation">

		 <?php wp_nav_menu( array( 'theme_location' => 'static-menu', 'container_class' => 'menu-main-navigation-static-container','menu_class' => 'nav-menu', 'menu_id' => 'static-menu-1'  ) ); ?>

      </nav>
      <div id="awards-link"><a href="http://www.ukconstructionweek.com/construction-enquirer-awards">Awards</a></div>
      <div id="search-form-link" class="search-link"><a href="#"><span>Search</span></a></div>
      <div id="search-form">
         <div class="sleeve">
            <form action="<?php echo get_home_url(); ?>" method="get">
               <div class="close-button"><a href="#"><span>Close</span></a></div>
               <fieldset>
                  <input type="text" id="s" name="s" autocomplete="off" placeholder="eg: company name" data-alt-placeholder="Enter keywords">
                  <input type="submit" id="searchsubmit" alt="Search" value="Search">
               </fieldset>
            </form>
         </div>
      </div>
   </div>
   <!-- #navbar -->
   <div id="navbar" class="navbar expanded">
      <nav id="site-navigation" class="navigation main-navigation" role="navigation">
         <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'newslitepro' ); ?></a>


		 <?php wp_nav_menu( array( 'theme_location' => 'slide-menu', 'container_class' => 'menu-main-navigation-1-container','menu_class' => 'nav-menu', 'menu_id' => 'primary-menu-1'  ) ); ?>

         <div class="menu-main-navigation-2-container">

         <?php if ( is_active_sidebar( 'toggle-first-section' ) ) : ?>
         <?php dynamic_sidebar( 'toggle-first-section' ); ?>
         <?php endif; ?>


            <!-- <ul id="primary-menu-2" class="nav-menu">
               <li id="menu-item-119409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119409"><a href="https://www.constructionenquirer.com/contract-spy/ojeu-tenders/">OJEU Tenders</a></li>
            </ul> -->


         </div>
         <div class="menu-main-navigation-3-container">

         <?php if ( is_active_sidebar( 'toggle-last-section' ) ) : ?>
         <?php dynamic_sidebar( 'toggle-last-section' ); ?>
         <?php endif; ?>

            <!-- <ul id="primary-menu-2" class="nav-menu">
               <li id="menu-item-119412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119412">
                  <a href="https://www.constructionenquirer.com/advertise/">Advertise</a>
                  <div class="promo"><a href="https://www.constructionenquirer.com/advertise/">1.6 million page view per month<br>
                     49,000+ newsletter subscribers<br>
                     Ads from £400 per month<br>
                     Jobs from £200 per vacancy</a>
                  </div>
                  <div class="promo-link"><a href="https://www.constructionenquirer.com/advertise/">Find out more</a></div>
               </li>
            </ul> -->


         </div>
      </nav>
   </div>
</div><!--./navbar-wrap-->

</header><!--./HEADER STOP--> 