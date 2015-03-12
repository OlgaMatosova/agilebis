<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="AgileBIS, Business Intelligence Systems, BI Solutions, Data Mining Services, Software development, Technology Consulting" />
	<meta name="keywords"  content="AgileBIS, Business Intelligence Systems, BI Solutions, Data Mining Services, Software development, Technology Consulting" />
	<meta name="Resource-type" content="Document" />
	
	<title>AgileBIS - Business Intelligence Systems for the new era </title>
	
	
	
    <!--- Shared jQuery Libraries --->    
	
	<script src="resources/js/jquery.min.js"></script>
	<script src="resources/js/jquery-ui.min.js"></script>
	
	
     
    <!--- Shared Library ( Animate.CSS Effects ) --->    
		
	<link rel="stylesheet" href="resources/css/animate.css">

	
    
    
    <!--- FullPage Parallex Plugin --->    
	
	<link rel="stylesheet" type="text/css" href="resources/css/fullPage.css" />
	
	<link rel="stylesheet" type="text/css" href="resources/css/general-style.css" />
	
	<script type="text/javascript" src="resources/js/vendors/jquery.slimscroll.min.js"></script>
	
	<script type="text/javascript" src="resources/js/jquery.fullPage.min.js"></script>

	<script type="text/javascript">
	
		$(document).ready(function() {

			// Intitalization of the fullpage script (Parallax)

			var animatedH;
			var animatedP;

			$('#fullpage').fullpage({
				anchors: ['Home', 'About', /**'AgileBIS-Methodology',  **/ 'Industries', 'Services', 'Solutions', 'Contacts'],
				menu: '#menu',
				sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#C63D00', '#C12D0F', 'navy', 'maroon'],
				css3: false,
				scrollingSpeed: 1500,
				normalScrollElements: '#map-canvas, .openpage, .md-overlay, .md-modal',
				slidesNavigation: false,
		        slidesNavPosition: 'bottom',
				autoScrolling: true,

		        controlArrows: true,
		        verticalCentered: true,
		        resize : false,
		        fixedElements: '#header, .footer',
		        responsive: 1,

		        //paddingTop: '20em',
		        //paddingBottom: '10px',
		        //easing 

		        easing: 'swing',
		        easingcss3: "ease-in-out",
		        
		        loopBottom: true,
		        loopTop: true,
		        loopHorizontal: false,
		        
		        onSlideLeave: function(anchorLink, index, slideIndex, direction){

		        	var current= slideIndex+1; 
			        if(direction=='right'){
			        	var next   = current+1; 
					 }else{
						var next   = current-1; 
					}

			        if(4>next>0){
			        	$().renderSlideContent(0, current, function(){
				        	
						        $("#slide"+current).fadeOut(2500, function(){ 
							        $("#slide"+next).fadeIn(1500, function(){
							        	$().renderSlideContent(1, next, function(){
								        });
								    }); 
							     });
				        	 
				        });

			        }

			    },

				/**

		        onLeave: function(index, nextIndex, direction){alert(index)},
		        afterLoad: function(anchorLink, index){},
		        afterRender: function(){alert('rendered')},
		        afterResize: function(){alert('Size Adjusted')},
		        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){alert('Slide '+slideIndex+' loaded')},
		        onSlideLeave: function(anchorLink, index, slideIndex, direction){alert('we are leaving the current slide to the next ')}

		        **/
			});


			// Sliders animation and content of sliders and their effects
			
			(function($) {

			    $.fn.renderSlideContent = function(show, slideIndex, callback) {

					var _slide= "slide"+(slideIndex);

					// sliding In effects
					var headEffectsIn = new Array("animated slideInLeft", "animated lightSpeedIn", "animated flipInX");

					var paragraphEffectsIn = new Array("animated zoomInUp", "animated rollIn", "animated flipInY");


					// sliding out effects
					var headEffectsOut = new Array("animated bounceOutDown", "animated flipOutY", "animated fadeOutUpBig");

					var paragraphEffectsOut = new Array("animated zoomOutOut", "animated rotateOutDownLeft", "animated rollOut");
									
					var head = '#'+_slide+' .intro h1';

					var paragraph = '#'+_slide+' .intro p';
					
					if(show==1){
						$(paragraph).removeClass(paragraphEffectsOut[(slideIndex-1)]).addClass(paragraphEffectsIn[(slideIndex-1)]).show();
			
						$(head).removeClass(headEffectsOut[(slideIndex-1)]).addClass(headEffectsIn[(slideIndex-1)]).show();
					}else{

						$(paragraph).removeClass(paragraphEffectsIn[(slideIndex-1)]).addClass(paragraphEffectsOut[(slideIndex-1)]);
						
				    	$(head).removeClass(headEffectsIn[(slideIndex-1)]).addClass(headEffectsOut[(slideIndex-1)]);
					}

				    if(typeof callback == 'function'){
				    	callback.call(this); 
				    }
			    };

			}(jQuery));
			
		});


		$(document).ready(function(){

			// other intialization scripts after loading the page 

			$().renderSlideContent(1, 1);
			
			$("#menu").change(function(){
			  // window.location.href = $(this).find("option:selected").attr("id") + '.html';
			});
		});

	</script>
	

	
	
	
    <!--- Preloading Effects --->    
		
	<script src="resources/js/modernizr.custom.js"></script>
	
	<link rel="stylesheet" type="text/css" href="resources/css/normalize.css" />
	
	<link rel="stylesheet" type="text/css" href="resources/css/preloading-effect.css" />
	

	
	
	<!--- Google Maps --->    
    
	<link rel="stylesheet" type="text/css" href="resources/css/google-maps.css" />
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    
    <script>

    	// Google Maps Initialization 
	
		var map;
		var saveWidget;
		
		function initialize() {
		  var myOptions = {
		    zoom: 17,
		    center: {lat: 47.051705, lng: 8.338917}
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      myOptions);
		
		  // Create a new SaveWidgetOptions object for Google Sydney.
		  var saveWidgetOptions = {
		    place: {
		      // ChIJN1t_tDeuEmsRUsoyG83frY4 is the place Id for Google Sydney
		      placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4',
		      location: {lat: 47.051705, lng: 8.338917}
		    },
		    attribution: {
		      source: 'Google Maps JavaScript API',
		      webUrl: 'https://developers.google.com/maps/'
		    }
		  };
		
		  new google.maps.Marker({
		    map: map,
		    position: saveWidgetOptions.place.location
		  });
		
		  var widgetDiv = document.getElementById('save-widget');
		  map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);
		
		  // Append a Save Control to the existing save-widget div.
		  saveWidget = new google.maps.SaveWidget(widgetDiv, saveWidgetOptions);
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);

		
    </script>
    
    
         

    
    <!--- Industries Section (SVG CSS3 Effects) --->    
          
	<link rel="stylesheet" type="text/css" href="resources/css/section-industries.css" />
	<script src="resources/js/snap.svg-min.js"></script>
	<!--[if IE]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	
	
	
    <!--- Services Section (CSS3 widgets Hover effects) --->    
	
	<link rel="stylesheet" type="text/css" href="resources/css/section-services.css" />
	
	
	
	

	<!--- Services Section (Modal Windows Effect) --->    

	<link rel="stylesheet" type="text/css" href="resources/css/modal-windows.css" />
	
	
	
	
	
    <!--- Solutions Section (Windows 8 Panels) --->    
    
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="resources/css/section-solutions.css" />
		
	
	
	
	
	<!-- About-us Section (Tabs)   -->
	
    <link rel="stylesheet" type="text/css" href="resources/css/section-about-us.css" />
    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
	
	
	
</head>
<body> 



	<!-- Modal Windows  ====================-->

		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-2" id="modal-2">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-3" id="modal-3">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-4" id="modal-4">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-5" id="modal-5">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-6" id="modal-6">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-8" id="modal-8">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-9" id="modal-9">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-10" id="modal-10">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-11" id="modal-11">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-12" id="modal-12">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-13" id="modal-13">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-14" id="modal-14">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-15" id="modal-15">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-17" id="modal-17">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-18" id="modal-18">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-19" id="modal-19">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-20" id="modal-20">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		
		
		
		<!-- Modal Windows Overlay (transparent background)  -->
		
		<div class="md-overlay"></div> 

		<!-- // End OF Windows Overlay (transparent background)  -->
		
		
		
	<!--  // End OF Modal Windows  ====================-->		
		
	
	
	
	
	
	
	<!--  General Content Container (Including loading page)  -->		
	
	<div id="ip-container" class="ip-container">

	
	
	
		<!-- Landing Page (Spiner and Logo) ====================-->
		
		
		<header class="ip-header">
				<h1 class="ip-logo">
					<center><a href="#Home"><img src="resources/images/logo.png" style="width:20%; height:20%" /></a></center>
				</h1>
				<div class="ip-loader">
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					</svg>
				</div>
		</header>
		
		<!-- // End of Landing Page ====================-->
		
		
		
		
		
		
		<!-- main content -->
		
		<div class="ip-main">
			
			
			<!-- <a href="https://github.com/alvarotrigo/fullPage.js" id="githubLink"><img style="position: fixed;z-index:99; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>-->
			
			
			<!-- Navigation Menu   ====================-->			
			
			
			<ul id="menu" class="nav-menu">
				<li data-menuanchor="Home" class="active"><a href="#Home">Home</a></li>
				<li data-menuanchor="About"><a href="#About">About</a></li>
				<li data-menuanchor="Industries"><a href="#Industries">Industries</a></li>
				<li data-menuanchor="Services"><a href="#Services">Services</a></li>
				<li data-menuanchor="Solutions"><a href="#Solutions">Solutions</a></li>
				<li data-menuanchor="Contacts"><a href="#Contacts">Contacts</a></li>
			</ul>
			
			<!-- // End of Navigation Menu   ====================-->			
			
			
			

			
			
			
			<div id="fullpage">
		
		
			
				<!-- Home section  ====================-->			
			
			
				<div class="section " id="Home">
			
					<div class="slide" id="slide1">
						<div class="intro">
							<h1>The next best step is no longer a guess</h1>
							<p>
								See how predictive analytics can optimize your know-ability of customer requirements !
							</p>
						</div>
					</div>
			
			
				    <div class="slide" id="slide2" style="display:none;">

						<div class="intro">
							<h1>Rev up your performance management</h1>
							<p>
								Choose the right tools and techniques to drive your success – from the high-performance leader!
							</p>
						</div>
				    
					</div>
								
								
				    <div class="slide" id="slide3" style="display:none;">

						<div class="intro">
							<h1>Simplify your software experience</h1>
							<p>
								Discover apps that make common business functions easier – from desktop to tablet to smartphone !
							</p>
						</div>
				    				    
				    </div>
								
				</div>
							
							
				<!-- // End of Home section  ====================-->			
			
											
							
							
							
							
							
							
				<!-- About US section  ====================-->			
							
				<div class="section aboutus" id="section2">

						<section class="tabs">
				            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
					        <label for="tab-1" class="tab-label-1">About AgileBIS</label>
					
				            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
					        <label for="tab-2" class="tab-label-2">Management philosophy</label>
					
				            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
					        <label for="tab-3" class="tab-label-3">Our Partners</label>

					        
						    <div class="clear-shadow"></div>
							
					        <div class="aboutus-content">
					        
					        
						        <div class="content-1">
									<h2>About AgileBIS</h2>
			                        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
									
									<h3>Our Mission</h3>
									<p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
			                        									
									<h3>Our Vision</h3>
									<p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
			                        							   
							    </div>
							    
							    
						        <div class="content-2">
									<h2>Management philosophy </h2>
			                        <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
									<h3>Excellence</h3>
									<p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
							    </div>
							    
							    			
							    							    
						        <div class="content-2">
									<h2>AgileBIS Process </h2>
			                        <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
									<h3>Excellence</h3>
									<p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
							    </div>
							    				
							    							    
						        <div class="content-3">
									<h2>Our Partners</h2>
			                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
									<h3>Examples</h3>
									<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
							    </div>
							    
					        </div>
						</section>
				
				</div>
				
				
											
							
				<!-- // End of About US section  ====================-->			
				
				
				
				
				
				
											
							
				<!-- Industries section  ====================-->			
				
				
				<div class="section" id="section3">

				
							<section id="grid" class="grid clearfix">
								<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z"   class='Healthcare'>
									<figure>
										<img src="resources/images/11.png" />
										<svg viewBox="0 0 180 200" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
										<figcaption>
											<h2>Healthcare</h2>
											<p>Soko radicchio bunya nuts gram dulse.</p>
											<p>..</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<button class="industry-btn">Our Solutions</button>
										</figcaption>
									</figure>
								</a>
								<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z" class='Pharmacutical'>
									<figure>
										<img src="resources/images/10.png" style="" />
										<svg viewBox="0 0 180 200" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
										<figcaption>
											<h2>Pharmacutical Industries</h2>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.<br/></p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>..</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>..</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<button class="industry-btn">Request a Qoute</button>
										</figcaption>
									</figure>
								</a>
								<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z"  class='Energy'>
									<figure>
										<img src="resources/images/9.png" />
										<svg viewBox="0 0 180 200" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
										<figcaption>
											<h2>Renewable Energy</h2>
											<p>Beetroot water spinach okra water.</p>
											<p>..</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<p>Soko radicchio Soko radicchio bunya nuts gram dulse nuts  dulse.</p>
											<button class="industry-btn">Explore Our Services</button>
										</figcaption>
									</figure>
								</a>
								
								<div class="industryDetails" style="height:500px; width:60%; background-color:white; border: 10px solid maroon; display:none; float:right; color:black; margin:10px; padding:10px;">
									Industry Details ...<br/>Industry Details ...<br/>Industry Details ...<br/>Industry Details ...<br/>Industry Details ...<br/>
									
									<button class="industry-btn">Close</button>
								</div>
				
							</section>
					
				</div>


				<!-- // End of Industries section  ====================-->			
				
				
				
				
			
			
			
			
				<!-- Services section ==================== -->			
			
			
				<div class="section" id="section4">
				
					
		            <div class="main" style="height:60%; width:80%; margin:auto auto auto auto;">
		            
		            <div class="view view-eighth">
		                    <img src="resources/images/16.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger"  data-modal="modal-1" >Read More</a>
		                    </div>
		                </div>
		
		
		                <div class="view view-eighth">
		                    <img src="resources/images/15.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger"  data-modal="modal-2">Read More</a>
		                    </div>
		                </div>
		
		
		
		                <div class="view view-eighth">
		                    <img src="resources/images/2.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger"  data-modal="modal-3">Read More</a>
		                    </div>
		                </div>
		
		
		                <div class="view view-eighth">
		                    <img src="resources/images/6.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger" data-modal="modal-4">Read More</a>
		                    </div>
		                </div>
		                <div class="view view-eighth">
		                    <img src="resources/images/15.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger" data-modal="modal-5">Read More</a>
		                    </div>
		                </div>
		
		
		
		                <div class="view view-eighth">
		                    <img src="resources/images/2.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger" data-modal="modal-6">Read More</a>
		                    </div>
		                </div>
		
		
		                <div class="view view-eighth">
		                    <img src="resources/images/6.jpg" />
		                    <div class="mask">
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger" data-modal="modal-7">Read More</a>
		                    </div>
		                </div>
		
		                <div class="view view-eighth">
		                    <img src="resources/images/6.jpg" />
		                    <div class="mask" >
		                        <h6>Hover Style #8</h6>
		                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
		                        <a href="#" class="info md-trigger" data-modal="modal-8">Read More</a>
		                    </div>
		                </div>
		
								
				
					<button class="md-trigger" data-modal="modal-9">3D Flip (vertical)</button>
					<button class="md-trigger" data-modal="modal-10">3D Sign</button>
					<button class="md-trigger" data-modal="modal-11">Super Scaled</button>
					<button class="md-trigger" data-modal="modal-12">Just Me</button>
					<button class="md-trigger" data-modal="modal-13">3D Slit</button>
					<button class="md-trigger" data-modal="modal-14">3D Rotate Bottom</button>
					<button class="md-trigger" data-modal="modal-15">3D Rotate In Left</button>
					<button class="md-trigger" data-modal="modal-16">Blur</button>
					<!-- special modal that will add a perspective class to the html element -->
					<button class="md-trigger md-setperspective" data-modal="modal-17">Let me in</button>
					<button class="md-trigger md-setperspective" data-modal="modal-18">Make way!</button>
					<button class="md-trigger md-setperspective" data-modal="modal-19">Slip from top</button>		                
		                
		                
		                
		           </div>			
				
				</div>

				
				
				<!--  // End of Services section ==================== -->			
				
				
				
				
				<!-- Solutions section ==================== -->			
				
				
				<div class="section" id="section5">

					<div class="demo-wrapper">
					<!-- classnames for the pages should include: 1) type of page 2) page name-->
					  <div class="s-page random-restored-page">
					    <h2 class="page-title">Some minimized App</h2>
					    <div class="close-button s-close-button">x</div>
					  </div>
					  <div class="s-page custom-page">
					    <h2 class="page-title">Thank You!</h2>
					    <div class="close-button s-close-button">x</div>
					  </div>
					  <div class="r-page random-r-page">
					
					    <div class="page-content">
					      <h2 class="page-title">App Screen</h2>
					      <p>Chew iPad power cord chew iPad power cord attack feet chase mice leave dead animals as gifts and stick butt in face chew iPad power cord. Chase mice. Run in circles use lap as chair why must they do that. Intrigued by the shower destroy couch leave hair everywhere sleep on keyboard chew iPad power cord. Use lap as chair. Missing until dinner time stand in front of the computer screen, intently sniff hand. Find something else more interesting. Destroy couch play time so inspect anything brought into the house hate dog burrow under covers. Sleep on keyboard destroy couch so hate dog so hide when guests come over. Chase mice destroy couch lick butt throwup on your pillow use lap as chair yet intrigued by the shower but climb leg. Stare at ceiling make muffins or hunt anything that moves claw drapes. Intently sniff hand intrigued by the shower. Why must they do that. Cat snacks leave dead animals as gifts or inspect anything brought into the house sweet beast so stare at ceiling give attitude. Flop over claw drapes but sun bathe lick butt, and chase mice. Rub face on everything lick butt leave hair everywhere lick butt, missing until dinner time for use lap as chair lick butt. Make muffins leave dead animals as gifts play time. Chew foot intrigued by the shower stare at ceiling inspect anything brought into the house yet hopped up on goofballs. 
					
					      Hunt anything that moves intently sniff hand for hunt anything that moves play time. Chew foot climb leg throwup on your pillow so lick butt yet make muffins hate dog. Intrigued by the shower. Intently sniff hand shake treat bag. Cat snacks burrow under covers make muffins but all of a sudden go crazy find something else more interesting. Flop over chase mice. Give attitude. Inspect anything brought into the house. Stick butt in face sun bathe so find something else more interesting and intrigued by the shower. Rub face on everything use lap as chair. 
					
					      Under the bed claw drapes chase mice but leave hair everywhere yet make muffins yet claw drapes. Use lap as chair. Find something else more interesting stretch for under the bed. Nap all day intrigued by the shower, hate dog sweet beast intently sniff hand so hate dog nap all day. Swat at dog hide when guests come over and mark territory chase mice for cat snacks. Use lap as chair. Lick butt throwup on your pillow need to chase tail. 
					
					      Mark territory. Stick butt in face shake treat bag yet hunt anything that moves, yet hopped up on goofballs yet stare at ceiling under the bed. Give attitude chase imaginary bugs stretch so hunt anything that moves so hide when guests come over but intrigued by the shower find something else more interesting. Make muffins behind the couch for chew foot. Sweet beast flop over but throwup on your pillow. Intently sniff hand use lap as chair and missing until dinner time and chase imaginary bugs. 
					      </p>
					    </div>
					    
					    <div class="close-button r-close-button">x</div>
					  </div>
					<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
					  <div class="dashboard clearfix">
					    <ul class="tiles">
					      <div class="col1 clearfix">
					        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
					          <div><p>This tile's content slides up</p></div>
					          <div><p>View all tasks</p></div>
					        </li>
					        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="s-page" data-page-name ="random-restored-page">
					          <div><p class="icon-arrow-right"></p></div>
					          <div><p>Tile's content slides right. Page opens from left</p></div>
					        </li>
					        <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page">
					          <p class="icon-calendar-alt-fill"></p>
					        </li>
					        <li class="tile tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page">
					          <figure>
					            <img src="resources/images/blue.jpg" />
					            <figcaption class="tile-caption caption-left">Slide-out Caption from left</figcaption>
					          </figure>
					        </li>
					      </div>
					
					      <div class="col2 clearfix">
					        <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="random-r-page">
					          <div><p><span class="icon-cloudy"></span>Weather</p></div>
					        </li>
					        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
					          <div><p><span class="icon-skype"></span>Skype</p></div>
					          <div><p>Make a Call</p></div>
					        </li>
					        <!--Tiles with a 3D effect should have the following structure:
					            1) a container inside the tile with class of .faces
					            2) 2 figure elements, one with class .front and the other with class .back-->
					        <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
					          <div class="faces">
					            <div class="front"><span class="icon-picassa"></span></div>
					            <div class="back"><p>Launch Picassa</p></div>
					          </div>
					        </li>
					        <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
					          <div class="faces">
					            <div class="front"><span class="icon-instagram"></span></div>
					            <div class="back"><p>Launch Instagram</p></div>
					          </div>
					        </li>
					      </div>
					
					      <div class="col3 clearfix">      
					        <li class="tile tile-2xbig tile-9 fig-tile" data-page-type="custom-page" data-page-name="random-r-page">
					          <figure>
					            <img src="resources/images/summer.jpg" />
					            <figcaption class="tile-caption caption-bottom">Fixed Caption: Some Subtitle or Tile Description Goes Here with some kinda link or anything
					            </figure>
					        </li>
					        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
					          <div><p>Windows-8-like Animations with CSS3 &amp; jQuery &copy; Sara Soueidan. Licensed under MIT.</p></div>
					        </li>
					      </div>
					    </ul>
					  </div><!--end dashboard-->
					
					</div>
									
				</div>
				
				
				<!-- // End Of Solutions section ==================== -->			
				
				
				
				
				
				
				
				<!-- Contact us section  ====================-->			
				
				<div class="section" id="section6">
					    <div id="map-canvas"></div>
					    <div id="save-widget">
					    
					      <strong>AgileBIS Switzerland</strong>
					      
					      <p>We’re located on the water in Pyrmont, with views of the Sydney Harbour Bridge, The
					          Rocks and Darling Harbour. Our building is the greenest in Sydney. Inside, we have a
					          "living wall" made of plants, a tire swing, a library with a nap pod and some amazing
					          coffee machines.</p>
					    </div>
					    				    
				</div>
				
				
				<!-- // End of Contact us section ==================== -->			
				
				
				
			</div>
			
			
		</div>
	</div>
	
	
	
	
	<!--- Preloading Effects (Landiing  Page) --->
	
	<script src="resources/js/classie.js"></script>
	<script src="resources/js/pathLoader.js"></script>
	<script src="resources/js/main.js"></script>

	
	
	<!--- Solutions Script  --->

	<script src="resources/js/scripts.js"></script>
	
	
	
	<!--- Modal Window Effects --->

	<script src="resources/js/modalEffects.js"></script>

	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/resources/js/';
	</script>
	<script src="resources/js/cssParser.js"></script>
	<script src="resources/js/css-filters-polyfill.js"></script>
		
		

	
	<!--- Industries SVG Animation Effects --->
	
	<script>

		//Animation of the SVG 
	
		(function() {
			function init() {
				var speed = 300,
				easing = mina.backout;
				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
					var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
					pathConfig = {
						from : path.attr( 'd' ),
						to : el.getAttribute( 'data-path-hover' )
					};
				
					el.addEventListener( 'mouseenter', function() {
						path.animate( { 'path' : pathConfig.to }, speed, easing );
					} );
					
					el.addEventListener( 'mouseleave', function() {
						path.animate( { 'path' : pathConfig.from }, speed, easing );
					} );
				} );
			}
				
			 init();
	
		})();

		
		// Industry section (show and hide animation  effects)
		
		$(function() {
				var state = 0;
				var previousState;
					
				$(".industry-btn").click(function() {

					var parentTag = $( this ).parent().parent().parent().attr('class');

					if ( state==0 ) {

						$('#grid > a').removeClass('animated bounceInUp');
						
						$("#grid > a:not(."+parentTag+")").addClass("animated bounceOutUp", function(){

							setTimeout("$('#grid > a:not(."+parentTag+")').hide(1 , function(){  $('.industryDetails').show().addClass('animated bounceIn')} )"	, 1000)  
						
						}); 

						state = 1;
						
					} else {
						
						$('.industryDetails').addClass("animated bounceOut", function(){

							setTimeout("$('.industryDetails').removeClass('animated bounceOut').hide();$('#grid > a').removeClass('animated bounceOutUp').show().addClass('animated bounceInLeft'); "	, 800)  
							
							setTimeout(" $('#grid > a').removeClass('animated bounceInLeft')"	, 2000)  
						  
						})

						state = 0;
					}
				});
			});

		
		</script>
			
		
		

</body>
</html>
