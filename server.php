<?php
	// connect to database
	// The update the database name.

	#SEQUENCE = mysqli_connect(server, user, password, database)
	$db = mysqli_connect('localhost', 'root', '', 'test');

	session_start();
	error_reporting(0);
	?>

	<!--  Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<!--  fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!--  jQuery -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/	X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<!-- Chart.js -->


	<script>
	function GetClock(){
	var tzOffset = 0; //UTC +0

	var d=new Date();
	var dx=d.toGMTString();
	dx=dx.substr(0,dx.length -3);
	d.setTime(Date.parse(dx))
	d.setHours(d.getHours()+tzOffset);
	var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
	if(nmin<=9) nmin="0"+nmin
	if(nsec<=9) nsec="0"+nsec;

	document.getElementById('clock').innerHTML=""+nhour+":"+nmin+":"+nsec+" z";
	}

	window.onload=function(){
	GetClock();
	setInterval(GetClock,1000);
	}
	</script>


	<?php
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";


	if(isset($_GET['action'])) {
		// REGISTER USER
		if ($_GET['action'] == 'register') {
			// receive all input values from the form
			$username = mysqli_real_escape_string($db, $_GET['username']);
			$email = mysqli_real_escape_string($db, $_GET['email']);
			$password = mysqli_real_escape_string($db, $_GET['password']);

			// form validation: ensure that the form is correctly filled
			if (empty($username)) { array_push($errors, "Username is required"); }
			if (empty($email)) { array_push($errors, "Email is required"); }
			if (empty($password)) { array_push($errors, "Password is required"); }

			$check = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
			$check_results = mysqli_query($db, $check);
			$check_results = mysqli_num_rows($check_results);

			if(count($check_results) > 0) {
				array_push($errors, "Username (or) Email ID is already in use! Try loggin in!");
				$page = 'register.php';
			}
			// register user if there are no errors in the form
			if (count($errors) == 0) {
				$password = md5($password);//encrypt the password before saving in the database
				$query = "INSERT INTO users (username, email, password)
							VALUES('$username', '$email', '$password')";
				mysqli_query($db, $query);

				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}

		}

		// ...

		// LOGIN USER
		if ($_GET['action'] == 'login') {
			$username = mysqli_real_escape_string($db, $_GET['username']);
			$password = mysqli_real_escape_string($db, $_GET['password']);

			if (empty($username)) {
				array_push($errors, "Username is required");
			}
			if (empty($password)) {
				array_push($errors, "Password is required");
			}

			if (count($errors) == 0) {
				$password = md5($password);
				$query = "SELECT * FROM users WHERE email = '$username' AND password='$password'";
				$results = mysqli_query($db, $query);

				$acc_details = "SELECT * FROM users WHERE email = '$username'";
				$acc = mysqli_query($db, $acc_details);
				$acc = mysqli_fetch_assoc($acc);
				if (mysqli_num_rows($results) == 1) {
					$_SESSION['username'] = $acc['username'];
					$_SESSION['success'] = "You are now logged in";
					header('location: index.php');
				}else {
					array_push($errors, "Incorrect E-mail ID (or) password, please try again.");
					$page = 'login.php';
				}
			}
		}

	}
?>
