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
		<div class="owl-carousel owl-theme hidden-xs">
			<div class="item"><a href="#" data-toggle="modal" data-target="#diplomadoPop"><img src="img/home_slider/slide0.png" alt="Diplomado"></a></div>
		    <!--<div class="item"><img src="img/home_slider/slide1.png" alt="Slide Home"></div>-->
		    <div class="item"><img src="img/home_slider/slide2.png" alt="Slide Home"></div>
		    <div class="item"><img src="img/home_slider/slide3.png" alt="Slide Home"></div>
		    <!--<div class="item"><img src="img/home_slider/slide4.png" alt="Slide Home"></div>-->
		</div>

		<div class="owl-carousel owl-theme visible-xs">
			<div class="item"><a href="#" data-toggle="modal" data-target="#diplomadoPop"><img src="img/home_slider/mobile/slide0.png" alt="Diplomado"></a></div>
		    <!--<div class="item"><img src="img/home_slider/mobile/slide1.png" alt="Slide Home"></div>-->
		    <div class="item"><img src="img/home_slider/mobile/slide2.png" alt="Slide Home"></div>
		    <div class="item"><img src="img/home_slider/mobile/slide3.png" alt="Slide Home"></div>
		    <!--<div class="item"><img src="img/home_slider/mobile/slide4.png" alt="Slide Home"></div>-->
		</div>

		<div class="row" style="margin: 0px;" id="promoHome">
			<div class="col-xs-12 col-sm-2 col-md-2 customPadd">
				<a href="/parto_humanizado" target="_blank"><img src="img/home/parto.png" alt="Parto Humanizado" class="img-responsive" style="margin-bottom: 5px;"></a>
				<a href="/pediatria" target="_blank"><img src="img/home/pediatria.png" alt="Parto Humanizado" class="img-responsive"></a>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 customPadd">
				<a href="/paquetes" target="_blank"><img src="img/home/paquete.png" alt="Paquete Parto" class="img-responsive"></a>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 customPadd">
				<img src="img/home/plan.png" alt="Paquete Parto" class="img-responsive">
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 customPadd">
				<a href="/grupo_lactancia" target="_blank"><img src="img/home/invitacion.png" alt="Paquete Parto" class="img-responsive"></a>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 customPadd">
				<a href="/cimigen" target="_blank"><img src="img/home/cimigen.png" alt="Paquete Parto" class="img-responsive" style="margin-bottom: 5px;"></a>
				<a href="/eventos" target="_blank"><img src="img/home/taller.png" alt="Paquete Parto" class="img-responsive"></a>
			</div>
		</div>
		<img src="img/home/home.png" alt="" class="img-responsive hidden-xs" style="margin:0px auto;">
		<img src="img/home/home_mobile.png" alt="" class="img-responsive visible-xs" style="margin:0px auto;">
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="diplomadoPop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 0px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/home_slider/popup.png" alt="Diplomado" class="img-responsive">
      </div>
    </div>
  </div>
</div>

<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>

<script>
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:1,
	    loop:true,
	    margin:10,
	    autoplay:true,
	    autoplayTimeout:5000,
	    autoplayHoverPause:true
	});
	$('.play').on('click',function(){
	    owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('stop.owl.autoplay')
	})

</script>

</body>
</html>