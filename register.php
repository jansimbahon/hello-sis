
<?
	# Write your comment here
	// Write your other comment here
	/*
		Comment
	*/
		$studentNo = "";
		$lastName = "";
		$firstName = "";
		$emailAddress = "";
		$password = "";
		$birthDate = null;
?>


<!DOCTYPE html>
<html>
	<head>
<title>Scratch DJ Academy | Enrollment</title>
		<link href = "css/bootstrap.min.css" rel = "stylesheet"/>
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
	font-style: italic;
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


.person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
}
.person:hover {
    border-color: #f1f1f1;
}

.carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
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
  .container{
  	text-align:center;
  }

     </style>
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
                        </ul>
                    </li>
		       </div>
		  </div>
		</nav>
		<div class = "bg-1">
			<div class="container">
			<h1 class="text-center">Enrollment</h1>
			<div class="col-lg-offset-3 col-lg-6">
					<form method="POST" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">
								Student ID
							</label>
							<div class="col-lg-8">
								<input type="text" name="sid"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Last Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="ln"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								First Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="fn"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Email Address
							</label>
							<div class="col-lg-8">
								<input type="email" name="email"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Password
							</label>
							<div class="col-lg-8">
								<input type="password" name="pwd"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Birthdate
							</label>
							<div class="col-lg-8">
								<input type="date" name="bday"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-8">
								<button name="register"
									class="btn btn-success">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<footer class="text-center">
  <br><br>
  <p>WEBDEVT Exercise #3 by Jan Simbahon</p> 
</footer>
		</body>
	</html>
