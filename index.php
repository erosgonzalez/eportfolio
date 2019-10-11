<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>Folio - Personal Portfolio Template</title>
<meta name="description" content="OnePage Resume Portfolio">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
<!--font-family: 'Metrophobic', serif;-->
<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'> 
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--wrapper start-->
<div class="wrapper noGap" id="wrapper">

<!--Header start -->
<header>
  	<!--menu start-->
    <div class="menu">
    <a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
              	<!--<div class="logo">logo</div> -->
                <div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <!-- <a class="navbar-brand" href="#">Menu</a>  --></div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class="menuItem active"><a href="#wrapper">Home</a></li>
                        <li class="menuItem"><a href="#aboutus">About Me</a></li>
                        <li class="menuItem"><a href="#skillset">Skills</a></li>
                        <li class="menuItem"><a href="#experience">Experience</a></li>
                        <li class="menuItem"><a href="#education">Education</a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end--> 
    <!--banner start-->
    <div class="banner row" id="banner">
    <div class="bannerText">
        <h1>Eros Gonzalez-Lopez</h1>
        <h3>Add a soundtrack to your life and perfect it</h3>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
        <!--background slide show start-->
        <div class="slide"> 
          <img src="images/header-image/IMG_3682.jpg" alt="image01"> </div>
        <div class="slide"> 
          <img src="images/header-image/446324.jpg" alt="image01"> </div>
        <!--background slide show end--> 
      </div>
    </div>
    <!--banner end--> 
    
  </header>
  <!--Header end -->
  
 <!--about us start-->
  <section class="aboutus" id="aboutus">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
      	<div class="heading">
        <h2>About me</h2>
      </div>
      </div> 
       </div> 
      <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="images/myImages/egrad.JPG" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
        	<h5 style="font-size: 30px;">Eros Gonzalez-Lopez</h5><br/>
            <p style="font-size: 20px;">TEST
            <p>Some of my interest include: image processing, audio analysis, AI, music.</p>
            <p><a><img src="images/Resume.png"></img></a></p>
        </div>
      </div>
    </div>
  </section>
  <!--about us end--> 
  <!--Skillset start -->
  <section id="skillset" class="skillset">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
               <div class="heading">
                <h2>Skills</h2>
              </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Flappy Cube https://bit.ly/2qRAYHA</h4>
                <h5>Hartnell College , Salinas, CA</h5>
                  <p>
                       Developed a recreation of the mobile game  Flappy Bird  with 
                       rhythm elements inspired from  The Impossible Game using C++, SDL, 
                       and Aubio API .Created game art using Photoshop, implemented game 
                       logic, and engineered rhythmic analysis.
                  </p>
            </div>
        </div>
          <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Allegro, A Musician's Tool https://bit.ly/2vMsvur</h4>
                <h5>CSUMB , Seaside, CA</h5>
                  <p>
                       Built a tool for musicians to record and analyze recordings using Python, HTML, 
                       and Alsaaudio API. Developed backend to take live or pre-recorded audio from the 
                       user to transcribe notes played/analyzed into a text file.
                  </p>
            </div>
              <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Mood, A Facial Expression Recognizer https://bit.ly/2HkNCoH</h4>
                <h5>CSUMB , Seaside, CA</h5>
                  <p>
                      Built a facial expression recognition website that determines mood and recommends a 
                      music playlist using Python, HTML, and OpenCV API. Generated different Haar Cascades 
                      using machine learning techniques for facial recognition, and implemented a website to 
                      take in user pictures and analyzing for mood.
                  </p>
            </div>
            <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Faculty Portfolio https://bit.ly/2qSu3gA</h4>
                <h5>CSUMB , Seaside, CA</h5>
                  <p>
                       Researched and wrote about various faculty at CSUMB. 
                  </p>
            </div>
            <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Intro Presentation https://bit.ly/2HlpXoa</h4>
                <h5>CSUMB , Seaside, CA</h5>
                  <p>
                       Presentation introducing myself to CST-300 class. 
                  </p>
            </div>
            <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Tech Tutorial</h4>
                <h5>CSUMB , Seaside, CA</h5>
                  <p>
                       Researched and contributed to a tech tutorial discussing  
                  </p>
            </div>
        </div>
        </div>
        </div>
    </div>
  </section>
  <!--Skillset end -->
  <!--Work Experties start -->
  <section id="experience" class="myexperties">
  	<div class="container">
        <div class="heading">
        <h2>Work Experience</h2>
      </div>
        
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	Jan 2018 - Feb 2018
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Faces of DACA http://bit.ly/2FOQ85Y</h4>
                <h5>Event Assistant</h5>
                  <p>
                       Assisted event coordinator and event manager 
                       with pre-event logistics for the Faces of DACA celebration. 
                       Advertised event through social media marketing, acquired food 
                       sponsorship, and managed volunteers. 
                       Hosted 250 Salinas Valley community members and 
                       raised over $5,000 USD for DACA recipients. 
                  </p>
            </div>
        </div>
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	Jul 2017 - Dec 2017
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>herScript http://bit.ly/2DykRCn</h4>
                <h5>Webmaster</h5>
                  <p>
                      Oversaw chapter officer’s work for correctness, 
                    maintained the herScript website and social media accounts, 
                    and outreached for future events.
                  </p>
            </div>
        </div>
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	Aug 2017 - Dec 2017
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Hartnell College</h4>
                <h5>Intro to Programming Tutor</h5>
                  <p>
                      Reinforced group of students’ computer programming, 
                    critical thinking, problem-solving, and teamwork skills
                    by leading them through a series of problems of intro level C++ packets.
                  </p>
            </div>
        </div>
    </div>
  </section>
  <!--Work Experties end -->
  <!--Education & diploma start -->
  <section id="education" class="educationdiploma">
  	<div class="container">
        <div class="heading">
        <h2>Education</h2>
      </div>
        
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	Aug 2016 - May 2019
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Junior at </h4>
                <h5>California State University</h5>
                <p></p>
            </div>
        </div>
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	Aug 2015 - Jan 2018
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Associates in Science</h4>
                <h5>Hartnell College</h5>
                <p></p>
            </div>
        </div>
    </div>
  </section>
  <!--Education & diploma end -->

  
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
      </ul>
    </div>
    <p class="text-center"><a href="#wrapper" class="gototop"><i class="fa fa-chevron-up fa-2"></i></a></p>
  </section>
  <!--footer end-->     
  </div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'skillset',
		  3: 'experience',
		  4: 'education',
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
	

});
</script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>

</body>
</html>
