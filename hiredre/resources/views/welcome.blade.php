@extends('layouts.app')

@section('content')
    <div class="uk-section uk-padding-remove">
		 <div uk-slideshow="autoplay: true; autoplay-interval:700">
		 	<ul class="uk-slideshow-items">
		 		<li>
					<img src="images/swirl2.jpg" class="uk-height-large" alt="" uk-cover>
					<div class="uk-overlay uk-overlay-primary uk-position-center uk-height-large uk-padding-large">
						<h1 class="uk-margin-large uk-text-center">Artisan Applications</h1>
			                <p class="uk-margin">IThere is immense joy in just watching - watching all the little creatures in nature. We don't have anything but happy trees here. The least little bit can do so much.</p>

						<p>Don't kill all your dark areas - you need them to show the light. Let your imagination be your guide. Once you learn the technique, ohhh! Turn you loose on the world; you become a tiger.</p>
						<div class="uk-margin-large-top">
							<button class="uk-button uk-position-bottom-center uk-margin-large uk-button-danger" href="">See Sample Projects</button>
						</div>
			                
			            </div>
		 		</li>
		 		<li>
		 			<img src="images/inkbg.jpg" alt="" uk-cover>
		 			<div class="uk-overlay uk-overlay-primary uk-position-center uk-height-large uk-padding-large">
						<h1 class="uk-margin-large uk-text-center">Project Management</h1>
			                <p>Play with the angles. Everyone needs a friend. Friends are the most valuable things in the world.</p>
			                <p> We don't have to be committed. We are just playing here. Just a happy little shadow that lives in there. Little trees and bushes grow however makes them happy.</p>
			                <div class="uk-margin-large-top">
							<button class="uk-button uk-position-bottom-center uk-margin-large uk-button-danger" href="">See Sample Projects</button>
						</div>
			                
			            </div>
		 		</li>
		 		<li>
		 			<img src="images/swirl3.jpg" alt="" uk-cover>
		 			<div class="uk-overlay uk-overlay-primary uk-position-center-right uk-height-large uk-padding-large uk-margin-large-right">
						<h2>Artisan Applications</h2>
			                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			            </div>
		 		</li>
		 	</ul>
		 </div>
					
	</div>


        {{-- 
            <div class="uk-background-cover uk-height-large uk-background-fixed uk-panel uk-flex uk-flex-center uk-flex-middle uk-animation-kenburns" style="background-image: url(/images/swirl.jpg);">
            	
            	<ul class="uk-dotnav uk-light" uk-switcher>
				    <li class="uk-active"><a href="#">Item 1</a></li>
				    <li><a href="#">Item 2</a></li>
				    <li><a href="#">Item 3</a></li>
				    <li><a href="#">Item 4</a></li>
				    <li><a href="#">Item 5</a></li>
				</ul>
				<ul class="uk-switcher uk-margin">
				    <li>
				    	<div>
				    		<div class="uk-card uk-card-body uk-card-secondary">
				    			<h1 class="uk-light">CARD</h1>
				    		</div>
				    	</div>
				    </li>
				    <li>
				    	<div>
				    		<div class="uk-card uk-card-body uk-card-secondary">
				    			<h1 class="uk-light">CARD2</h1>
				    		</div>
				    	</div>
				    </li>
				    <li>
				    	<div>
				    		<div class="uk-card uk-card-body uk-card-secondary">
				    			<h1 class="uk-light">CARD3</h1>
				    		</div>
				    	</div>
				    </li>
				    
				</ul>

				

            </div> --}}

           {{-- <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

		    <ul class="uk-slideshow-items">
		        <li>
		            <img src="images/swirl.jpg" alt="" uk-cover>
		        </li>
		        <li>
		            <img src="images/inkbg.jpg" alt="" uk-cover>
		        </li>
		        
		    </ul>

		    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
		    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

		</div> --}}
        
    <div class="uk-section">
		<div class="uk-inline" style="z-index: 980;" uk-sticky="top: 200; bottom: #stickybottom; offset: 300">
		    <button class="uk-button uk-button-secondary uk-button-small uk-margin-remove" type="button"><i class="fas fa-paper-plane"></i></button>
		    <div uk-drop>
		        <div class="uk-card uk-card-body uk-card-secondary uk-padding-small uk-text-center uk-width-small">
		        	<div>
		        		<form action="">
		        			<p class="uk-text-bold uk-text-small uk-margin-small uk-margin-small-top uk-text-success">GET IN TOUCH</p>
		        			<input type="text" class="uk-margin-small uk-form-small uk-form-width-small uk-input uk-form-danger" placeholder="EMAIL">
		        			<input type="text" class="uk-margin-small uk-form-small uk-form-width-small uk-input uk-form-danger" placeholder="NAME">
		        			<button class="uk-button uk-button-small uk-button-danger uk-margin-small">SEND</button>
		        		</form>
		        	</div>
		        </div>
		    </div>
		</div>

		<div class="uk-padding">
			<div>

				<div uk-grid>
					<div class="uk-width-4-5@m uk-grid-item-match">
						<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s" uk-grid>
						    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
						        <img src="images/mecoding.jpg" alt="" uk-cover>
						        <canvas width="600" height="400"></canvas>
						    </div>
						    <div>
						        <div class="uk-card-body">
						            <h1 class="uk-card-title">ABOUT ME</h1>
						            <p>I am a Michigan based self-taught Software Engineer with 5 years of experience crafting quality applications. I am passionate about programming and specialize in Laravel. I live in Mexico as a Digital Nomad. </p>
						            <p>I am dedicated to personal and professional growth. I manage my time and mindset for maximum efficiency.</p>
						            <p>Currently, I am seeking a team to collaborate and learn with. I also mentor a handful of noob devs.</p>
						            <p>As a solopreneur, I have a founders mindset--considering effiency, codebase hygiene and scalability, operations enhancements, analytics, automation, reports. I find joy in the process of building viable products. #indiehacker</p>
						        </div>
						    </div>
						</div>
					</div>
					<div class="uk-width-1-5@m">
						<div class="uk-card uk-card-secondary uk-margin uk-flex uk-flex-center uk-flex-middle">
							<div class="uk-card-body">
								@include('partials.article-list')
							</div>
						</div>
					</div>	
				</div>
	           
			</div>
		</div>
    </div>
	<div class="uk-section uk-background-fixed" style="background-image: url(/images/swirl3.jpg);">
			<div class="uk-padding-large">
				
    			<div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-grid-match" uk-grid>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center uk-align-middle">
				        	<i class="fab fa-vuejs fa-3x"></i>
				            <h2 class="uk-card-title">Vue.js</h2>
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-text-center uk-card-body">
				        	<i class="fas fa-phone-volume fa-3x"></i>
				            <h2 class="uk-card-title">TWILIO</h2>
				            <p>Programmable Phone and SMS</p>
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center">
				            <i class="fab fa-laravel fa-3x"></i>
				            <h3 class="uk-card-title">TDD</h3>
				            
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center">
				            <i class="fab fa-laravel fa-3x"></i>
				            <h3 class="uk-card-title">PHP</h3>
				            
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center">
				            <i class="fab fa-laravel fa-3x"></i>
				            <h3 class="uk-card-title">operations</h3>
				            
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center">
				            <i class="fab fa-laravel fa-3x"></i>
				            <h3 class="uk-card-title">analytics</h3>
				            
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center">
				            <i class="fab fa-laravel fa-3x"></i>
				            <h3 class="uk-card-title">AWS</h3>
				            
				        </div>
				    </div>
				    <div>
				        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-text-center">
							<i class="fab fa-gitkraken"></i>				            
							<h3 class="uk-card-title">LARAVEL</h3>
				            
				        </div>
				    </div>
			    </div>
			</div>
	</div>
    
    <div class="uk-section">
    	<div>
    		<div class="uk-section uk-padding-large">
    			
    			<div class="uk-card uk-margin-large uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin uk-height-small-max" uk-grid>
				    <div class="uk-card-media-left uk-cover-container">
				        <img src="images/swirl.jpg" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">WILD PASTURES</h3>
				            <p>High quality Paleo Meat Subscription Box startup.</p>
				            <p>I developed enhancements for our warehouse operations and features for the site.</p>
				            <p>Working with Laravel Nova, I created analytics dashboards to manage operations.</p>

				            <span class="uk-label" uk-margin>LARAVEL</span>
				            <span class="uk-label" uk-margin>TWILIO</span>
				        </div>
				    </div>
				</div>
    			

				<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
				    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
				        <img src="images/swirl2.jpg" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">Nova Blog-O-Matic</h3>
				            <p>Blogging platform built in Laravel Nova that allows for creating Listicle Posts.</p>
				            <button class="uk-button uk-button-danger uk-button-small">CHECK IT OUT ON GITHUB</button>
				        </div>
				    </div>
				</div>

				<div class="uk-card uk-margin-large uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
				    <div class="uk-card-media-left uk-cover-container">
				        <img src="images/swirl.jpg" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">WERKR</h3>
				            <p>Employee Schedule Managment Application Built in Quasar and Laravel</p>
				           
				            <button class="uk-button uk-button-danger uk-button-small">CHECK IT OUT ON GITHUB</button>

				        </div>
				    </div>
				</div>

				<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
				    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
				        <img src="images/swirl2.jpg" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">Nova Blog-O-Matic</h3>
				            <p>Blogging platform built in Laravel Nova that allows for creating Listicle Posts.</p>
				            <button class="uk-button uk-button-danger uk-button-small">CHECK IT OUT ON GITHUB</button>
				        </div>
				    </div>
				</div>
    		</div>
    	</div>
    	<div id="stickybottom"></div>
    </div>
    

    <div class="uk-section uk-background-fixed uk-padding" style="background-image: url(/images/swirl3.jpg);">
    	<div class="uk-padding" uk-grid>
    		<div class="uk-width-3-5@m">
	    		@include('partials.connect')
    		</div>
    		<div class="uk-width-2-5@m">
	    		@include('partials.contact-form')
    		</div>
    		
    	</div>
	</div>









@endsection