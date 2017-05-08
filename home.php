<?php
$errors=[];
$missing=[];
if (isset($_POST['send'])) {
	$expected = ['name', 'email', 'gender', 'bday'];
	$required = ['name', 'email'];
	require './includes/process_mail.php';
}
?>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
    <title>Site</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script type = "text/javascript" src="jquery-2.2.4.min.js"></script>
	<script src="script.js"></script>
	<script>
		$(function() {
		$( "#datepicker" ).datepicker();
		});
	</script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	<input type="text" id="datePicker" placeholder="Select Date"style="height: 34px;width: 171px;position: relative; border-radius: 5px;">
</head>
<body bgcolor = "#FFF8DC">
    <img id="xyz" src="logo.png" />
	<ul class="bar">
		<li class="opt"><a href="#about" id="barlink">About</a></li>
		<li class="opt"><a href="contact.php" id="barlink">Contact</a></li>
		<li class="opt"><a href="#news" id="barlink">News</a></li>
		<li class="opt"><a class="active" href="home.php" id="barlink">Home</a></li>
	</ul>
	<img id="top-img" src="mountain-view.jpg"/>
	<input id="search" type="text" value="Find your deals here, start..." onfocus="(this.value == 'Find your deals here, start...') && (this.value = '')"
       onblur="(this.value == '') && (this.value = 'Find your deals here, start...')" />
	<div id = "left" class = "border">	  
		<h3><center>Not a member?Sign up</center></h3>
		<?php if($errors || $missing): ?>
		<p class="warning">Please fix the items indicated</p>
		<?php endif; ?>
		<form method="post"  action="<?php $_SERVER['PHP_SELF']; ?>"> 
			<label for="name">Name:
			<?php if($missing && in_array('name', $missing)) : ?>
				<span class="warning">Please enter your name</span>
			<?php endif; ?>
			</label>
			<input type="text" name="name"
			<?php
				if($errors || $missing) {
					echo 'value="'.htmlentities($name).'"';
				}
				
			?>
			>
			<br><br>
			<label for="email">E-mail:
			<?php if($missing && in_array('email', $missing)) : ?>
				<span class="warning">Please enter your email</span>
			<?php endif; ?>
			</label>
			<input type="text" name="email"
				<?php
				if($errors || $missing) {
					echo 'value="'.htmlentities($email).'"';
				}
				
			?>
			>
			<br><br>
			Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<br><br>
			Birthday: <input type="text" id="datepicker" name="bday">
			<br><br>
			<input type="submit" name="send" value="Submit">
		</form>
	</div>
  	<div class="col-md-12">
        <ul class="social-network social-circle">
            <li class="circle"><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li class="circle"><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="circle"><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li  class="circle"><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li class="circle"><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>				
	</div>
	<marquee behavior = "alternate" direction="left"><span style="font-family:Gigi;font-size:50px;">Your package?</span></marquee>
	<div id="trial">
		<img id="packages" class="module" src="dubai.jpg" />
		<img id="packages" class="tint t2" src="london.jpg" />
		<img id="packages" class="tint t3" src="singapore.jpg" />
		<img id="packages" class="tint t4" src="malasiya.jpg" />
		<img id="packages" class="tint t5" src="ny.jpg" />
		<img id="packages" class="tint t6" src="paris.jpg" /> 
	</div>
</body>
</html>
