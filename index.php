<!DOCTYPE html>
<html lang="en">
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
  		          <a class="brand" href="#">Project name</a>
  		
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
				jQuery('.nailthumb-container').nailthumb({width:770,height:450,fitDirection:'top left'});
				//alert('hello');
				$('#myCarousel').carousel('cycle'); 
				$('#myCarousel').carousel({  
  					interval: 2000 // in milliseconds  
				})  
				
			});
		</script>

		<div class="row">
			<div class="span12">
				
				<div class="row">
					<div class="span4">
						<blockquote>
							<p>Doquimta Systems.</p>
							<small>Someone famous in <cite title="">Body of work</cite></small>
						</blockquote>
						<div class="tabbable tabs-below">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#1" data-toggle="tab">Informacion</a></li>
								<li><a href="#2" data-toggle="tab">Section 2</a></li>
								<li><a href="#3" data-toggle="tab">Section 2</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="1">
									<ul class="thumbnails">
										<li class="span3">
											<a class="thumbnail" href="#">
												<img src="img/32656278.jpg" height="498" width="650" alt="">
											</a>
											<h4>new K movie</h4>
											<p style="font-size: .85em">Featuring a hero unit for a primary message and three supporting elements.</p>
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="2">
									<p>Howdy, I'm in Section 2.</p>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="span8">
						<div id="myCarousel" class="carousel slide" style="width='803px'; margin: 0 auto">
							<div class="carousel-inner">
								<div class="item nailthumb-container">
									<img src="img/32971889.jpg" height="500" width="803" alt="">
									<div class="carousel-caption">
										<h4>First Thumbnail label</h4>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
								<div class="item nailthumb-container">
									<img src="img/35079879.jpg" height="500" width="803" alt="">
									<div class="carousel-caption">
										<h4>Second Thumbnail label</h4>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
								<div class="item active nailthumb-container">
									<img src="img/35660135.jpg" height="500" width="803" alt="">
									<div class="carousel-caption">
										<h4>Third Thumbnail label</h4>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		</div>
			


  	</div>
	


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/nailthumb/jquery.nailthumb.1.1.min.js"></script>

  </body>
</html>
