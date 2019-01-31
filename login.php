<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>METAR Decoder</title>
	</head>
<body class="text-center">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">METAR Decoder</h5>
	</div>
<div class="container">
		<form class="form-horizontal" method="GET" action="login.php">
				<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<br><br><br>
								<h2>Welcome, Login to continue</h2>
								<hr>
								<br><br>
						</div>
				</div>
				<?php include ('errors.php'); ?>
				<div class="row">
						<div class="col-md-3 field-label-responsive">
								<label for="name">Username</label>
						</div>
						<div class="col-md-6">
								<div class="form-group">
										<div class="input-group mb-2 mr-sm-2 mb-sm-0">
											<input type="text" name="username" class="form-control" id="name"
														 placeholder="Username" required autofocus>
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-3 field-label-responsive">
								<label for="password">Password</label>
						</div>
						<div class="col-md-6">
								<div class="form-group has-danger">
										<div class="input-group mb-2 mr-sm-2 mb-sm-0">
											<input type="password" name="password" class="form-control" id="password"
														 placeholder="password" required>
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
								<input type="hidden" name="action" value="login" />
								<button type="submit" class="btn btn-info">Login</button>
								</form>
								<a href="register.php" class="btn btn-warning">Register</a>
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

</div>



</body>

	</html>
