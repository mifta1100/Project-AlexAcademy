<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>AlexAcademy</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function () {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			} else {
				$('nav').removeClass('black');
			}
		})
	</script>
</head>

<body>
	<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="images/icon/logo.png" alt="logo"></div>

			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div style="display: flex;">
				<h3>
					<?php
					echo $_SESSION['username'];
				?>
					<h3>
						<a class="get-started" href="logout.php">Logout</a>
			</div>



			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>Learning is not attained by chance, it must be sought for with ardor and attended to with diligence.
				</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values,
					beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and
					directed research!</h5>
				<div class="play">
					<img src="images/icon/play.png" alt="play"><span><a href="" target="_blank">Play</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/roshan.jpeg" alt="Username">
				<p>Miftah1100</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>


	<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Subjects on AlexAcademy</span>
	</div>
	<br><br>
	<div class="course">
		<center>
			<div class="cbox">
				<div class="det"><a href="subjects/ssc.php"><img src="images/courses/book.png">SSC Preparation</a>
				</div>
				<div class="det"><a href="subjects/hsc.html"><img src="images/courses/d1.png">HSC Preparation</a></div>
				<div class="det"><a href="subjects/ssc.php#sample_papers"><img src="images/courses/paper.png">Sample
						Papers</a></div>
				<div class="det"><a href="subjects/quiz.html"><img src="images/courses/d1.png">Daily Quiz</a></div>
			</div>
		</center>
		<div class="cbox">
			<div class="det"><a href="subjects/computer_courses.html"><img src="images/courses/computer.png">Computer
					Courses</a></div>
			<div class="det"><a href="subjects/computer_courses.html#data"><img src="images/courses/data.png">Data
					Structures</a></div>
			<div class="det"><a href="subjects/computer_courses.html#algo"><img
						src="images/courses/algo.png">Algorithm</a></div>
			<div class="det det-last"><a href="subjects/computer_courses.html#projects"><img
						src="images/courses/projects.png">Projects</a></div>
		</div>
	</div>


	<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center>
			<p style="font-size: 50px; padding: 100px">About</p>
		</center>
		<div class="about-content">
			<div class="side-image">
				<img class="sideImage" src="images/extra/e3.jpg">
			</div>
			<div class="side-text">
				<h2>What you think about AlexAcademy ?</h2>
				<p>Education is the pathway to gaining knowledge, skills, values, beliefs, and habits. It encompasses
					various methods like teaching, training, storytelling, discussions, and research. Educational
					websites play a crucial role in enhancing learning by offering interactive tools such as games,
					videos, and topic-related resources. These websites make the learning process engaging and appealing
					to students, particularly in the modern era. By leveraging HTML, CSS, and JavaScript, we can create
					a captivating and accessible learning experience, making education more enjoyable and effective.</p>
			</div>
		</div>
	</div>


	<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center>
			<p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Portfolio</p>
		</center>
		<div class="content">
			<p>
				“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your
				attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try
				ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every year</p>
		<div class="smbox">
			<span>
				<center>
					<div class="data">0</div>
					<div class="det">Enrolled Students</div>
				</center>
			</span>
			<span>
				<center>
					<div class="data">0</div>
					<div class="det">Total Courses</div>
				</center>
			</span>
			<span>
				<center>
					<div class="data">0</div>
					<div class="det">Placed Students</div>
				</center>
			</span>
			<span>
				<center>
					<div class="data">0</div>
					<div class="det">Total Projects</div>
				</center>
			</span>
		</div>
	</div>


	<!-- Reviews by Students -->
	<div id="makeitfull">
		<a href="#review_section"><img src="images/icon/makeitfull.png"></a>
	</div>
	<div class="review">
		<div class="diffSection" id="review_section">
			<center>
				<p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the celebrities Say
					About Us?</p>
			</center>
		</div>
		<div class="rev-container">
			<div class="rev-card">
				<div class="identity">
					<img src="images/creator/mark.jpg">
					<p>Mark Zuckerberg</p>
					<h6>CEO of Facebook</h6>
					<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img
							src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png">
					</div>
				</div>
				<div class="rev-cont">
					<p id="title">Review:</p>
					<p id="content">
						"AlexAcademy is an impressive educational website. Its user-friendly interface and high-quality
						courses offer valuable learning experiences. The focus on community and collaboration sets it
						apart. Kudos to the founder for creating a platform that has the potential to redefine online
						education..."
					</p>
				</div>
			</div>
			<div class="rev-card">
				<div class="identity">
					<img src="images/creator/Jeff.jpg">
					<p>Jeff Bezos</p>
					<h6>Executive Chairman of Amazon</h6>
					<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img
							src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png">
					</div>
				</div>
				<div class="rev-cont">
					<p id="title">Review:</p>
					<p id="content">
						"A true gem in the world of online education, AlexAcademy shines brightly. Navigating its
						intuitive interface is a breeze, while its top-notch courses deliver enriching learning
						journeys. The emphasis on building a collaborative community is a standout feature.."
				</div>
			</div>
			<div class="rev-card">
				<div class="identity">
					<img src="images/creator/elon.jpg">
					<p>Elon Musk</p>
					<h6>CEO of Tesla Motors</h6>
					<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img
							src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png">
					</div>
				</div>
				<div class="rev-cont">
					<p id="title">Review:</p>
					<p id="content">

						"AlexAcademy truly stands out in the realm of online education. Its intuitive interface makes
						exploration seamless, and the exceptional courses ensure rewarding learning experiences. The
						unique focus on fostering a collaborative community is particularly impressive..."
					</p>
				</div>
			</div>
			<div class="rev-card">
				<div class="identity">
					<img src="images/creator/bill.jpg">
					<p>Bill Gates</p>
					<h6>American business magnate</h6>
					<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img
							src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png">
					</div>
				</div>
				<div class="rev-cont">
					<p id="title">Review:</p>
					<p id="content">
						"In the ever-evolving landscape of online education, AlexAcademy emerges as a true standout.
						Seamlessly facilitating exploration through its intuitive interface, it offers a collection of
						exceptional courses that guarantee enriching learning ventures..."
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center>
			<p style="font-size: 50px; padding: 100px">Contact Us</p>
		</center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
				<form action="mailto:alvishihat@gmail.com" method="post" enctype="text/plain">
					<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name
						<span class="imp">*</span></label><br>
					<center>
						<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input
							type="text" name="lname" style="width: 175px" required="required"><br>
					</center>
					<label>Email <span class="imp">*</span></label><br>
					<input type="email" name="mail" style="width: 100%" required="required"><br>
					<label>Message <span class="imp">*</span></label><br>
					<input type="text" name="message" style="width: 100%" required="required"><br>
					<label>Additional Details</label><br>
					<textarea name="addtional"></textarea><br>
					<button type="submit" id="csubmit">Send Message</button>
				</form>
			</div>
		</div>
	</div>


	<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:alvishihat@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>


	<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By AlexAcademy.</p>
				<br>
				<p><img src="images/icon/location.png"> Ahsanullah University of Science and Technology<br>141 & 142,
					Love Road, Tejgaon Industrial Area, Dhaka-1208.</p><br>
				<p><img src="images/icon/phone.png"> +8801535763995<br><img src="images/icon/mail.png">&nbsp;
					alexacademy@gmail.com</p>
			</div>
		</div>
	</footer>

</body>

</html>