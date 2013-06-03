<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Html5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/new_style.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Le custom css -->
    <link href="css/news_dfk.css" rel="stylesheet">
    <link href="js/nailthumb/jquery.nailthumb.1.1.css" rel="stylesheet">
	
    

	

  </head>
  
    
	
  <body>	
  	<div class="container">
	
  		<div class="navbar navbar-fixed-top" >
  		      <div class="navbar-inner" style="">
  		        	
  		          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  		          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  		            <span class="icon-bar"></span>
  		            <span class="icon-bar"></span>
  		            <span class="icon-bar"></span>
  		          </a>
  		
  		          <!-- Be sure to leave the brand out there if you want it shown -->
  		          <!-- <a class="brand" href="#">Project name</a> -->
  		          <img id="logo_site" src="img/daisuki-logo-2.png" height="28" width="100" style="float: left; padding-left:50px; padding-right:20px; padding-top:8px;">
  		
  		          <!-- Everything you want hidden at 940px or less, place within here -->
  		          <div class="nav-collapse collapse">
  		
  		          	<!-- .nav, .navbar-search, .navbar-form, etc -->
  		            <ul class="nav">
  		              <li class="active"><a href="#">Home</a></li>
  		              <li><a href="#about">About</a></li>
  		              <li><a href="#contact">Contact</a></li>
  		            </ul>
  		
  		            <form class="navbar-form pull-right">
  		              <input class="span2" type="text" placeholder="Email">
  		              <input class="span2" type="password" placeholder="Password">
  		              <button type="submit" class="btn">Sign in</button>
  		            </form>
  		            
  		          </div>
  		        </div>
  		    </div>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#myCarousel').hide();
				$('#slider-thumbs').hide();
				$('#carousel-text').hide();

				$('#logo_site').hide();
				$('#logo_site').fadeIn(700);

  				img_width = $("#carousel-bounding-box").width();

  				if(img_width < 480){
  					img_height = 200;
  				}else{
  					img_height = 400;
  				}
				
				$(window).resize(function() {
  					img_width = $("#carousel-bounding-box").width();
					jQuery('.carousel-inner img').width(img_width).height('auto');
				});

				
				jQuery('.nailthumb-container').nailthumb({width:img_width,height:img_height,fitDirection:'top left'});
				jQuery('.nailthumb-container-tiny').nailthumb({width:80,height:50,fitDirection:'top left'});
				//alert('hello');
				$('#myCarousel').carousel('cycle'); 
				$('#myCarousel').carousel({  
  					interval: 2000 // in milliseconds  
				})  


				 
			       $('#myCarousel').carousel({
			             interval: 5000
			       });
			 
			       $('#carousel-text').html($('#slide-content-0').html());
			 
			       //Handles the carousel thumbnails
			       $('[id^=carousel-selector-]').click( function(){
			             var id_selector = $(this).attr("id");
			             var id = id_selector.substr(id_selector.length -1);
			             var id = parseInt(id);
			             $('#myCarousel').carousel(id);
			       });
			 
			 
			        // When the carousel slides, auto update the text
			        $('#myCarousel').on('slid', function (e) {
			                var id = $('.item.active').data('slide-number');
			                $('#carousel-text').html($('#slide-content-'+id).html());
			        });
				 
				$('#principal_content').niceScroll({cursoropacitymin:.5, cursorwidth: 10});
				

				$('#myCarousel').fadeIn(300);
				$('#slider-thumbs').fadeIn(300);
				$('#carousel-text').fadeIn(300);
				
			});
		</script>
		<hr>
		<div class="row">
                <!-- Main Area -->
                <div id="main_area">
                        <!-- Slider -->
                        <div class="row">
                                <div class="span12" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                                <div class="span8" id="carousel-bounding-box">
                                                        <div id="myCarousel" class="carousel slide">
                                                                <!-- Carousel items -->
                                                                <div class="carousel-inner">
                                                                        <div class="active item nailthumb-container thumbnail" data-slide-number="0"><a href="img/32656278.jpg" target="_blank"><img src="img/32656278.jpg" /></a></div>
                                                                        <div class="item nailthumb-container thumbnail" data-slide-number="1"><a href="img/32971889.jpg" target="_blank"><img src="img/slider/32971889.jpg" /></a></div>
                                                                        <div class="item nailthumb-container thumbnail" data-slide-number="2"><a href="img/17930629.jpg" target="_blank"><img src="img/slider/17930629.jpg"/></a></div>
                                                                        <div class="item nailthumb-container thumbnail" data-slide-number="3"><a href="img/35660135.jpg" target="_blank"><img src="img/slider/35660135.jpg"></a></div>
                                                                        <div class="item nailthumb-container thumbnail" data-slide-number="4"><a href="img/20858865.jpg" target="_blank"><img src="img/slider/20858865.jpg"/></a></div>
                                                                        <div class="item nailthumb-container thumbnail" data-slide-number="5"><a href="img/20985074.jpg" target="_blank"><img src="img/slider/20985074.jpg" /></a></div>
                                                                </div>
                                                                <!-- Carousel nav -->
                                                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                                                        </div>
                                                </div>
                                                <div class="span4" id="carousel-text"></div>
 
                                                <div style="display: none;" id="slide-content">
                                                        <div id="slide-content-0">
                                                                <h3>Slider One</h3>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-1">
                                                                <h3>Slider Two</h3>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-2">
                                                                <h3>Slider Three</h3>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-3">
                                                                <h3>Slider Four</h3>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-4">
                                                                <h3>Slider Five</h3>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-5">
                                                                <h3>Slider Six</h3>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                </div>
                                        </div>
 
                                </div>
                        </div> <!--/Slider-->
 
                        <div class="row hidden-phone" id="slider-thumbs">
                                <div class="span8">
                                        <!-- Bottom switcher of slider -->
                                        <ul class="thumbnails">
                                                <li class="span1">
                                                        <a class="thumbnail nailthumb-container-tiny" id="carousel-selector-0">
                                                                <img src="img//32656278.jpg"/>
                                                        </a>
                                                </li>
                                                <li class="span1">
                                                        <a class="thumbnail nailthumb-container-tiny" id="carousel-selector-1">
                                                                <img src="img/slider_thumbs/32971889.jpg" />
                                                        </a>
                                                </li>
                                                <li class="span1">
                                                        <a class="thumbnail nailthumb-container-tiny" id="carousel-selector-2">
                                                                <img src="img/slider_thumbs/17930629.jpg"/>
                                                        </a>
                                                </li>
                                                <li class="span1">
                                                        <a class="thumbnail nailthumb-container-tiny" id="carousel-selector-3">
                                                                <img src="img/slider_thumbs/35660135.jpg" />
                                                        </a>
                                                </li>
                                                <li class="span1">
                                                        <a class="thumbnail nailthumb-container-tiny" id="carousel-selector-4">
                                                                <img src="img/slider_thumbs/20858865.jpg"/>
                                                        </a>
                                                </li>
                                                <li class="span2">
                                                        <a class="thumbnail nailthumb-container-tiny" id="carousel-selector-5">
                                                                <img src="img/slider_thumbs/20985074.jpg" />
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                        </div>


			<div class="row" id="second-container">
					<div class="span4">
						<blockquote>
							<p>Doquimta Systems.</p>
							<small>Someone famous in <cite title="">Body of work</cite></small>
						</blockquote>
						<div class="tabbable tabs-below">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab">Informacion</a></li>
								<li><a href="#tab2" data-toggle="tab">Section 2</a></li>
								<li><a href="#tab3" data-toggle="tab">Section 2</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab1">
									<ul class="thumbnails">
										<li class="span3">
											<a class="thumbnail" href="">
												<img src="img/slider/32656278.jpg">
											</a>
											<h4>new K movie</h4>
											<p style="font-size: .85em">Featuring a hero unit for a primary message and three supporting elements.</p>
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="tab2">
									<p>Howdy, I'm in Section 2.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="span8" id="principal_content">
						<h1>Welcome to the new Mood.</h1>
						
							<img src="img/32971889.jpg" alt="">
							<hr>
							<img src="img/17930629.jpg" alt="">
							
						
						
					</div>
					</div>
				</div>
				
			</div>
		</div>
		<hr>
			<footer>
		<div class="row">
			<div class="span3"><h2 class="text-center">Column 1</h2>The information that will be placed here is not centered.</div>
			<div class="span3"><h2 class="text-center">Column 2</h2>The information that will be placed here is not centered.</div>
			<div class="span3"><h2 class="text-center">Column 3</h2>The information that will be placed here is not centered.</div>
			<div class="span3"><h2 class="text-center">Column 4</h2>The information that will be placed here is not centered.</div>
		</div>
	</footer>

		</div><!-- termina containter -->


  	</div>
	
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/nailthumb/jquery.nailthumb.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>

  </body>
</html>
