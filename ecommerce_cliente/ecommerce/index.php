<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tienda Virtual Fisitex</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		body{
			display:flex;
			min-height: 100vh;
			flex-direction:column;
			background-image: url("img/fondo.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>
<body class="bg-light" >
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<a href="#" class="navbar-brand mx-auto">Tienda Virtual Fisitex</a>
	</nav>

	<div class="container mx-auto" style="margin-top: 15%; width: 40rem;">
		<div class="well">
			<h1 class="text-white" >Inicio de sesión</h1>
			<div class="form-group">
				<input type="email" id="correo" class="form-control form-control-lg" placeholder="Correo">
			</div>
			<div class="form-group" >
				<input type="password" id="pass" class="form-control form-control-lg" placeholder="Contraseña" >
			</div>
			<button type="submit" class="btn btn-primary" id="login">ENTRAR</button>
		</div>
	</div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.4.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.4.0/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script src="js/app.js"></script>
</body>
</html>