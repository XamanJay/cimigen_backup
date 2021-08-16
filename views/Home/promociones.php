<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "views/partialViews/_styles.php"; ?>
</head>
<body>
<?php include "views/partialViews/_navbar.php"; ?>

<div class="row" style="margin: 0px;margin-top: 120px;">

	<?php include "views/partialViews/sideMenu.php"; ?>

	<div class="col-sm-10 col-md-10 noPad" style="z-index: 10;">
		<a href="#atencion" id="topPage"><i class="fa fa-arrow-circle-up fa-3x"></i></a>
		<div class="row" id="promoBox">
			<div class="col-xs-12 col-sm-12 col-md-12 hidden-xs"><img src="img/promociones/promo1.png" alt="" class="img-responsive"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 hidden-xs"><img src="img/promociones/promo2.png" alt="" class="img-responsive"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 hidden-xs"><img src="img/promociones/promo3.png" alt="" class="img-responsive"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 hidden-xs"><img src="img/promociones/promo4.png" alt="" class="img-responsive"></div>

			<div class="col-xs-12 col-sm-12 col-md-12 visible-xs"><img src="img/promociones/promo1-mob.png" alt="" class="img-responsive"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 visible-xs"><img src="img/promociones/promo2-mob.png" alt="" class="img-responsive"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 visible-xs"><img src="img/promociones/promo3-mob.png" alt="" class="img-responsive"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 visible-xs"><img src="img/promociones/promo4-mob.png" alt="" class="img-responsive"></div>
		</div>
	</div>

</div>

<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>

<script type="text/javascript">
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