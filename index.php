
<?php
     error_reporting(0);
     session_start();
     session_destroy();

     if($_SESSION['message'])
     {
     	$message=$_SESSION['message'];

     	echo "<script type='text/javascript'>
     	alert('$message');
     	</script>";
     }


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo">League School</label>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
	</nav>

	<div class="section1">

    <label class="image_text">We Teach Students With Care</label>
		<img class="main_img" src="school_management.jpg">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="school2.jpg">
			</div>
			<div class="col-md-8">

				<h1>Welcome to League School</h1>

				<p>The role of school in our life, school, promotes interest and empowers them with opportunities to become successful individuals. The expansion of the new education system is similar to the development of our society. It is well established that the method of learning is essential in defining one’s personality and in coping with life circumstances. The transition from book literacy to the experience of existence has created a wave of shifts in schools.People have warmed up that schooling is the secret to positive growth rather than a means of graduation and achieving material achievement in life. The School is important for a child because the school has a countless knowledge and also the best higher education and guidance for the future.</p>
		</div>
	</div>

	<center>
		<h1>Our Teachers</h1>
	</center>

	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<img class="teacher" src="teacher1.jpg">
				<p>In a vibrant, academically challenging, and encouraging environment where manifold view points are prized and celebrated</p>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="teacher2.jpg">
				<p>"It is the supreme art of the teacher to awaken joy in creative expression and knowledge.</p>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="teacher3.jpg">
				<p>The best teachers are those who show you where to look but don't tell you what to see. </p>
			</div>



		</div>
	</div>

	<center>
		<h1>Our Courses</h1>
	</center>

	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<img class="teacher" src="web.jpg">
				<h3>Web Dovelopment</h3>
				
			</div>
			<div class="col-md-4">
				<img class="teacher" src="graphic.jpg">
				<h3>Graphic Design</h3>
				
			</div>
			<div class="col-md-4">
				<img class="teacher" src="marketing.png">
			    <h3>Digital Marketing</h3>
				
				
			</div>



		</div>
	</div>

	<center>
		<h1>Admission Form</h1>
	</center>

	<div align="center" class="admission_form">

		<form action="data_check.php" method="POST">
			<div>
				<label class="label_text">Name</label>
				<input class="input_deg" type="text" name="name">
			</div>

            <div>
				<label class="label_text">Email</label>
				<input class="input_deg" type="text" email="email">
			</div>

			<div>
				<label class="label_text">Phone</label>
				<input class="input_deg" type="text" phone="phone">
			</div>

			<div>
				<label class="label_text">Message</label>
				<textarea name="message"></textarea>
			</div>

			<div>
				<input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
			</div>
		</form>
	</div>
	<footer>
		<h3>All @copyright reserved by Mukhesh Sri Vatsav,Ashwinn Reddy,Sai Chakradhar.
	</footer>
</body>
</html>