<?php 
  /**
  *
  * Titiksha official website
  * http://github.com/smvdu/titiksha
  *
  */

	/* Local configurations/ overrides
	***********************************************/	

	include ('php/functions.php');
  
?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/<?php echo SITE_TYPE; ?>" lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php echo site_title; ?></title>
	    <meta itemprop="name" content="<?php print(site_title)?>">
	    <meta name="description" content="<?php print(site_description);?>">
	    <meta itemprop="description" content="<?php print(site_description);?>">
	    <meta itemprop="image" content="<?php print(site_photo_url);?>">
	    <meta name="keywords" content="<?php print(site_keywords);?>">
	    <meta name="author" content="<?php print(site_author);?>">
		
	  	<?php get_fb_meta(); ?>
	  	<!-- css for menu.php -->
	  	<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
		<!-- ======================== -->
		<link rel="shortcut icon" href="intersection.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <!--  Timer css scripts   !-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/jquery.countdown.css" />

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/PxLoader.js"></script>
        <script type="text/javascript" src="js/PxLoaderImage.js"></script>
		
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<div class="container">	
			
			<div class="os-phrases" id="os-phrases">
			<!-- temporary keywords , development in progress-->
				<h3>Get Ready</h3>
				<h3>To Witness</h3>
				<h3>The Most Innovative</h3>
				<h3>Exciting</h3>
				<h3>And Creative</h3>
				<h3>Technical Festival</h3>
				<h3>Of North India</h3>
				<h3>TITIKSHA</h3>
			</div>
			<!-- right division -->
			<div id="right-part">
				<div class="transformed" id="trans1"></div>
				<div class="transformed" id="trans2"></div>
				<div class="transformed" id="trans3"></div>
				<div class="transformed" id="trans4"></div>
				<div class="transformed" id="trans5"></div>
				<div class="transformed" id="trans6"></div>
				<div class="transformed" id="trans7"></div>
				<div class="transformed" id="trans8"></div>
				<div class="transformed" id="trans9"></div>
				<div class="transformed" id="trans10"></div>
				<div class="transformed" id="trans11"></div>
				<div class="transformed" id="trans12"></div>
				<div class="transformed" id="trans13"></div>
				<div class="transformed" id="trans14"></div>
				<div class="transformed" id="trans15"></div>
				<div class="transformed" id="trans16"></div>

				
				<div id="right-header">
					<span id="header-text">SMVDU</span>
				</div>
                
                <div id="mid-text">
                    <h2>Titiksha 2k13</h2>
                    <p>4th - 6th October 2013</p>
                </div>

                <div id="loaderWrapper">
                	<div id="loaderIndicator">
                		<p id="progress"></p>
                	</div>
                	<div id="enter">
                		Enter 
                	</div>
                </div>


			</div>
		</div><!-- /container of loader -->
		<!-- added menu here -->
		<div class="container_menu">
            <img src="img/3.jpg" id="bg"/>
            <div class="header">
                <div id="h-text">
                    <p>Titiksha 2k13</p>
                </div>
            </div>
            
            <div class="content">
                <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Events</h2>
                                <h3 class="ca-sub">Personalized to your needs</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">H</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Workshop</h2>
                                <h3 class="ca-sub">Advanced use of technology</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon" id="heart">N</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Competitions</h2>
                                <h3 class="ca-sub">Understanding visually</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">K</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Register Now</h2>
                                <h3 class="ca-sub">Professionals in action</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">L</span>
                            <div class="ca-content">
                                <h2 class="ca-main">About Us</h2>
                                <h3 class="ca-sub">24/7 for you needs</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <div id="countdown"></div>
                <p id="note"></p>
                
            </div><!-- content -->
            <div class="footer">
                <a target="_blank" href="https://www.facebook.com/titiksha2k13"><img src="img/fb.png"></a> 
                <span>&nbsp &nbsp</span>
                <img src="img/twi.png"></span>
            </div>
        </div><!-- container_menu -->


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        
		 <!-- JavaScript includes -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script>
			$(document).ready(function() {
				$("#os-phrases > h3").lettering('words').children("span").lettering().children("span").lettering(); 
				
				//removes the loader page
				$("#enter").click(function(){
					$(".container").addClass("open");
				});
			})
		</script>
		<script type="text/javascript">
			
			$(document).ready(function(){


				var loader = new PxLoader();

				for(var i= 1; i < 19; i++)
					loader.addImage("../img/"+i+".jpg");
				

	        	loader.addCompletionListener(function() {
	        		$("#enter").fadeIn();
	        		$("#progress").fadeOut();
	        	});

	        	loader.addProgressListener(function(e) {
	        		var percent = Math.round(e.completedCount / e.totalCount * 100);
	        		$("#progress").html(percent+"% Loaded");

	           	});

	        	loader.start();
	        });
		</script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>
</html>