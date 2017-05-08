<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email= $gender = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"]))
  {
	  $nameErr = "Name is required";
	  echo $nameErr;
  }
  else 
  {
	  $name = test_input($_POST["name"]);
  }
  if(empty($_POST["email"]))
  {
	  $emailErr = "E-mail is required";
	  echo $emailErr;
  }
  else 
  {
	  $email = test_input($_POST["email"]);
  }
  $gender = test_input($_POST["gender"]);
}

if(!(empty($_POST["name"])) && !(empty($_POST["email"])))
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email= mysqli_real_escape_string($conn, $_POST['email']);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "INSERT INTO MyGuests (firstname,email,gender)
VALUES ('$name','$email', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

  




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>