@extends ("layouts.index")
@section("contenido")
  <div class="loader">
            <div class="load-title">
                <img src="{% static 'img/logo_ambar.png' %}" alt="">
                <div class="load-circle"></div>
            </div>
        </div>
        <div class="top-baner bottom-margin swiper-anime slide-arow poind-closest">
	     <div class="swiper-container top-slider" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="1">
			<div class="swiper-wrapper">
			   <div class="swiper-slide first-slide" data-val="0">
				  <div class="block-bg">
				      <div class="bg-wrap">
					     <div class="bg" style="background-image:url( 'img/10.jpg')"></div>
					       <div class="white-mobile-layer"></div>
					  </div>
					  <div class="title-style-1 vertical-align">
					   <div class="sub-title">
					   	  <h5 class="h5">Intro</h5>
					   </div>
					  	<h1 class="h1">Gone<br> are the days</h1>
					  </div>
				  </div>
			   </div>
			   <div class="swiper-slide" data-val="1">
				  <div class="block-bg">
					  <div class="bg-wrap">
					     <div class="bg" style="background-image:url('/img/11.jpg')"></div>
					       <div class="white-mobile-layer"></div>
					  </div>
					  <div class="title-style-1 vertical-align">
					   <div class="sub-title">
					   	  <h5 class="h5">Intro</h5>
					   </div>
					  	<h2 class="h1">True<br> color in you</h2>
					  </div>
				  </div>
			   </div>
			   <div class="swiper-slide" data-val="2">
				  <div class="block-bg">
					  <div class="bg-wrap">
					     <div class="bg" style="background-image:url('/img/12.jpg')"></div>
					       <div class="white-mobile-layer"></div>
					  </div>
					  <div class="title-style-1 vertical-align">
					   <div class="sub-title">
					   	  <h5 class="h5">Intro</h5>
					   </div>
					  	<h2 class="h1">Beauty <br>in the details</h2>
					  </div>
				  </div>
			   </div>
			</div>
			<div class="pagination hidden"></div>
		 </div>
         <div class="slider-number"><span></span>/<b></b></div>	
       </div>
        <div class="content"> 
        
        </div> 
		
		 <!-- Seccion conocenos inicia -->
         <section class="section section-first">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-2 col-sm-3">
        				<div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
						   <div class="sub-title">
							  <h5 class="h5">Conócenos</h5>
						   </div>
					    </div>
        			</div>
        			<div class="col-md-3 col-sm-9">
        			  <div class="item-padd-mob wow zoomIn" data-wow-delay="0.4s">
        				<div class="simple-text lg">
        					<p><a href="#" class="font-type">ÁMBAR</a> está dedicado a las personas que quieren resaltar su esencia a través de los accesorios. </p>
        				</div>
        			  </div>	
        			</div>
        			<div class="col-md-3 col-sm-6">
        			  <div class="item-padd-mob wow zoomIn" data-wow-delay="0.6s">
        				<div class="simple-text md">
        				   <p>Te ayudaremos a conocer mejor tu cuerpo, las tendencias y a utilizar la moda a tu favor. Encontrarás tips sobre moda, accesorios, usos correctos de prendas y complementos, además de una amplia gama de joyería y accesorios que te acompañarán en tus mejores outfits. </p>
						</div>
					  </div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="image wow zoomIn" data-wow-delay="0.8s"><img src="img/3.jpg" alt="" class="resp-img"></div>
        			</div>
        		</div>
        	</div>
		 </section>
		 <!-- Seccion conocenos finaliza -->

		 <section class="section">
        	<div class="container">
        		<div class="row">
        		   <div class="col-md-2 col-sm-3">
        		   	    <div class="title-style-2 wow zoomIn" data-wow-delay="0.2s">
						   <div class="sub-title">
							  <h5 class="h5">CAse study</h5>
						   </div>
					    </div>
        		   </div>
        		   <div class="col-md-10 col-sm-9">
        		   	  <div class="filters wow zoomIn" data-wow-delay="0.4s">
      		   	  	     <div class="drop-filter"><span>All </span><i class="icon-down-open-mini"></i></div>
       		   	  	       <ul class="filter-mob-list">
							 <li class="active" data-filter="*">All</li>
							 <li data-filter=".Aretes">Aretes</li>
							 <li data-filter=".Collares">Collares</li>
							 <li data-filter=".Pulseras">Pulseras</li>
							 <li data-filter=".Cabello">Cabello</li>
							 <li data-filter=".Anillos">Anillos</li>
							 <li data-filter=".Complementos">Complementos</li>
        		   	  	   </ul>
        		   	  </div>
        		   </div>
				</div>
				<div class="row">
					<div class="izotope-container">
						<div class="grid-sizer"></div>
						  <div class="item wh-25 Aretes photo wow zoomIn" data-wow-delay="0.2s">
							<div class="item-drid-size">
								<img src="img/10.jpg" alt="" class="resp-img">
								<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
							</div>
						  </div>
						  <div class="item wh-50 Complemtentos ux wow zoomIn" data-wow-delay="0.4s">
							<div class="item-drid-size">
								<img src="img/11.jpg" alt="" class="resp-img">
								<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
							</div>
						  </div>
						 
						  <div class="item wh-25 Pulceras ux wow zoomIn" data-wow-delay="0.6s">
							<div class="item-drid-size">
								<img src="img/13.jpg" alt="" class="resp-img">
								<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
							</div>
						  </div>
						  <div class="item wh-25 Collares graphic wow zoomIn" data-wow-delay="0.8s">
							<div class="item-drid-size">
								<img src="img/7.jpg" alt="" class="resp-img">
								<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
							</div>
						  </div>
						  <div class="load-item">
							  <div class="item wh-25 Aretes photo wow zoomIn" data-wow-delay="0.2s">
								<div class="item-drid-size">
									<img src="img/10.jpg" alt="" class="resp-img">
									<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
								</div>
							  </div>
							  <div class="item wh-50 Cabello ux wow zoomIn" data-wow-delay="0.4s">
								<div class="item-drid-size">
									<img src="img/14.jpg" alt="" class="resp-img">
									<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
								</div>
							  </div>
							  <div class="item wh-25 Pulseras ux wow zoomIn" data-wow-delay="0.6s">
								<div class="item-drid-size">
									<img src="img/13.jpg" alt="" class="resp-img">
									<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
								</div>
							  </div>
							  <div class="item wh-25 Collares graphic wow zoomIn" data-wow-delay="0.8s">
								<div class="item-drid-size">
									<img src="img/7.jpg" alt="" class="resp-img">
									<a href="case_study.html" class="link-wrap item-hov"><span></span><span></span></a>
								</div>
							  </div>
						  </div> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="text-center wow zoomIn" data-wow-delay="0.2s">
							<a href="#" class="link-type-2 load-more"><span>view more</span></a>
							<span class="no-item">NO MORE</span>
						</div>
					</div>
				</div>
			 </div>
		 </section>
		 <!-- Seccion categorias finaliza-->
	

		 <!-- Seccion Banner 1 inicia-->
	<section class="section padd-sm">
		<div class="bg fix" style="background-image:url(img/ban1.jpeg)"></div>
		   <div class="container">
			  <div class="folow-item letras_b wow zoomIn" data-wow-delay="0.4s">
				
						<div class="folow-info">
							<b>Banner CTA Comprar</b>
							<span>posts</span>
						</div>
						<div class="folow-info">
							<b>Banner CTA Comprar</b>
							<span>followers</span>
						</div>
						<div class="folow-info">
							<b>Banner CTA Comprar</b>
							<span>following</span>
						</div>
						
			  </div>
		   </div>
	 </section>
		  <!-- Seccion Banner 1 finaliza-->

		  <!-- Seccion como comprar inicia--> 
         <section class="section section-bg">
        	<div class="container">
        		<div class="row">
        		   <div class="col-md-2 col-sm-3">
        		   	    <div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
						   <div class="sub-title">
							  <h5 class="h5">Productos</h5>
						   </div>
					    </div>
        		   </div>
        		   <div class="col-md-10 col-sm-9">
        		   	  <div class="quote wow zoomIn" data-wow-delay="0.3s">
        		   	  	  <p>“Siempre he pesnado en los accesorios, como el punto de exclamacion de un oufit femenino.”</p>
        		   	  	  <h6 class="h6">- Michael Kors</h6>
        		   	  </div>
        		   </div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-item item-hov wow zoomIn" data-wow-delay="0.2s">
							<img src="img/service_icon_1.png" alt="">
						      <div class="title">
						      	 <h4 class="h4">Aretes</h4>
						      </div>
							  <div class="simple-text">
							  	  <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
							  </div>
							  <a href="#" class="link-type-1">Learn More<i class="icon-right-open-mini"></i></a>	  
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-item item-hov wow zoomIn" data-wow-delay="0.2s">
							<img src="img/service_icon_1.png" alt="">
						      <div class="title">
						      	 <h4 class="h4">Collares</h4>
						      </div>
							  <div class="simple-text">
							  	  <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
							  </div>
							  <a href="#" class="link-type-1">Learn More<i class="icon-right-open-mini"></i></a>	  
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-item item-hov wow zoomIn" data-wow-delay="0.2s">
							<img src="img/service_icon_1.png" alt="">
						      <div class="title">
						      	 <h4 class="h4">Pulseras</h4>
						      </div>
							  <div class="simple-text">
							  	  <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
							  </div>
							  <a href="#" class="link-type-1">Learn More<i class="icon-right-open-mini"></i></a>	  
						</div>
					</div>	
				</div>
			</div>
		 </section>
		  <!-- Seccion como comprar finaliza--> 

		  <!-- Seccion Banner 2 inicia-->
		  <section class="banner1" style="background-color:#FF93C1 ;">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12">
						<div class="call-to-action-content text-center text-md-left appear-animation"
							data-appear-animation="fadeInLeftShorter">
							<h2 class="font-weight-semibold">Banner CTA Comprar.</h2>
							<div class="col-lg-8">
								<h4 class="font-weight-light mb-0">bla bla bla</h4>
							</div>
						</div>
					</div>
   
				</div>
			</div>
			</section> 
		   <!-- Seccion Banner 2 finaliza-->
		  
		   <!-- Redes sociales (facebook) inicia -->

	<section class="section padd-sm">
		<div class="bg fix" style="background-image:url(img/9.jpg)"></div>
		   <div class="container">
			  <div class="folow-item col-white wow zoomIn" data-wow-delay="0.4s">
					<img src="static/img/8.jpg" alt="">
					  <h6 class="h7 title">Johndoe</h6>
						<div class="simple-text">
							  <p>Encuentra nuestros productos y conoce más de ÁMBAR en el día a día</p>
						</div>
						<div class="folow-info">
							<b>101</b>
							<span>posts</span>
						</div>
						<div class="folow-info">
							<b>176</b>
							<span>followers</span>
						</div>
						<div class="folow-info">
							<b>103</b>
							<span>following</span>
						</div>
						
						<div class="clear"></div>
						<a href="#" class="link-type-2"><span>follow Facebook</span></a>
						<a href="#" class="link-type-2"><span>follow Instagram</span></a>
			  </div>
		   </div>
	 </section>

	   <!-- Redes sociales (facebook) finaliza -->


	   <!-- Dream Team inicia -->
	   <section class="section poind-closest border-top">
		<div class="container">
		 <div class="row">
		   <div class="col-md-2 col-sm-3">
				<div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
				   <div class="sub-title">
					  <h5 class="h5">Version 3</h5>
				   </div>
				</div>
		   </div>
		   <div class="col-md-10 col-sm-9">
			 <div class="item-padd-mob wow zoomIn" data-wow-delay="0.4s">
				<div class="simple-text md">
				   <p>We’ve a dedicated team of <a href="#" class="font-type">Qualified Professionals</a> with deep industry experience and technical expertise to manage a multitude of tasks ranging in complexity and size. </p>
				</div>
				<a href="#" class="link-type-1">Learn More<i class="icon-right-open-mini"></i></a>
			 </div>   
		   </div>
		 </div>
		<div class="row">
		 <div class="swiper-container team-slider" data-autoplay="5000" data-loop="0" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
		   <div class="swiper-wrapper">
			  <div class="swiper-slide">
				<div class="padd-wrap wow zoomIn" data-wow-delay="0.2s">
				 <div class="team-item item-hov">
					<img src="img/7.jpg" alt="" class="resp-img">
					<div class="team-desc item-layer">
					  <div class="vertical-align w-full">
						<h4 class="h4"><a href="#">Martha Jones</a></h4>
						  <span>Design Lead</span>
					  </div>	  
					</div>
				 </div>	
				</div>
			  </div>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="pagination point-style alb-point"></div>		
	   </section> 
	   <!-- Dream Team finaliza -->

	<!-- Contacto Whatsapp -->
	<section class="section  section-box section-scroll" style="background-color: #C89FEB;">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-3">
					<div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
					   <div class="sub-title">
						  <h5 class="h5">Get in touch</h5>
					   </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-9">
				  <div class="item-padd-mob wow zoomIn" data-wow-delay="0.4s">
					<div class="simple-text lg">
						<p>We’re always excited for <a href="#" class="font-type">New Projects</a> and partners. So, hit us up with an email or just just say Hello.</p>
					</div>
					<a href="#" class="link-type-1">contact us<i class="icon-right-open-mini"></i></a>
				  </div>	
				</div>
				<div class="col-md-7 col-sm-12">
				  <form action="/" onsubmit="return submitForm();" method="post" name="contactform" class="contact-form wow zoomIn" data-wow-delay="0.6s" id="contact-form">
					 <input placeholder="Your Name" class="input-field" name="name" required="" type="text">
					 <input placeholder="Your Emaill" class="input-field" name="email" required="" type="email"> 
					 <textarea placeholder="Your Message" class="input-field" name="message"></textarea> 
					 <input value="Send" class="input-send submit" type="submit" name="submit">
				  </form>
				  <div class="success"><div class="popup"><div class="close-popup"><span>+</span></div><div class="cell-view"><h4 class="h4">Your message was sent successfully</h4></div></div></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contacto Whatsapp finaliza -->
	<!-- Button trigger modal -->

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
	modal
  </button>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
	modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		 
		  <div class="modal-body">
			  <div class="container-fluid">
				  <div class="row">
					  <div class="col-md-6 ml-auto"><!-- izquierda -->
						  <div class="container-fluid1">
							  <img src="img/13.jpg" alt="" class="resp-img">
						  </div>
	
					  </div>
					  
					  <div class="col-md-6 ml-auto"><!-- derecha -->
						  <div class="sub-title">
							  <h5 class="h5">Productos!</h5>
						   </div>
						  <div class="simple-text lg">
							  <p><a href="#" class="font-type">ÁMBAR</a> está dedicado a las personas que quieren resaltar su esencia a través de los accesorios. </p>
						  </div>
						  																																																												
								<div class="mt-5 pt-5">
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-twitter-square"></i>
								<i class="fab fa-xbox"></i>
								</div>
								<div>
						  		<button type="button" class="btn btn-secondary" data-dismiss="modal">Whatsapp/Contacto</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>  
							
						  </div>
					  </div>
					  
					</div>
			  </div>
			</div>
		  
		</div>
	  </div>
	 
  </div>

@endsection
