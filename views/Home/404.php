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
		<h1 style="color: #99CC33;text-align: center;font-weight: 700;letter-spacing: 3px;margin-bottom: 20px;">¡OPS!</h1>
		<h4 style="text-align: center;letter-spacing: 4px;">PARECE QUE SUCEDIÓ UN ERROR</h4>
		<img src="img/error.png" alt="Not Found" style="width: 300px;display: block;margin:0px auto;margin-top:30px;margin-bottom: 30px;">
		<a href="/home" style="display: block;margin: 0px auto;text-align: center;color: #929496;margin-bottom: 20px;">Ir a la página principal.</a>
	</div>

</div>


<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>

</body>
</html>