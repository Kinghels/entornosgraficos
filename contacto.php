<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hotel Sur Patagonico - Neuquen</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<div class="container">
			<div class="masthead">
				<h3 class="text-muted">Hotel Sur Patagonico</h3>
				<ul class="nav nav-tabs nav-justified">
					<li><a href="home.php">Home</a></li>
					<li><a href="conocenos.php">Conocenos</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="quienessomos.php">Quienes somos</a></li>
					<li class="active"><a href="#">Contacto</a></li>
				</ul>
			</div>
			<article>
				<section class="container">
					<form class="form-horizontal" method="POST" action="contactoEmail.php">
						<div class="form-group">
							<label for="Name" class="control-label col-xs-2">Nombre:</label>
							<div class="col-xs-10">
								<input type="text" name="Name" class="form-control" placeholder="Nombre">
							</div>
						</div>
						<div class="form-group">
							<label for="Email" class="control-label col-xs-2">Email:</label>
							<div class="col-xs-10">
								<input type="email" name="Email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="Subject" class="control-label col-xs-2">Asunto:</label>
							<div class="col-xs-10">
								<input type="text" name="Subject" class="form-control" placeholder="Asunto">
							</div>
						</div>
						<div class="form-group">
							<label for="Message" class="control-label col-xs-2">Mensaje:</label>
							<div class="col-xs-10">
								<textarea name="Message" id="" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-10">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</form>
				</section>
			</article>
			<footer>
				<h6>Copyright 2016</h6>
			</footer>
		</div>
	</body>
</html>