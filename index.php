<?php

	//date in mm/dd/yyyy format;
	$birthDate = "03/01/1985";

	//explode the date to get month, day and year
	$birthDate = explode("/", $birthDate);

	//get age from date or birthdate
	$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2]));


	$jobs_array = array(
			array("project_number" => "three", "project_link" => "camelweb.com","project_class" => "image-three", "project_image" => "img/camelweb.png",
		 "project_name" => "CamelWeb", "project_description" =>"CamelWeb is a company creating modern websites for partners and clients from all over the world."),
			array("project_number" => "two", "project_link" => "Udthemes.com","project_class" => "image-two", "project_image" => "img/udthemes.png", 
		"project_name" => "UDTHEMES", "project_description" =>"UDTHEMES is a WordPress Theme Shop that designs and builds Premium WordPress Themes and HTML Templates."),
			array("project_number" => "one", "project_link" => "invoicerunner.com","project_class" => "image-one", "project_image" => "img/invoice-runner.png",
		"project_name" => "invoicerunner", "project_description" =>"Invoice Runner is an application built on the Meteor platform. It is simple to use and you can import and track invoices easily. A Red Sky Forge Software-as-a-Service."),
	);
?>

<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
<head>
	<title>Alina Butiulca, web developer</title>
	<meta charset="UTF-8">
	<meta name="description" content="Web developer portfolio" />
	<meta name="author" content="Alina Butiulca" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo" />

	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->

	 <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body>

	<!-- Sidebar -->
	<section id="sidebar">

		<!-- Mobile Menu Toggle -->
		<div class="mobileMenuToggle"><a href="">&#9776;</a></div>

		<!-- Navigation -->
		<nav class="menu">
			<ul>
				<li><a href="#home" class="active">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#portfolio">Jobs</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>

	</section>

	<!-- Content -->
	<div id="main-content">

		<!-- Home -->
		<section id="home">

			<div class="inner clearfix">
				<div class="animation-element slide-right">
					<h1>Alina <span>Butiulca</span></h1>
					<p>Web Developer</p>
				</div>
				<figure>
					<img src="img/profile.png" alt="Profile-photo" />
				</figure>
			</div>

		</section>

		<!-- About -->
		<section id="about">

			<div class="inner animation-element slide-right">
				<h1>Hey, my name is Alina!</h1>
				<p>I'm a <?php echo $age; ?>-years-old Web Developer from Targu Mures, Romania. I am curious, ambitious, eager to learn new things and determined to finish everything I start. I am passionate to write clean and good code, improve my skills and I believe in friendly, honest communication. When I'm not coding I like to cook, read books, watch a movie and spend time with my family.</p>
				<div class="skills clearfix animation-element slide-right">
					<div class="icon-blue">
						<p>HTML</p>
					</div>
					<div class="icon-green middle">
						<p>CSS</p>
					</div>
					<div class="icon-blue">
						<p>Javascript</p>
					</div>
					<div class="icon-green">
						<p>JQuery</p>
					</div>
					<div class="icon-blue middle">
						<p>PHP</p>
					</div>
					<div class="icon-green">
						<p>WordPress</p>
					</div>
				</div>
			</div>

		</section>

		<!-- Portfolio -->
		<section id="portfolio">

			<?php
				foreach($jobs_array as $key => $val) {
					$project_number = $val['project_number'];
	 				$project_link = $val['project_link'];
		 			$project_class = $val['project_class'];
		 			$project_image = $val['project_image'];
		 			$project_name = $val['project_name'];
		 			$project_description = $val['project_description']; ?>

				<section class="project <?php echo $project_number; ?>">
					<a href='https://<?php echo $project_link;?>/' class="<?php echo $project_class;?>">
						<img src="<?php echo $project_image;?>" alt="<?php echo $project_name;?>" />
					</a>
					<div class="content animation-element slide-right">
						<div class="inner">
							<h2><?php echo $project_name;?></h2>
							<p><?php echo $project_description;?></p>
						</div>
					</div>
				</section>

			<?php
			}
		?>

		</section>

		<!-- Contact -->
		<section id="contact">

			<div class="inner animation-element slide-right">
				<h2>Get in touch</h2>
				<p>Please feel free to reach me if you are interested in working with me or have a friendly chat.Thanks!</p>
				<section class="wrapper animation-element slide-right">
					<form id="contactForm">
						<div class="field-name">
							<label for="contactName">Name*</label>
							<input type="text" id="contactName" name= "contactName" value="" />
						</div>
						<div class="field-email">
							<label for="contactEmail">Email*</label>
							<input type="text" id="contactEmail" name="contactEmail" value="" />
						</div>
						<div class="field-subject">
							<label for="contactMessage">Message*</label>
							<textarea id="contactMessage" name="contactMessage" ></textarea>
						</div>
						<div class="field-submit">
							<input type="button" id="submitButton" value="SEND">
						</div>
					</form>
					<ul class="contactInformation animation-element slide-right">
						<li class="addressInfo">
							<h3>Address</h3>
							<p>Targu Mures, Romania</p>
						</li>
						<li class="emailInfo">
							<h3>Email</h3>
							<p>alinutza.ms@gmail.com</p>
						</li>
						<li>
							<h3>Social</h3>
							<ul>
								<li class="social">
									<a href="https://www.facebook.com/butiulca.alina" class="social-icon">&#62220;</a>
								</li>
								<li class="social">
									<a href="https://twitter.com/AlinaButiulca" class="social-icon">&#62217;</a>
								</li>
								<li class="social">
									<a href="https://github.com/alinutzaB" class="social-icon">&#62208;</a>
								</li>
								<li class="social">
									<a href="https://www.linkedin.com/in/alina-butiulca-50046a38/" class="social-icon">&#62232;</a>
								</li>
							</ul>
						</li>
					</ul>
					<div id="message"></div>
				</section>
			</div>

		</section>

	</div>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner animation-element slide-right">
			<p class="footer-copyright">&copy;
				<a href="http://alinab.info" title="Alina Butiulca">Alina Butiulca.</a> All Rights Reserved.
			</p>
			<a class="back-to-top" title="Back to top" href="#home">Back to top</a>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/contact.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-79834407-1', 'auto');
		ga('send', 'pageview');
</script>

</body>
</html>