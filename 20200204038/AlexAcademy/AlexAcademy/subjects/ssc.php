<?php
    session_start();
	// Establish a database connection
	$servername = "localhost";  // Change this to your database server
	$username = "root"; // Change this to your database username
	$password = ""; // Change this to your database password
	$dbname = "alvi";
$conn = new mysqli($servername, $username, $password, $dbname);
    $select = "SELECT * FROM video";
    $select_result = mysqli_query($conn,$select);
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="png" href="../images/icon/favicon.png">
	<title>Prepare for Secondary School Certificate (SSC)</title>
	<link rel="stylesheet" type="text/css" href="subjects.css">
	<script type="text/javascript" src="../script.js"></script>
</head>

<body>

	<!-- NAVIGATION -->
	<header>
		<div class="nav" id="nav">
			<div id="learned-logo">
				<a href="../index.php"><img src="../images/icon/logo.png" style="width: 120px;"></a>
			</div>
			<div class="switch-tab" id="switch-tab" onclick="switchTAB()"><img src="../images/icon/menu.png"></div>
			<ul id="list-switch">
				<li><a href="#"><img src="../images/courses/d1.png" class="icon">SSC</a></li>
				<li><a href="hsc.html"><img src="../images/courses/paper.png" class="icon">HSC</a></li>
				<li><a href="computer_courses.html"><img src="../images/courses/computer.png" class="icon">Computer
						Courses</a></li>
				<li><a href="computer_courses.html#data"><img src="../images/courses/data.png" class="icon">Data
						Structures</a></li>
				<li><a href="computer_courses.html#algo"><img src="../images/courses/algo.png"
							class="icon">Algorithm</a></li>
				<li><a href="computer_courses.html#projects"><img src="../images/courses/projects.png"
							class="icon">Projects</a></li>
			</ul>
		</div>
	</header>

	<div class="title">
		<span>Prepare for Secondary School Certificate (SSC)<br>on AlexAcademy</span>
		<div class="shortdesc">
			<p>Learn your basic concepts to prepare for your upcoming exams.</p>
		</div>
	</div>

	<!-- Quick Links -->
	<div class="course">
		<div class="cbox">
			<div class="det"><a href="https://en.wikipedia.org/wiki/Projectile" target="_blank">Projectile</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Snell%27s_law" target="_blank">Snell's Law</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Light" target="_blank">Light</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Maxwell%27s_equations" target="_blank">Maxwell
					Equations</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Laser" target="_blank">LASER</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Gravity" target="_blank">Gravitation</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Inertia" target="_blank">Inertia</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Current" target="_blank">Current</a></div>
		</div>
		<div class="cbox">
			<div class="det"><a href="#organic">Organic Chemistry</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Thermodynamics" target="_blank">Thermodynamics</a>
			</div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Chemical_process" target="_blank">Chemical
					Process</a></div>
			<div class="det"><a href="#physical">Physical Chemistry</a></div>
			<div class="det"><a href="#inorganic">Inorganic Chemistry</a></div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Periodic_table" target="_blank">Periodic Table</a>
			</div>
			<div class="det"><a href="https://en.wikipedia.org/wiki/Equilibrium" target="_blank">Equilibrium</a></div>
		</div>
		<div class="cbox">
			<div class="det"><a href="#math">Differential</a></div>
			<div class="det"><a href="#math">Calculus</a></div>
			<div class="det"><a href="#math">Algebra</a></div>
			<div class="det"><a href="#math">Trigonometry</a></div>
			<div class="det"><a href="#math">Integration</a></div>
			<div class="det"><a href="#math">Matrices</a></div>
			<div class="det"><a href="#math">Determinants</a></div>
			<div class="det"><a href="#math">Differentiation</a></div>
		</div>
	</div>


	<!-- VIDEOS SECTION -->
	<div class="title2" id="organic">
		<span><center><h1>Accelerate your career with AlexAcademy<h1></span> <br>
		<span><h3>Organic Chemistry<h3></span>
		<div class="shortdesc2">
			<p><h4>Make strong concepts in Organic Chemistry with great tutors...<h4></p>
		</div>
	</div>

	<center>
		<div class="ccardbox2">
			<?php foreach($select_result as $sl=>$videos){ ?>
				<div class="dcard2"><span class="tag"><?= $sl+1 ?>/8</span>
					<div class="fpart2"><img src="../images/courses/organic.jpg">
						<iframe src="<?= $videos['organic'] ?>" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
				</div>
			<?php }?>

			<!-- <div class="dcard2"><span class="tag">2/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">3/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">4/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>

			<div class="dcard2"><span class="tag">5/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">6/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">7/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">8/8</span>
				<div class="fpart2"><img src="../images/courses/organic.jpg">
					<iframe src="https://www.youtube.com/embed/bSMx0NS0XfY" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div> -->
			</div>
		</div>
	</center>

	<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/watch?v=bSMx0NS0XfY&list=PL8dPuuaLjXtONguuhLdVmq0HTKS0jksS4"
			target="_blank">Click Here to Watch full playlist</a>
	</div>

	<!-- VIDEOS SECTION -->

	<div class="title2" id="inorganic">
		<span><center><h1><h1></span> <br>
			<span><h3>Inorganic Chemistry<h3></span>
			<div class="shortdesc2">
				<p><h4>Make strong concepts in Inorganic Chemistry with great tutors...<h4></p>
			</div>
	</div>
	<center>
		<div class="ccardbox2">
			<div class="dcard2"><span class="tag">1/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
			</div>
			</div>
			<div class="dcard2"><span class="tag">2/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">3/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">4/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>

			<!-- <div class="dcard2"><span class="tag">5/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">6/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">7/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/2B8CRyfGLo4" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">8/8</span>
				<div class="fpart2"><img src="../images/courses/inorganic.jpg">
					<iframe src="https://www.youtube.com/embed/Iuo9PpGE04Y" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div> -->
		</div>
	</center>
	<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/watch?v=2B8CRyfGLo4" target="_blank">Click Here to Watch full playlist</a>
	</div>

	<!-- VIDEOS SECTION -->

	<div class="title2" id="physical">
		<span><center><h1><h1></span> <br>
			<span><h3>Physical Chemistry<h3></span>
			<div class="shortdesc2">
				<p><h4>Make strong concepts in Physical Chemistry with great tutors...<h4></p>
			</div>
	</div>
	<center>
		<div class="ccardbox2">
			<div class="dcard2"><span class="tag">1/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">2/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<!-- <div class="dcard2"><span class="tag">3/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">4/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>

			<div class="dcard2"><span class="tag">5/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">6/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">7/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">8/8</span>
				<div class="fpart2"><img src="../images/courses/physical.jpg">
					<iframe src="https://www.youtube.com/embed/2y4cf47I21A" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div> -->
		</div>
	</center>
	<br><br>
	<div class="click-me">
		<a href="https://youtu.be/2y4cf47I21A" target="_blank">Click Here to Watch full playlist</a>
	</div>


	<!-- VIDEOS SECTION -->

	<div class="title2" id="physics">
		<span><center><h1><h1></span> <br>
			<span><h3>Physics<h3></span>
			<div class="shortdesc2">
				<p><h4>Make strong concepts in Physics with great tutors...<h4></p>
			</div>
	</div>
	<center>
		<div class="ccardbox2">
			<div class="dcard2"><span class="tag">1/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">2/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<!-- <div class="dcard2"><span class="tag">3/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">4/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>

			<div class="dcard2"><span class="tag">5/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">6/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">7/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">8/8</span>
				<div class="fpart2"><img src="../images/courses/physics.jpg">
					<iframe src="https://www.youtube.com/embed/FYE0YYuAyu0" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div> -->
		</div>
	</center>
	<br><br>
	<div class="click-me">
		<a href="https://youtu.be/FYE0YYuAyu0" target="_blank">Click Here to Watch full playlist</a>
	</div>

	<!-- VIDEOS SECTION -->

	<div class="title2" id="math">
		<span><center><h1><h1></span> <br>
			<span><h3>Mathematics<h3></span>
			<div class="shortdesc2">
				<p><h4>Make strong concepts in Mathematics with great tutors...<h4></p>
			</div>
	</div>
	<center>
		<div class="ccardbox2">
			<div class="dcard2"><span class="tag">1/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">2/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<!-- <div class="dcard2"><span class="tag">3/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">4/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>

			<div class="dcard2"><span class="tag">5/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">6/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">7/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag">8/8</span>
				<div class="fpart2"><img src="../images/courses/math.jpg">
					<iframe src="https://www.youtube.com/embed/xxGyTHWrHZg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div> -->
		</div>
	</center>

	<br><br>
	<div class="click-me">
		<a href="https://youtu.be/xxGyTHWrHZg" target="_blank">Click Here to Watch full playlist</a>
	</div>
	

	<!-- SAMPLE PAPERS -->
	<div class="title2" id="sample_papers">
		<span>Sample Papers 2014-19</span>
		<div class="shortdesc2">
			<p>Practice more and more question papers</p>
		</div>
	</div>

	<div class="sample">
		<ul>
			<li><a href="../samplePapers/p1.pdf" target="_blank">Sample Paper 2014 Set-A</a></li>
			<li><a href="../samplePapers/p1.pdf" target="_blank">Sample Paper 2014 Set-B</a></li>
			<li><a href="../samplePapers/p1.pdf" target="_blank">Sample Paper 2014 Set-C</a></li>
		</ul>
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