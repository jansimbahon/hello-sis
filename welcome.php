<?php
	
	if (isset($_POST['register']))
	{

		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

		echo "Welcome, " . $firstName .
		" ". $lastName ."!</br>" .
		'Your ID  number is'. $studentNo .
		'.</br>
		Your email address is '. $emailAddress.
		'. </br>
		Your password is '. $password .
		'. </br>
		Your birthday is '. $birthDate .
		'. <br/> <br/>
		The time is '. date('c');
	}

	else
	{
		header('location: register.php');
	}



?>


<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href = "css/bootstrap.min.css" rel = "stylesheet"/>
	</head>
		<body>
			<div class = "container">
				<h1 class = "text-center"> WHATS CRACKING <?php echo $firstName ?>! </h1>
				<div class = "col-lg-offset-3 col-lg-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/sIlNIVXpIns?autoplay=1" frameborder="0" allowfullscreen></iframe>
		</div>
		</body>
</html>