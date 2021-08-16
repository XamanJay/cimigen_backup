<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "views/partialViews/_styles.php"; ?>
</head>
<body>
<?php include "views/partialViews/_navbar.php"; ?>

<div class="row homeView">

	<?php include "views/partialViews/sideMenu.php"; ?>

	<div class="col-sm-10 col-md-10 noPad" style="z-index: 10;">
		<a href="#atencion" id="topPage"><i class="fa fa-arrow-circle-up fa-3x"></i></a>
		<div class="sectionEventos">
			<h3>Conoce nuestro calendario de activiades y solicita el</h3>
			<h3>acceso a nuestros talleres con anticipación:</h3>
			<h1>Eventos</h1>
			<img src="img/eventos/logo.png" alt="Cimigen" class="img-responsive">
		</div>
		<img src="img/eventos/calendario.png" alt="relleno" class="img-responsive hidden-xs" style="margin:0px auto;">
		<img src="img/eventos/calendarioMob.png" alt="relleno" class="img-responsive visible-xs" style="margin:0px auto;">
		<img src="img/test.png" alt="relleno" class="img-responsive visible-xs" style="margin:0px auto;">

	</div>

</div>


<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>
</body>
</html>