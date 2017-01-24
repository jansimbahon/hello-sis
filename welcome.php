<?php
	
	if (isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];
	}
	else
	{
		header('location: register.php');
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Scratch DJ Academy | Home</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<style>
		.container
		{
    		padding: 80px 120px;
    	}

    	.navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}

.bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
}
.bg-1 h3 {
	color: #fff;
}
.bg-1 p {
	
	font color:white;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
}

/* Fixed navbar 
/* General sizing */
ul.dropdown-lr {
  width: 300px;
}

/* mobile fix */
@media (max-width: 768px) {
	.dropdown-lr h3 {
		color: #eee;
	}
	.dropdown-lr label {
		color: #eee;
	}
}


.carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
}

.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
}

footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
    	</style>
	</head>
		<body>
</head>
		<body>
		<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand">Scratch DJ Academy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#program">PROGRAM</a></li>
        <li><a href="#learn">LEARN</a></li>
        <li><a href="#learn">ENROLLMENT</a></li>
        <li><a href="#contact">CONTACT</a></li>
    			</div>
  			</div>
		</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.0-9/293889_10150997408133329_1724424901_n.jpg?_nc_eui2=v1%3AAeH8tGuFjFxX5eWNGaPD0v0231FqHEplrlL5MDUU6wbU7KWgME__610Rwqv3DGjmEDQIp2wfo7HH2wN5cKNUY8bbrEuXJVaJdfyMEbuiD5pj2yKSP1RNPTxvAXNWqqYn1Es&oh=ee4edeec50aa49edc54a0b1375344a9c&oe=591EAFE1" alt="New York">
    </div>

    <div class="item">
      <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.0-9/10387249_10152426402498329_8192676520181604442_n.jpg?_nc_eui2=v1%3AAeHH4sBWhlbJKlOtU1imk1CSEvQkSEDEBEexOUGKvMaL9xBFnv5b1gFdVDhq4ZpSbN9izQJh3NAkGsv1oV-P7HrlcpdAFh8Lh8FlDVv4pUIuOkVsTAlO4XyLg8D1YKIIyws&oh=7c1ce8680acd181630c0980ceae79df2&oe=5920069B" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.0-9/10649594_10152680141603329_8170751213310132260_n.jpg?_nc_eui2=v1%3AAeF9l59aLK-Fg8zQqoRe7WFiRXC2sdTnAs7s-Iq8yxTCnwjIZpX2QbVK06BRB8Iwq8emMEKXQPG5lld5P6hby2f6cAle5TJ-gkRhQNDrEEAXN3_-dKcDfVqg6fX3Kt7orG0&oh=9fb34c1fea6f87a384fa15fb082af2cd&oe=590B2B2D" alt="Los Angeles">
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




	<div class = "bg-1">
		<div class="container text-center">
  			<strong><p>Registration was successful</p></strong>
  			<br>
  			<p>
  				<?php

				echo 
					"<strong>Welcome, " . $firstName .
					" ". $lastName ."!</br></strong>" .
					'<strong>ID Number :</strong>'. $studentNo .
									'.</br>
					<strong>Email      :</strong> '. $emailAddress.
					'. </br>
					<strong>Password   :</strong> '. $password .
					'. </br>
					<strong>Birth Date :</strong>'. $birthDate .
					'. <br/> <br/>
					The time is '. date('c');



  				?>

  			</p>
	  		
				    </div>
				  </div>
				</div>
			</div>

<footer class="text-center">
<br><br>
  <p>WEBDEVT Exercise #3 by Jan Simbahon</p> 
</footer>
		</body>
</html>
