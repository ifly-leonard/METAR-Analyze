
<?php
	include ('server.php');

	if (!isset($_SESSION['username'])) {
		$_SESSION['error'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>METAR Decoder</title>
	</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">METAR Decoder</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<?php  if (isset($_SESSION['username'])) : ?>
			<span id="clock" class="p2 text-left"></span>
				<span class="p-2 text-dark"><i class="fas fa-user-circle"></i> Welcome, <strong><?php echo $_SESSION['username']; ?></strong></span>
        <a class="btn btn-danger btn-sm" href="index.php?logout='1'">Logout</a>
			<?php endif ?>

      </nav>
	</div>

	<form class="form" action="decode.php" method="GET">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="container">
			<div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow" >
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">What is METAR?</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">METAR</small></h1>
            is a format for reporting weather information. A METAR weather report is predominantly used by pilots in fulfillment of a part of a pre-flight weather briefing, and by meteorologists, who use aggregated METAR information to assist in weather forecasting.
            <br><br>
						<a href="https://en.wikipedia.org/wiki/METAR" target="_blank"  class="btn btn-lg btn-block btn-outline-primary">Know more <small><i class="fab fa-wikipedia-w"></i>ikipedia <i class="fas fa-external-link-alt"></i></small></a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">How to use this site?</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">"The decoding"</small></h1>
            This site fetches and decodes METAR data into a human readable format. Enter the 4 lettered ICAO code of your desired location. The list of available ICAO codes are given below. Press the "Get Details" button to initiate the decoding.
            <br><br>
						<a href="#form" class="btn btn-lg btn-block btn-outline-primary">Get started <i class="fas fa-thumbs-up"></i></a>
          </div>
        </div>
      </div>
		</div>
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

			<form class="form" action="decode.php" method="GET">
			<div class="col-md-12 mb-3">
							<label for="icao" id="form" >Choose the airport you want to fetch the details from</label>
							<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
							    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
							  </head>

								<?php


								?>
							  <div class="container">
									<select id="icao" name="icao" class="selectpicker" data-show-subtext="true" data-live-search="true">
										<?php
										$airports = "SELECT * FROM airports";
										$result = mysqli_query($db, $airports);
										$resultos = mysqli_fetch_assoc($result);
											if (mysqli_num_rows($result) > 0) {
											while($row = mysqli_fetch_assoc($result)) {
												echo '<option value="'.$row["icao"].'" data-tokens="'.$row["name"].' '.$row["icao"].' '.$row["city"].'">'.$row["name"].' - '.$row["city"].'  ('.$row['icao'].') </option>';
												}
											}
										?>
									</select>
							  </div>
							  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
							  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
							  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>


						</div>

						<button type="submit" class="btn btn-info btn-md">Get details</button>


					</form>
		</div>


</div>



<div class="container">


<footer class="pt-4 my-md-5 pt-md-5 border-top">
	<div class="row">
		<div class="col-12 col-md">
			<small class="d-block mb-3 text-muted">METAR decoding site &bull; Created by Manivannan G.</small>
		</div>
	</div>
</footer>
</div>


</body>
</html>
