<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "views/partialViews/_styles.php"; ?>
</head>
<body>
<?php include "views/partialViews/_navbar.php"; ?>

<div class="row homeView">
	
	<?php include "views/partialViews/sideMenu.php"; ?>
	
	<div class=" col-xs-12 col-sm-10 col-md-10 noPad" style="z-index: 10;">
        <a href="#atencion" id="topPage"><i class="fa fa-arrow-circle-up fa-3x"></i></a>
		<div class="row" style="margin: 0px;">
            <div class="sectionContacto">    
                <h1>Contacto</h1>
                <img src="img/contacto/logo.png" alt="Contacto" class="img-responsive">
                <h3>Recuerda que estamos para acompañarte y brindarte el</h3>
                <h3>cuidado y atención durante el proceso de embarazo y el</h3>
                <h3>nacimiento de tu bebé.</h3>
            </div>
			<div class="col-xs-12 col-sm-8 col-md-8" id="addressContact">
				<h4>Asociación Hispano Mexicana I.A.P</h4>
				<h4>Av. Tláhuac #1004</h4>
				<h4>Col. Lomas Estrella Iztapalapa,</h4>
				<h4 style="margin-bottom: 60px;">CDMX, CP. 09890</h4>

				<h4>Conmutador: 55 7652 1200 y 55 5656 5778</h4>
				<h4>Programación de citas: 55 7652 1241</h4>
				<h4>¡Envíanos un mensaje!</h4>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<ul id="redesContact">
					<li><a href="https://twitter.com/cimigenoficial" target="_blank"><img src="img/contacto/twitter.png" alt="" class="equal"></a></li>
					<li><a href="https://www.youtube.com/channel/UCNmYHIryzTDrFosjBPOTA4A" target="_blank"><img src="img/contacto/youtube.png" alt="" class="bigger"></a></li>
					<li><a href="https://www.facebook.com/cimigenoficial/" target="_blank"><img src="img/contacto/facebook.png" alt="" class="equal"></a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<img src="img/contacto/dashed.png" alt="Separador" style="width: 70%;margin:0px auto;display: block;margin-top:40px;">
				<img src="img/contacto/leyenda.png" alt="Leyenda" style="margin: 0px auto;display: block;margin-top: 40px;width: 500px;">
			</div>
		</div>
		<div class="row" id="boxC">
			<form action="/contacto" method="POST" id="contactForm" class="hidden-xs">
				
                    <div class="row" style="margin:0px;">

                            <label for="nombre">Nombre:</label><label for="nombre" class="error"></label>
                            <input type="text" name="nombre" id="nombre">
                            <input class="form-control" type="hidden" name="titulo" value="Contacto">
                            <label for="telefono">Telefono:</label><label for="telefono" class="error"></label>
                            <input type="number" name="telefono" id="telefono">

                            <label for="email">Email:</label><label for="email" class="error"></label>
                            <input type="email" name="email" id="email">

                            <label for="ciudad">Ciudad:</label><label for="ciudad" class="error"></label>
                            <select name="ciudad" id="ciudad" class="form-control" style="margin-bottom: 20px;">
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Durango">Durango</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Mexico">México</option>
                                <option value="Michoacan">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo Leon">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Queretaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosi">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatan">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>

                            <label for="interes">Interesado en:</label><label for="interes" class="error"></label>
                            <select name="interes" id="interes" class="form-control" style="margin-bottom: 20px;">
                                <option value="Consulta Prenatal">Consulta Prenatal</option>
                                <option value="Consulta Prenatal primera vez">Consulta Prenatal primera vez</option>
                                <option value="Ultrasonido estructural">Ultrasonido estructural</option>
                                <option value="Consulta ginecológico">Consulta ginecológico</option>
                                <option value="Nutrición">Nutrición</option>
                                <option value="Psicología">Psicología</option>
                                <option value="Odontología">Odontología</option>
                                <option value="Colposcopía">Colposcopía</option>
                                <option value="Prevención reproductiva">Prevención reproductiva</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Registro cardiotocoggráfico">Registro cardiotocoggráfico</option>
                                <option value="Psicoprofilaxis">Psicoprofilaxis</option>
                                <option value="Estimulación temprana">Estimulación temprana</option>
                                <option value="Neurodesarrollo">Neurodesarrollo</option>
                                <option value="Atencion de parto humanizado">Atencion de parto humanizado</option>
                                <option value="Paquete maternidad">Paquete maternidad</option>
                                <option value="Estudios de laboratorio">Estudios de laboratorio</option>
                                <option value="Consultoria de lactancia materna">Consultoria de lactancia materna</option>
                                <option value="Diplomado Educadora en psicoprofilaxis">Diplomado Educadora en psicoprofilaxis</option>
                                <option value="Diplomada Lactancia Materna">Diplomada Lactancia Materna</option>
                                <option value="Especialidad Enfermería Perinatal">Especialidad Enfermería Perinatal</option>
                                <option value="Curso reanimación cardiopulmonar neonatal">Curso reanimación cardiopulmonar neonatal</option>
                                <option value="Curso ayudando al neonato a respirar PARAB">Curso ayudando al neonato a respirar PARAB</option>
                                <option value="Curso Educación basada en competencia">Curso Educación basada en competencia</option>
                                <option value="Curso atención de parto centrado en la persona y vigilancia prenatal">Curso atención de parto centrado en la persona y vigilancia prenatal</option>
                                <option value="Curso emergencias obstétricas">Curso emergencias obstétricas</option>
                                <option value="Otra">Otra</option>
                            </select>

                            <label for="mensaje">Mensaje:</label><label for="mensaje" class="error"></label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10" style="resize: none;margin-bottom: 0px;"></textarea>

                            
                            <div class="g-recaptcha" data-sitekey="6LfcVGwUAAAAAL1yNxZZ6LjZMCtGiwQAhTijkM7U" style="margin-top: 20px;"></div>
                            <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">

                            <input type="submit" value="Enviar">
                            <div id="loading"><img src="img/loading.gif" alt="Loading..." style="width: 50px;float: right;"></div>
                            <span class="message" id="response"></span>

                    </div>	
				
				<div class="clearfix"></div>					
			</form>
		</div>	
		<div class="row" id="boxM">
			<form action="/contacto" method="POST" id="contactMobile" class="visible-xs">
				<div class="col-xs-12">
					<label class="label-form" for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
					<input class="form-control" type="hidden" name="titulo" value="Contacto">
					<label class="label-form" for="telefono">Telefono:</label>
					<input class="form-control" type="number" name="telefono" id="telefono">
					<label class="label-form" for="email">Email:</label>
					<input class="form-control" type="email" name="email" id="email">
                    <label for="ciudad" class="label-form">Ciudad:</label>
                    <select name="ciudad" id="ciudad" class="form-control" style="margin-bottom: 20px;">
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Durango">Durango</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Mexico">México</option>
                        <option value="Michoacan">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo Leon">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Queretaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosi">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatan">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                    <label for="interes" class="label-form">Interesado en:</label>
                    <select name="interes" id="interes" class="form-control" style="margin-bottom: 20px;">
                        <option value="Consulta Prenatal">Consulta Prenatal</option>
                        <option value="Consulta Prenatal primera vez">Consulta Prenatal primera vez</option>
                        <option value="Ultrasonido estructural">Ultrasonido estructural</option>
                        <option value="Consulta ginecológico">Consulta ginecológico</option>
                        <option value="Nutrición">Nutrición</option>
                        <option value="Psicología">Psicología</option>
                        <option value="Odontología">Odontología</option>
                        <option value="Colposcopía">Colposcopía</option>
                        <option value="Prevención reproductiva">Prevención reproductiva</option>
                        <option value="Pediatría">Pediatría</option>
                        <option value="Registro cardiotocoggráfico">Registro cardiotocoggráfico</option>
                        <option value="Psicoprofilaxis">Psicoprofilaxis</option>
                        <option value="Estimulación temprana">Estimulación temprana</option>
                        <option value="Neurodesarrollo">Neurodesarrollo</option>
                        <option value="Atencion de parto humanizado">Atencion de parto humanizado</option>
                        <option value="Paquete maternidad">Paquete maternidad</option>
                        <option value="Estudios de laboratorio">Estudios de laboratorio</option>
                        <option value="Consultoria de lactancia materna">Consultoria de lactancia materna</option>
                        <option value="Diplomado Educadora en psicoprofilaxis">Diplomado Educadora en psicoprofilaxis</option>
                        <option value="Diplomada Lactancia Materna">Diplomada Lactancia Materna</option>
                        <option value="Especialidad Enfermería Perinatal">Especialidad Enfermería Perinatal</option>
                        <option value="Curso reanimación cardiopulmonar neonatal">Curso reanimación cardiopulmonar neonatal</option>
                        <option value="Curso ayudando al neonato a respirar PARAB">Curso ayudando al neonato a respirar PARAB</option>
                        <option value="Curso Educación basada en competencia">Curso Educación basada en competencia</option>
                        <option value="Curso atención de parto centrado en la persona y vigilancia prenatal">Curso atención de parto centrado en la persona y vigilancia prenatal</option>
                        <option value="Curso emergencias obstétricas">Curso emergencias obstétricas</option>
                        <option value="Otra">Otra</option>
                    </select>
					<label class="label-form" for="mensaje">Mensaje:</label>	
					<textarea name="mensaje" id="mensaje" cols="30" rows="10" style="resize: none;margin-bottom: 0px;"></textarea>
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
$("#contactForm").validate({
	ignore: ".ignore",
	rules: {
            nombre: { required:true, minlength: 3},
            telefono: { required:true, minlength: 3},   
            email: { required:true, minlength: 3},   
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
        telefono: "Proporcione un numero",
        email: "ingrese un email",
        mensaje: "Escriba un mensaje.",
        hiddenRecaptcha: "Verifica si eres humano."
    },
    submitHandler: function(form){
    	var captcha =grecaptcha.getResponse();
    	//console.log(captcha);
        $.ajax({
            type: form.method,
            url: form.action,
            data: $(form).serialize(),
            beforeSend: function(){
				$(':input[type="submit"]').css("display","none");
				$("#loading").css("display","block");
			},
            success: function(data){
            	console.log(data);
            	var object = JSON.parse(data);
            	$(':input[type="submit"]').css("display","block");
            	$("#loading").css("display","none");
            	if(object.type == "success") {
            		$(form)[0].reset();
            		grecaptcha.reset();
            		window.location.href = "/gracias_contacto";
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
$("#contactMobile").validate({

	rules: {
            nombre: { required:true, minlength: 3},
            telefono: { required:true, minlength: 3},   
            email: { required:true, minlength: 3},   
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
        telefono: "Proporcione un numero",
        email: "Ingrese un email",
        mensaje: "Escriba un mensaje.",
        hiddenRecaptcha: "Verifica si eres humano."
    },
    submitHandler: function(form){
        $.ajax({
            type: form.method,
            url: form.action,
            data: $(form).serialize(),
            beforeSend: function(){
                $(':input[type="submit"]').css("display","none");
                $("#loading").css("display","block");
            },
            success: function(data){
                console.log(data);
                var object = JSON.parse(data);
                $(':input[type="submit"]').css("display","block");
                $("#loading").css("display","none");
                if(object.type == "success") {
                    $(form)[0].reset();
                    grecaptcha.reset();
                    window.location.href = "/gracias_contacto";
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