<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Hyginus - Porfolio</title>
	<meta name="description" content="Hyginus - Portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	
	<style>
		#profile-image{
			width: 120px;
			height: 120px;
			border-radius : 50%;
			background-image: url('images/me.jpg');
			background-position:center;
			background-size:cover;
			background-repeat:no-repeat;
			margin:2px auto;
		}
	</style>

</head>

<body>

<!-- Preloader -->
<div id="preloader" class="light">
	<div class="outer">
		<!-- Google Chrome -->
		<div class="infinityChrome">
			<div></div>
			<div></div>
			<div></div>
		</div>

		<!-- Safari and others -->
		<div class="infinity">
			<div>
				<span></span>
			</div>
			<div>
				<span></span>
			</div>
			<div>
				<span></span>
			</div>
		</div>
		<!-- Stuff -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
			<defs>
				<filter id="goo">
					<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
					<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
					<feBlend in="SourceGraphic" in2="goo" />
				</filter>
			</defs>
		</svg>
	</div>
</div>

<!-- mobile header -->
<header class="mobile-header-1 light">
	<div class="container">
		<!-- menu icon -->
		<div class="menu-icon d-inline-flex mr-4">
			<button>
				<span></span>
			</button>
		</div>
		<!-- logo image -->
		<div class="site-logo">
			<a href="index-light.html">
				<!-- <img src="images/logo-dark.svg" alt="Bolby" /> -->
				<h2 class="m-0">Hyginus</h2>
			</a>
		</div>
	</div>
</header>

<!-- desktop header -->
<header class="desktop-header-1 light d-flex align-items-start flex-column">
	
	<!-- logo image -->
	<div class="site-logo">
		<a href="/">
			<!-- <img src="images/logo-dark.svg" alt="Bolby" /> -->
			<h2 class="m-0">Hyginus</h2>
		</a>
	</div>
	
	<!-- main menu -->
	<nav>
		<ul class="vertical-menu scrollspy">
			<li class="active"><a href="#home"><i class="icon-home"></i>Home</a></li>
			<li><a href="#about"><i class="icon-user-following"></i>About</a></li>
			<!-- <li><a href="#services"><i class="icon-briefcase"></i>Services</a></li> -->
			<!-- <li><a href="#experience"><i class="icon-graduation"></i>Experience</a></li> -->
			<!-- <li><a href="#works"><i class="icon-layers"></i>Works</a></li> -->
			<!-- <li><a href="#blog"><i class="icon-note"></i>Blog</a></li> -->
			<li><a href="#contact"><i class="icon-bubbles"></i>Contact</a></li>
		</ul>
	</nav>
	
	<!-- site footer -->
	<div class="footer">
		<!-- copyright text -->
		<span class="copyright">© 2020 Hyginus Ukeh.</span>
	</div>

</header>

<!-- main layout -->
<main class="content">
	
	<!-- section home -->
	<section id="home" class="home d-flex light align-items-center">
		<div class="container">

			<!-- intro -->
			<div class="intro">
				<!-- avatar image -->
				<div id="profile-image"></div>

				<!-- info -->
				<h1 class="mb-2 mt-2">Hyginus Ukeh</h1>
				<span>I'm a <span class="text-rotating">UI/UX designer, Frontend Developer, Backend Developer</span></span>

				<!-- social icons -->
				<ul class="social-icons light list-inline mb-0 mt-4">
					<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				</ul>

				<!-- buttons -->
				<div class="mt-4">
					<a href="#contact" class="btn btn-default">Hire me</a>
				</div>
			</div>
			
			<!-- scroll down mouse wheel -->
			<div class="scroll-down light">
				<a href="#about" class="mouse-wrapper">
					<span>Scroll Down</span>
					<span class="mouse">
						<span class="wheel"></span>
					</span>
				</a>
			</div>

			<!-- parallax layers -->
			<div class="parallax" data-relative-input="true">

				<svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg"><path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z" fill="#FFD15C" fill-rule="evenodd"/></svg>

				<svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg"><path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd"/></svg>

				<svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg"><path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z" fill="#44D7B6" fill-rule="evenodd"/></svg>

				<svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd"/></svg>

				<svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"/></svg>

				<svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg"><g fill="#FF4C60" fill-rule="evenodd"><path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z"/><path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z"/></g></svg>

				<svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg"><path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none" fill-rule="evenodd"/></svg>

				<svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"/></svg>

				<svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9" xmlns="http://www.w3.org/2000/svg"><path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z" fill="#6C6CE5" fill-rule="evenodd"/></svg>

				<svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg"><g fill="#44D7B6" fill-rule="evenodd"><path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z"/><path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z"/></g></svg>

				<svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg"><path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z" fill="#FFD15C" fill-rule="evenodd"/></svg>

			</div>
		</div>
		
	</section>

	<!-- section about -->
	<section id="about">

		<div class="container">
			
			<!-- section title -->
			<h2 class="section-title wow fadeInUp">About Me</h2>

			<div class="spacer" data-height="60"></div>
			
			<div class="row">

				<div class="col-md-3">
					<div class="text-center text-md-left">
						<!-- avatar image -->
						<!-- <img src="images/avatar-2.svg" alt="Hyginus" /> -->
						<div id="profile-image"></div>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

				<div class="col-md-9 triangle-left-md triangle-top-sm">
					<div class="rounded bg-white shadow-dark padding-30">
						<div class="row">
							<div class="col-md-6">
								<!-- about text -->
								<p>I am Hyginus Ukeh, a software engineer who is highly skilled and passionate about solving problems. I have rich experience in website design, website development and UI/UX Design.</p>
								<!-- <div class="mt-3">
									<a href="#" class="btn btn-default mb-2">Download CV</a>
								</div> -->
								<div class="spacer d-md-none d-lg-none" data-height="30"></div>
							</div>
							<div class="col-md-6">
								<!-- skill item -->
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">Web Design</h4>
										<span class="float-right">85%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="85" data-color="#FFD15C">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>

								<!-- skill item -->
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">We Development</h4>
										<span class="float-right">95%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="95" data-color="#FF4C60">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>

								<!-- skill item -->
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">UX/UI</h4>
										<span class="float-right">70%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="70" data-color="#6C6CE5">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- row end -->

			<div class="spacer" data-height="70"></div>
			
			

		</div>
		
	</section>
	
	<!-- section services -->

	
	<!-- section experience -->

	
	<!-- section works -->
	
	
	<!-- section testimonials -->
	
	
	<!-- section contact -->
	<section id="contact">

		<div class="container">
			
			<!-- section title -->
			<h2 class="section-title wow fadeInUp">Get In Touch</h2>

			<div class="spacer" data-height="60"></div>
			
			<div class="row">
				
				<div class="col-md-4">
					<!-- contact info -->
					<div class="contact-info">
						<h3 class="wow fadeInUp">Let's talk about everything!</h3>
						<p class="wow fadeInUp">Don't like forms? Send me an <a href="mailto:name@example.com">email</a>. 👋</p>
					</div>
				</div>

				<div class="col-md-8">
					<!-- Contact Form -->
					<form id="contact-form" class="contact-form mt-6" method="post" action="#" onsubmit="event.preventDefault(); sendMessage();">
						
						<div class="messages"></div>
						
						<div class="row">
							<div class="column col-md-6">
								<!-- Name input -->
								<div class="form-group">
									<input type="text" class="form-control" name="user_name" id="InputName" placeholder="Your name" required="required" data-error="Name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="column col-md-6">
								<!-- Email input -->
								<div class="form-group">
									<input type="email" class="form-control" id="InputEmail" name="user_email" placeholder="Email address" required="required" data-error="Email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="column col-md-12">
								<!-- Email input -->
								<div class="form-group">
									<input type="text" class="form-control" id="InputSubject" name="user_subject" placeholder="Subject" required="required" data-error="Subject is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
					
							<div class="column col-md-12">
								<!-- Message textarea -->
								<div class="form-group">
									<textarea name="message" id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Send Message</button><!-- Send Button -->

					</form>
					<!-- Contact Form end -->
				</div>

			</div>

		</div>

	</section>

	<div class="spacer" data-height="96"></div>
	
</main>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/infinite-scroll.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/validator.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/morphext.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.1/dist/email.min.js"></script>

            <script type="text/javascript">
                (function(){
                    emailjs.init("user_CUXQes88PKIj9OyP30GGv");
                })();
            </script>

            <script>
                function sendMessage(){

					var message = document.getElementById('InputMessage').value;
					var senderName = document.getElementById('InputName').value;
					var senderEmail = document.getElementById('InputEmail').value;
					var subject = document.getElementById('InputSubject').value;

					if(message == "" || message == null ){
						return alert('Please complete your form. Thanks.')            	
					} 

					if(senderName == "" || senderName == null ){
						return alert('Please complete your form. Thanks.')            	
					} 

					if(senderEmail == "" || senderEmail == null ){
						return alert('Please complete your form. Thanks.')            	
					} 

					if(subject == "" || subject == null ){
						return alert('Please complete your form. Thanks.')            	
					} 

					if (!validateEmail(senderEmail)) {
						return alert('Invalid Email.')    
					}

					document.getElementById('submit').disabled = true;

						var templateParams = {
						"reply_to": "Hyginus",
						"from_name": "your website - hyginusukeh.com",
						"to_name": "Hyginus",
						"message_html": `<b>From :</b> ${senderName} <br/> <b>Email :</b> ${senderEmail} <br/> <b>Subject :</b> ${subject} <br/> <b>Message :</b> ${message}`
						}
	
						emailjs.send('default_service', 'template_aaHM7x3a', templateParams)
							.then(function(response) {
								console.log('SUCCESS!', response.status, response.text);
								alert('Message sent succesfully. Thanks, I will get back shortly.')
								location.reload();
							}, function(error) {
							console.log('FAILED...', error);
						});  

					
                    
                }

				function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
            </script>

</body>

</html>
