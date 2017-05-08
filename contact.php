<?php
$errors=[];
$missing=[];
if (isset($_POST['send'])) {
	$expected = ['name', 'email', 'query'];
	$required = ['name', 'email'];
	require './includes/process_mail.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login_style.css">
     <script type="text/javascript" src="jquery.js"></script>
     <script type="text/javascript" src="login_effect.js"></script>
	
</head>
<body bgcolor="#FFE4B5">
	<ul class="bar">
		<li class="opt"><a href="#about" id="barlink">About</a></li>
		<li class="opt"><a class="active" href="contact.php" id="barlink">Contact</a></li>
		<li class="opt"><a href="#news" id="barlink">News</a></li>
		<li class="opt"><a href="home.php" id="barlink">Home</a></li>
	</ul>
<div class="row">
	<div class="col-md-4 first">
		<div id="control-map">
			<div id="map"></div>
		<script>
			var map;
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
				'center': {lat: 28.2468, lng: 76.8151},
				'zoom': 16
				});
		
				var marker = new google.maps.Marker({
				position: {lat: 28.2468, lng: 76.8151},
				map: map,
				title: 'BML Munjal University'
				});
		
				var contentString = 'BML Munjal University <br/>';
				contentString += '67 Km milestone <br/>';
				contentString += 'Gurgaon, Haryana'
		
				var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 270
				});
		
				marker.addListener('click', function() {
				infowindow.open(map, marker);
				});
			}
		</script>
		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfVoHrouJtbK9k_NPAm7lRbJQZbtgbCEY&callback=initMap"
    async defer></script>
		</div>
	</div>
	<div class="col-md-4 second">
		<div class="mform">
			<?php if($errors || $missing): ?>
			<p class="warning">Please fix the items indicated</p>
			<?php endif; ?>
			<form method="post" class="form-inline" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="exampleInputName2">Name
						<?php if($missing && in_array('name', $missing)) : ?>
						<span class="warning">Please enter your name</span>
						<?php endif; ?>
					</label>
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Jon Doe" size="50" name="name" 
					<?php
						if($errors || $missing) {
						echo 'value="'.htmlentities($name).'"';
						}
					?>
						>
					<br><br>
					<label for="exampleInputEmail2">Email
						<?php if($missing && in_array('email', $missing)) : ?>
						<span class="warning">Please enter your email</span>
						<?php endif; ?>
					</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="name@example.com" size="50" name="email"
						<?php
						if($errors || $missing) {
						echo 'value="'.htmlentities($email).'"';
						}
						?>
					>
				</div>
				<br><br>
				<label for="exampleInputEmail2">Query</label>
				<textarea class="form-control" rows="8" cols="52" placeholder="Your query here" name="query"></textarea><br><br>
				<button type="submit" class="btn btn-default" name="send">Send query</button>
			</form>
	</div>
		
		</div>
			
	<div class="col-md-4 third">
		<div class="cont">
			<h1>Contact us:</h1><br><br>
			
			<span>Name: ABC<br>
				  Mobile: +91 XX XX XXXX<br>
				  Email: ABC@example.com<br>
				  Address: abc, abc, abc<br>
			</span><br>
			
			<span>Name: ABC<br>
				  Mobile: +91 XX XX XXXX<br>
				  Email: ABC@example.com<br>
				  Address: abc, abc, abc<br>
			</span><br>
			
			<span>Name: ABC<br>
				  Mobile: +91 XX XX XXXX<br>
				  Email: ABC@example.com<br>
				  Address: abc, abc, abc<br>
			</span><br>
			
			<span>Name: ABC<br>
				  Mobile: +91 XX XX XXXX<br>
				  Email: ABC@example.com<br>
				  Address: abc, abc, abc<br>
			</span><br>
		</div>
	</div>
</div>
	<footer>
		<ul class="fttr">
			<li class="opt-fttr"><a href="#link1" id="fttrlink">Sign Up</a></li>
			<li class="opt-fttr"><a id="show_login button" onClick="showpopup();">Login</a></li>
			<li class="opt-fttr"><a href="#link3" id="fttrlink">News</a></li>
			<li class="opt-fttr"><a href="#link4" id="fttrlink">Home</a></li>
		</ul>
		
	</footer>
</body>
</html>