<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tienda Virtual Fisitex</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
		body{
			display:flex;
			min-height: 100vh;
			flex-direction:column;
			background-image: url("img/fondo1.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>
<body class="bg-light" >
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<a href="#" class="navbar-brand mx-auto" style="color:#FFFFFF">Tienda Virtual Fisitex</a>
	</nav>

	<div class="container mx-auto" style="margin-top: 15%; width: 40rem;">
		<div class="well">
			<h1 class="text-dark" >Inicio de sesión</h1>
			
			<div class="form-group">
					<button id="btn-Google" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google"></i> Google</button>
			</div>
			<div class="form-group">
				<button id="btn-Facebook" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Facebook</button>
			</div>
			<div class="form-group">
				<button id="btn-Twitter" class="btn btn-info btn-lg btn-block"><i class="fa fa-twitter"></i> Twitter</button>
			</div>

		</div>
	</div>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script src="https://www.gstatic.com/firebasejs/7.4.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.4.0/firebase-auth.js"></script>
<script src="js/app.js"></script>

</body>
</html>