<!DOCTYPE html>
<html>
<head>
	<title>COBA</title>

	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	<style type="text/css">
		.login {
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		    transition: 0.3s;
		    margin-top: 25%;
		    margin-left: 10%;
		    width: 80%;
		    padding: 25px 15px 15px 15px;

		}

		.login:hover {
		    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.container-login {
		    padding: 2px 16px;
		}

		.text-center {
			margin-bottom: 10px;
		}
	</style>

</head>
<body style="background: none;">

	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="login">
				<div class="container-login">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="text-center">User Login</h1>
						</div>
					</div>

					<form class="form-horizontal">
						<div class="form-group">
							<!-- <label for="username" class="col-sm-2 control-label">Email</label> -->
							<div class="col-sm-12">
								<input type="text" class="form-control" id="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<!-- <label for="password" class="col-sm-2 control-label">Password</label> -->
							<div class="col-sm-12">
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="checkbox pull-left">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
								<a class="btn btn-primary pull-right" href="beranda" role="button">Sign in</a>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>