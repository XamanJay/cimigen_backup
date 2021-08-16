<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "views/partialViews/_styles.php"; ?>
</head>
<body>
<?php include "views/partialViews/_navbar.php"; ?>

<div class="row cimiView">
	
	<?php include "views/partialViews/sideMenu.php"; ?>
	
	<div class="col-sm-10 col-md-10 noPad" id="cimigen" style="z-index: 10;">
		<a href="#cimigen" id="topPage"><i class="fa fa-arrow-circle-up fa-3x" id="arrow"></i></a>
		<div class="sectionTittle">
			<h2>Bienvenido a nuestro hospital</h2>
			<img src="img/cimigen/cimigen.png" alt="Cimigen" class="img-responsive letterCimi">
			<h2>Centro de Investigación Materno Infantil del Grupo de Estudios al Nacimiento</h2>
			<img src="img/cimigen/logo.png" alt="Cimigen" class="img-responsive">

		</div>
		<div class="row" style="margin: 0px;" id="cimiVideo">
			
			<video src="video/desktop.mp4" controls id="videoCimi" class="hidden-xs">
				  Tu navegador no implementa el elemento <code>video</code>.
			</video>

			<video src="video/mov.mov" controls id="videoMob"  class="visible-xs">
				  Tu navegador no implementa el elemento <code>video</code>.
			</video>
		</div>
		
		<div class="row valores" style="margin:0px;">
			<div class="col-sm-3 col-md-3 customPadd hidden-xs customGrid"></div>
			<div class="col-xs-6 col-sm-3 col-md-3 customPadd">
				<a href="#mision"><img class="img-responsive" src="img/cimigen/mision.png" alt="Nuestra Mision"></a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 customPadd">
				<a href="#vision"><img class="img-responsive" src="img/cimigen/vision.png" alt="Nuestra Vision"></a>
			</div>
			<div class="clearfix visible-xs"></div>
			<div class="col-xs-6 col-sm-3 col-md-3 customPadd">
				<a href="#objetivo"><img class="img-responsive" src="img/cimigen/objetivo.png" alt="Nuestro Objetivo"></a>
			</div>
			<div class="col-sm-3 col-md-3 customPadd hidden-xs customGrid"></div>
			<div class="clearfix hidden-xs"></div>
			<div class="col-sm-3 col-md-3 customPadd hidden-xs customGrid"></div>		
			<div class="col-xs-6 col-sm-3 col-md-3 customPadd">
				<a href="#impacto"><img class="img-responsive" src="img/cimigen/impacto.png" alt="Impacto"></a>
			</div>
			<div class="clearfix visible-xs"></div>
			<div class="col-xs-6 col-sm-3 col-md-3 customPadd">
				<a href="#valores"><img class="img-responsive" src="img/cimigen/valores.png" alt="Nuestros Valores"></a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 customPadd">
				<a href="#fundadores"><img class="img-responsive" src="img/cimigen/fundadores.png" alt="Fundadores"></a>
			</div>
			<div class="col-sm-3 col-md-3 customPadd hidden-xs customGrid"></div>
		</div>
		
		<div class="row valoresTexto">
			<div id="quote">
				<p>"POR EL DERECHO UNIVERSAL DE LOS NIÑOS Y LAS NIÑAS A NACER, CRECER Y DESARROLLARSE SANOS MEDIANTE UNA CRIANZA RESPONSABLE"</p>
			</div>
		</div>
			
			
		<div class="row valores valoresTexto" id="">
			<div class="wrapper" style="margin-bottom: 45px;">
				<div class="fundadoresT">
					<h2>COMPROMISOS CIMIGEN</h2>
				</div>
			</div>
			<!--div class="col-xs-12 col-sm-12 col-md-12 noPadd">
				<img class="img-responsive" src="img/cimigen/tittle.png" alt="tittle">
			</div-->
			<div class="col-xs-12 col-sm-12 col-md-12 noPadd" id="mision">
				<img class="img-responsive hidden-xs" src="img/cimigen/mision-text.png" alt="Nuestra Mision">
				<img class="img-responsive visible-xs" src="img/cimigen/mision-text-mob.png" alt="Nuestra Mision">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 noPadd" id="vision">
				<img class="img-responsive hidden-xs" src="img/cimigen/vision-text.png" alt="Nuestra Vision">
				<img class="img-responsive visible-xs" src="img/cimigen/vision-text-mob.png" alt="Nuestra Vision">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 noPadd" id="objetivo">
				<img class="img-responsive hidden-xs" src="img/cimigen/objetivo-text.png" alt="Nuestro Objetivo">
				<img class="img-responsive visible-xs" src="img/cimigen/objetivo-text-mob.png" alt="Nuestro Objetivo">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 noPadd" id="impacto">
				<img class="img-responsive hidden-xs" src="img/cimigen/impacto-text.png" alt="Nuestro Impacto">
				<img class="img-responsive visible-xs" src="img/cimigen/impacto-text-mob.png" alt="Nuestro Impacto">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 noPadd" id="valores">
				<img class="img-responsive hidden-xs" src="img/cimigen/valores-text.png" alt="Nuestros Valores">
				<img class="img-responsive visible-xs" src="img/cimigen/valores-text-mob.png" alt="Nuestros Valores">
				<img class="img-responsive visible-xs" src="img/cimigen/valores-text-mob2.png" alt="Nuestros Valores">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 noPadd" id="fundadores">
				<div class="wrapper">
					<div class="fundadoresT">
						<h2>NUESTROS FUNDADORES</h2>
					</div>
				</div>
				<img class="img-responsive hidden-xs" src="img/cimigen/fundadores-text.png" alt="Fundadores">
				<img class="img-responsive visible-xs" src="img/cimigen/fundadores-text-mob.png" alt="Fundadores">
				<p>En 1978 se funda el Grupo de Estudios al nacimiento A.C por el Lic. António López De Silanes y su esposa María Eugenia Espinosa Braniff junto con un grupo de médicos especialistas en Genética, Pediatría, Cirugía Pedíatrica y Gineco obstetras.</p>
				<p style="margin-bottom: 50px;">En 1987 se inició un programa operativo (Centro de Investigación Materno Infantil del Grupo de Nacimiento) conto con la asesoría del Dr. Eduardo Jurado García y la Dirección hasta 2013 del Dr. Carlos Vargas García, con la misión de lograr el nacimiento de niños sanos. Programa que ha funcionado con resultados altamente positivos en sus objetivos sustanciales.</p>
			</div>

		</div>
	</div>

</div>

<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>
<script type="text/javascript">
	$(function() {
	var topoffset = 120; //variable for menu height

	//Use smooth scrolling when clicking on navigation
	$('#cimigen a').click(function() {
		if (location.pathname.replace(/^\//,'') === 
		this.pathname.replace(/^\//,'') && 
		location.hostname === this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top-topoffset
				}, 1500);
				return false;
			} //target.length
		} //click function
	  }); //smooth scrolling

	});
</script>
</body>
</html>