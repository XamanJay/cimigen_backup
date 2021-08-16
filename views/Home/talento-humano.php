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
        <div class="sectionTalento">
            <h1>Talento Humano</h1>
            <img src="img/talento/logo.png" alt="Cimigen" class="img-responsive">
            <h3>Agradecemos tu interés en formar parte de nuestro equipo de trabajo. Somos un grupo hospitalario enfocado en brindar un servicio médico de calidad y con un toque de humanidad en México. Contamos con un equipo de profesionales y las instalaciones adecuadas donde podrás desarrollarte profesionalmente.</h3>
            <h3 style="text-align: center">¡Conoce nuestras vacantes, registra tus datos y envía tu currículum!</h3>
        </div>

		<div class="row" id="boxC">
			<form action="/talento" method="POST" id="contactHumano" class="hidden-xs" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="row" style="margin: 0px;">
                        <label for="nombre">Nombre:</label><label for="nombre" class="error"></label>
                        <input type="text" name="nombre" id="nombre">
                        <label for="correo">Correo:</label><label for="correo" class="error"></label>
                        <input type="email" name="correo" id="correo">
                        <label for="telefono">Teléfono:</label><label for="telefono" class="error"></label>
                        <input type="text" name="telefono" id="telefono">
                        <label for="asunto">Asunto:</label><label for="asunto" class="error"></label>
                        <input type="text" name="asunto" id="asunto" >
                        <label for="mensaje">Mensaje:</label><label for="mensaje" class="error"></label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" style="resize: none;margin-bottom: 15px;"></textarea>

                        <input type="file" name="curriculum" id="curriculum" style="margin-top: 40px;margin-bottom: 20px;">
                        <div class="g-recaptcha" data-sitekey="6LfcVGwUAAAAAL1yNxZZ6LjZMCtGiwQAhTijkM7U" style="margin-top: 20px;"></div>
                        <input type="hidden" class="hiddenRecaptcha required" name="Recaptcha" id="Recaptcha">
                        <input type="submit" value="Enviar">    
                    <div id="loading"><img src="img/loading.gif" alt="Loading..." style="width: 50px;float: right;"></div>
                    <span class="message" id="response"></span>		
				</div>
				<div class="clearfix"></div>					
			</form>
		</div>	
		<div class="row" id="boxM">
			<form action="/talento" method="POST" id="contactMobileT" class="visible-xs" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="col-xs-12">
					<label class="label-form" for="nombre">Nombre:</label>
					<input class="form-control" type="text" name="nombre" id="nombre">
					<label class="label-form" for="correo">Correo:</label>
					<input class="form-control" type="email" name="correo" id="correo">
					<label class="label-form" for="telefono">Télefono:</label>
					<input class="form-control" type="text" name="telefono" id="telefono">
					<label class="label-form" for="asunto">Asunto:</label>
					<input class="form-control" type="text" name="asunto" id="asunto">
					<label class="label-form" for="mensaje">Mensaje:</label>	
					<textarea name="mensaje" id="mensaje" cols="30" rows="10" style="resize: none;margin-bottom: 0px;"></textarea>
                    <input type="file" name="curriculum" id="curriculum" style="margin-top: 20px;">
                    <div class="g-recaptcha" data-sitekey="6LfcVGwUAAAAAL1yNxZZ6LjZMCtGiwQAhTijkM7U" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;margin-top: 10px;"></div>
                    <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
					<input class="form-control" type="submit" value="Enviar">
					<span class="message" id="responseM"></span>
				</div>
				<div class="clearfix"></div>					
			</form>
		</div>	
	</div>


</div>

<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>
<script type="text/javascript">
	
/* Restricciones contacto */
$("#contactHumano").validate({

	rules: {
            nombre: { required:true, minlength: 3},
            correo: { required:true, email: true},   
            telefono: { required:true, minlength: 3},   
            asunto: { required:true, minlength: 3},   
            mensaje: { required:true, minlength: 10},
            Recaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() == '') {
                        console.log(grecaptcha.getResponse());
                        return true;
                    } else {
                        console.log(grecaptcha.getResponse());
                        return false;
                    }
                }
            }
     },
    messages: {
        nombre : "Introduce un nombre válido.",
        correo: "Persona a quien contactar.",
        telefono: "Ingrese un telefono.",
        asunto: "Topico que desea hacernos saber.",
        mensaje: "Escriba un mensaje.",
        Recaptcha: "Verifica si eres humano."
    },
    submitHandler: function(form){
        var captcha =grecaptcha.getResponse();
        var form = $('#contactHumano')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);
        $.ajax({
            type: form.method,
            url: form.action,
            data: formData,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function(){
				$(':input[type="submit"]').css("display","none");
                $("#loading").css("display","block");
			},
            success: function(data){
            	var object = JSON.parse(data);
            	$(':input[type="submit"]').css("display","block");
                $("#loading").css("display","none");
            	if(object.type == "success") {
                    $(form)[0].reset();
                    grecaptcha.reset();
                    $("#response").html("");
                    $("#response").removeClass("bg-danger").addClass("bg-success").css("display","block");
                    $("#response").append(object.message);
                }
                else{
                    $("#response").html("");
                    $("#response").removeClass("bg-success").addClass("bg-danger").css("display","none");
                    $("#response").append(object.message);
                }
               	
            }
        });
    }
});

/* Restricciones contacto mobile */
$("#contactMobileT").validate({

	rules: {
            nombre: { required:true, minlength: 3},
            correo: { required:true, email: true},   
            telefono: { required:true, minlength: 3},   
            asunto: { required:true, minlength: 3},   
            mensaje: { required:true, minlength: 10},
            hiddenRecaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            } 
     },
    messages: {
        nombre : "Introduce un nombre válido.",
        correo: "Persona a quien contactar.",
        telefono: "Persona a quien contactar.",
        asunto: "Topico que desea hacernos saber.",
        mensaje: "Escriba un mensaje.",
        hiddenRecaptcha: "Verifica si eres humano."
    },
    submitHandler: function(form){
        var captcha =grecaptcha.getResponse();
        var form = $('#contactMobileT')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);
        $.ajax({
            type: form.method,
            url: form.action,
            data: formData,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function(){
                $(':input[type="submit"]').css("display","none");
                $("#loading").css("display","block");
            },
            success: function(data){
                //var object = JSON.parse(data);
                $(':input[type="submit"]').css("display","block");
                $("#loading").css("display","none");
                if(object.type == "success") {
                    $(form)[0].reset();
                    grecaptcha.reset();
                    $("#responseM").html("");
                    $("#responseM").removeClass("bg-danger").addClass("bg-success").css("display","block");
                    $("#responseM").append(object.message);
                }
                else{
                    $("#responseM").html("");
                    $("#responseM").removeClass("bg-success").addClass("bg-danger").css("display","none");
                    $("#responseM").append(object.message);
                }
                
            }
        });
    }
});
</script>
</body>
</html>