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
       
    </div>
   <div class="ad-page-takeover ad-page-takeover-right">

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

    </div>
    <div class="ad header-ad header-ad-button">

    </div>
</div><!--googleon: all-->


   <div id="header-social-media" class="social-media-links">
      <ul>
         <li class="social-media-link twitter"><a href="https://twitter.com/ConstructionEnq" target="_blank" class="socicon-twitter"><span>Twitter</span></a></li>
         <li class="social-media-link linkedin"><a href="https://www.linkedin.com/company/construction-enquirer" target="_blank" class="socicon-linkedin"><span>LinkedIn</span></a></li>
         <!--<li class="social-media-link google"><a href="#" target="_blank" class="socicon-googleplus"><span>Google</span></a></li>-->
         <li class="social-media-link facebook"><a href="https://www.facebook.com/ConstructionEnquirer/" target="_blank" class="socicon-facebook"><span>Facebook</span></a></li>
      </ul>
   </div>


   <div id="header-advertise-link"><a href="/advertise/">Advertise</a></div>
   <div id="header-subscribe-link"><a href="#">Daily email sign up</a></div>
   <div id="header-subscribe">
      <div class="sleeve">
         <form action="https://www.constructionenquirer.com" id="subscription-form" method="post" class="form">
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

   
   <h1 class="site-title">
      <a class="home-link" href="https://www.constructionenquirer.com/" title="Construction Enquirer" rel="home">
         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 389 116.3" style="enable-background:new 0 0 389 116.3;" xml:space="preserve">
            <style type="text/css">
               .st0{fill:#222222;}
            </style>
            <g>
               <path class="st0" d="M243,78.2c1.1-1.4,2.6-2.6,6.7-2.6c1.1,0,1.5,0.1,2.2,0.2v-9.3c-0.5-0.1-1.1-0.1-1.8-0.1
                  c-4.9,0-6.6,2.2-7.1,2.9V78.2z M241.2,67.2h-10.4v35.7h10.4V67.2z M216.6,91.7c-0.5,0.9-2,3.9-6.6,3.9c-6.4,0-8.3-6-8.3-11.1
                  c0-8.1,4.2-10.5,8-10.5c2.2,0,4.2,0.9,5.4,2.5c0.5,0.7,1.1,1.8,1.5,3.7h-12.7c-0.3,1.4-0.4,2.6-0.4,4c0.1,1.5,0.1,2.5,0.4,3.7h23.4
                  c0-5.7-1-11.5-4.2-15.6c-2.6-3.5-7-6.3-13.3-6.3c-11,0-18.4,8-18.4,19.1c0,10.1,6.1,18.8,18.3,18.8c5.3,0,10.6-1.8,14.1-5.9
                  c1.8-2.2,2.6-4.3,3.1-5.5L216.6,91.7z M182.4,78.2c1.1-1.4,2.6-2.6,6.7-2.6c1.1,0,1.5,0.1,2.2,0.2v-9.3c-0.5-0.1-1.1-0.1-1.8-0.1
                  c-4.9,0-6.6,2.2-7.1,2.9V78.2z M180.6,67.2h-10.4v35.7h10.4V67.2z M164.5,56.2h-10.2v9h10.2V56.2z M164.5,67.1h-10.2v35.8h10.2
                  V67.1z M148.8,67.2h-10.2v35.7h10.2V67.2z M116.3,88.2c0.1,3.8,0.1,8.1,2.4,11.2c2.5,3.6,6.9,4.4,9.6,4.4c3.9,0,6.4-1.5,8.5-2.8
                  v-7.6c-0.7,0.6-2.2,2-4.7,2c-1.3,0-3.2-0.5-4.4-2c-1-1.4-1.1-2.9-1.2-5.5V67.2h-10.3V88.2z M110.9,67.2h-10.2v47h10.2V67.2z
                  M99,93.3c-1.3,1.3-2.8,2-4.6,2c-1.2,0-2.6-0.4-3.8-1.3c-2.4-1.7-3.4-5-3.4-9c0-2.7,0.3-5.5,1.9-7.8c1.1-1.5,3-2.9,5.5-2.9
                  c1.7,0,3.2,0.5,4.4,1.8v-8.3c-1.4-0.8-3-1.8-6.5-1.8c-8.3,0-15.6,6.9-15.6,18.8c0,8.6,4.2,18.8,15.2,18.8c3,0,5.2-0.9,6.9-1.7V93.3
                  z M52.6,77.7c0.6-0.7,2-2.4,4.9-2.4c5,0,5.3,4.5,5.3,6.1v21.5h10.4v-22c-0.1-3.7-0.2-8.7-4.8-12c-1.9-1.4-4.5-2.3-7.5-2.3
                  c-3.8,0-5.9,1.3-8.2,3V77.7z M50.8,67.2H40.5v35.7h10.3V67.2z M35,74.1H14.9v8.4H35V74.1z M36.7,56.3H14.9v8.5h21.8V56.3z
                  M37.2,94.2H14.9v8.6h22.2V94.2z M13.1,56.3H2.7v46.6h10.5V56.3z"></path>
               <path class="st0" d="M366.9,22.7c0.6-0.7,2-2.4,4.9-2.4c5,0,5.3,4.5,5.3,6.1v21.5h10.4v-22c-0.1-3.7-0.2-8.7-4.8-12
                  c-1.9-1.4-4.5-2.3-7.5-2.3c-3.8,0-5.9,1.3-8.2,3V22.7z M365.2,12.2h-10.3v35.7h10.3V12.2z M333.5,49c11.9-0.9,17.6-10,17.6-19.4
                  c0-8.1-4.4-17.9-17.6-18.6v8.2c4.6,0.5,7.2,4,7.2,10.4c0,9.2-5,10.5-7.2,11V49z M331.8,40.6c-2.1-0.3-7.4-1.3-7.4-10.7
                  c0-2,0-9.8,7.4-10.8V11c-12.1,0.9-17.8,9.3-17.8,19c0,3.8,1.1,18.2,17.8,19V40.6z M310,1.2h-10.2v9H310V1.2z M310,12.1h-10.2v35.8
                  H310V12.1z M280.1,19.8v18.5c0.1,4.8,0.5,10,10.2,10c2,0,3.1-0.1,6.8-0.5v-7.9c-1.6,0.1-2,0.1-2.7,0.1c-3.9,0-4.1-1-4-5.3V19.8h6.7
                  v-7.7h-6.7V5.6h-10.2v6.5h-5v7.7H280.1z M276,24.4c-0.4-2.3-1-6.1-4.8-9.6c-1.8-1.6-5.1-3.8-10.8-3.9v8.3c2.6,0.5,4.8,1.4,5.6,5.7
                  L276,24.4z M260.4,48.8c10.7-0.5,15-7.7,15.8-14.3l-10-0.5c-0.7,3.5-2,5.5-5.8,6.1V48.8z M258.7,40.2c-1.1-0.2-3-0.7-4.5-2.6
                  c-1.9-2.5-2-6.1-2-7.7c0-3.5,0.7-9.6,6.5-10.6V11c-8.1,0.3-17,5.6-17,19.1c0,8.7,4.2,18.4,17,18.8V40.2z M237.8,12.2h-10.2v35.7
                  h10.2V12.2z M205.3,33.2c0.1,3.8,0.1,8.1,2.4,11.2c2.5,3.6,6.9,4.4,9.6,4.4c3.9,0,6.4-1.5,8.5-2.8v-7.6c-0.7,0.6-2.2,2-4.7,2
                  c-1.3,0-3.2-0.5-4.4-2c-1-1.4-1.1-2.9-1.2-5.5V12.2h-10.3V33.2z M194.7,23.2c1.1-1.4,2.6-2.6,6.7-2.6c1.1,0,1.5,0.1,2.2,0.2v-9.3
                  c-0.5-0.1-1.1-0.1-1.8-0.1c-4.9,0-6.6,2.2-7.1,2.9V23.2z M192.9,12.2h-10.4v35.7h10.4V12.2z M162.9,19.8v18.5
                  c0.1,4.8,0.5,10,10.2,10c2,0,3.1-0.1,6.8-0.5v-7.9c-1.6,0.1-2,0.1-2.7,0.1c-3.9,0-4.1-1-4-5.3V19.8h6.7v-7.7h-6.7V5.6h-10.2v6.5h-5
                  v7.7H162.9z M156.2,23.1c-0.3-2.7-0.9-5.6-3.7-8.3c-2.9-2.7-6.9-3.7-11-3.9v7.5c1.4,0.3,4.9,0.8,5,5.2L156.2,23.1z M142.3,34.5
                  c2.3,0.6,4.6,1.3,4.6,3.4c0,3-3.9,3.4-5.3,3.4v7.5c1.5,0,5.3-0.1,8.9-1.7c4.5-2,6.7-5.7,6.7-10.2c0-8.6-7.7-10.3-12.2-11.4
                  l-5.3-1.2c-3.1-0.9-4.4-1.3-4.4-3c0-2.2,2.2-2.8,4.4-3V11c-3,0.2-8.1,0.5-11.6,4.2c-2.3,2.5-2.6,5.4-2.6,7.3c0,7.7,6,9.3,10.1,10.4
                  L142.3,34.5z M139.8,41.2c-4.4-0.9-5.1-2.8-5.6-5.9l-9.8,0.3c0.5,7.7,4.5,12.3,15.4,13.2V41.2z M100.1,22.7c0.6-0.7,2-2.4,4.9-2.4
                  c5,0,5.3,4.5,5.3,6.1v21.5h10.4v-22c-0.1-3.7-0.2-8.7-4.8-12c-1.9-1.4-4.5-2.3-7.5-2.3c-3.8,0-5.9,1.3-8.2,3V22.7z M98.4,12.2H88.1
                  v35.7h10.3V12.2z M66.7,49c12-0.9,17.6-10,17.6-19.4c0-8.1-4.4-17.9-17.6-18.6v8.2c4.6,0.5,7.2,4,7.2,10.4c0,9.2-5,10.5-7.2,11V49z
                  M65,40.6c-2.1-0.3-7.4-1.3-7.4-10.7c0-2,0-9.8,7.4-10.8V11c-12.1,0.9-17.8,9.3-17.8,19c0,3.8,1.1,18.2,17.8,19V40.6z M34.2,31.6
                  c-0.3,3-1.9,7.5-8.9,8.5v8.8c3.8-0.3,9.2-0.8,13.9-4.9c4.7-4.1,5.7-9.6,6.1-11.8L34.2,31.6z M44.5,15.4C44,13,42.5,6,34.4,2.3
                  c-1.7-0.7-4.6-1.7-9.1-1.9v8.6c6.5,0.6,8.2,5,8.6,7.1L44.5,15.4z M23.5,40c-5.5-0.3-11.2-4.3-11.2-14.9c0-5.5,1.1-15.1,11.2-16V0.4
                  C7,1,1,13.4,1,24.5c0,11.8,6.3,19.2,12.7,22.2c3.9,1.8,7.1,2,9.8,2.1V40z"></path>
            </g>
         </svg>
      </a>
   </h1>

</div><!--./sleeve-->

<div class="navbar-wrap">

<div id="navbar-bottom">
      <button class="menu-toggle">Menu</button>
      <nav id="static-navigation" class="static-navigation">
         <div class="menu-main-navigation-static-container">
            <ul id="static-menu-1" class="nav-menu">
               <li id="menu-item-119413" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119413"><a href="https://www.constructionenquirer.com/category/news/">News</a></li>
               <li id="menu-item-119414" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119414"><a href="https://www.constructionenquirer.com/job-spy/">Jobs</a></li>
               <li id="menu-item-127083" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-127083"><a href="/directory">Directory</a></li>
               <li id="menu-item-447020" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447020"><a href="https://www.constructionenquirer.com/contract-leagues/">Data</a></li>
            </ul>
         </div>
      </nav>
      <div id="awards-link"><a href="http://www.ukconstructionweek.com/construction-enquirer-awards">Awards</a></div>
      <div id="search-form-link" class="search-link"><a href="#"><span>Search</span></a></div>
      <div id="search-form">
         <div class="sleeve">
            <form action="https://www.constructionenquirer.com" method="get">
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
         <a class="screen-reader-text skip-link" href="#content" title="Skip to content">Skip to content</a>
         Setting-Cache
         <div class="menu-main-navigation-1-container">
            <ul id="primary-menu-1" class="nav-menu">
               <li id="menu-item-119404" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-119404"><a href="http://www.constructionenquirer.com/" aria-current="page">Home</a></li>
               <li id="menu-item-119403" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119403"><a href="https://www.constructionenquirer.com/category/news/">News</a></li>
               <li id="menu-item-447022" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447022"><a href="https://www.constructionenquirer.com/contract-leagues/">Data</a></li>
               <li id="menu-item-155962" class="search-link menu-item menu-item-type-custom menu-item-object-custom menu-item-155962"><a href="#">Search</a></li>
               <li id="menu-item-119405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119405"><a href="https://www.constructionenquirer.com/job-spy/">Jobs Spy</a></li>
               <li id="menu-item-119406" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119406"><a href="https://www.constructionenquirer.com/category/projects/">Projects</a></li>
               <li id="menu-item-119407" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119407"><a href="https://www.constructionenquirer.com/category/plant/">Plant</a></li>
            </ul>
         </div>
         <div class="menu-main-navigation-2-container">
            <ul id="primary-menu-2" class="nav-menu">
               <li id="menu-item-119409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119409"><a href="https://www.constructionenquirer.com/contract-spy/ojeu-tenders/">OJEU Tenders</a></li>
            </ul>
         </div>
         <div class="menu-main-navigation-3-container">
            <ul id="primary-menu-2" class="nav-menu">
               <li id="menu-item-119412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119412">
                  <a href="https://www.constructionenquirer.com/advertise/">Advertise</a>
                  <div class="promo"><a href="https://www.constructionenquirer.com/advertise/">1.6 million page view per month<br>
                     49,000+ newsletter subscribers<br>
                     Ads from £400 per month<br>
                     Jobs from £200 per vacancy</a>
                  </div>
                  <div class="promo-link"><a href="https://www.constructionenquirer.com/advertise/">Find out more</a></div>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div><!--./navbar-wrap-->

</header><!--./HEADER STOP--> 

<!--MAIN START--> 
<div id="main" class="site-main">

</div><!--./MAIN STOP--> 

<!--FOOTER START--> 
<footer id="site-footer" class="site-footer" role="contentinfo">

</footer><!--./FOOTER STOP--> 

</div><!--./PAGE STOP--> 

</body>
</html>
