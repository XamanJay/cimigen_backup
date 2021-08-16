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
        <div class="sectionParto" id="ultrasonidoBack">
            <div class="row" style="margin: 0px;">
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <h1>Ultrasonido Especializado 4D</h1>
                    <img src="img/ultrasonido-especializado/logo.png" alt="Cimigen" class="img-responsive">
                    <h2>Precios</h2>
                    <h1 style="margin-bottom: 10px;">Ultrasonido Estructural $1,500 <small>pesos</small></h1>
                    <h2 style="margin-bottom: 10px;margin-top: 10px;">El segundo será completamente gratis.</h2>
                    <h4 style="margin-bottom: 40px;">Promoción válida hasta Diciembre 2018</h4>
                    <h3>Consulta los detalles de nuestros servicios y solicita asesoría de nuestros profesionales para resolver tus dudas y comentarios llamanos al: 55  7652 1200</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <form action="/contacto" method="POST" id="contactParto">

                        <label for="nombre">Nombre:</label><label for="nombre" class="error"></label>
                        <input type="text" name="nombre" id="nombre">
                        <input class="form-control" type="hidden" name="titulo" id="titulo" value="Ultrasonido Especializado">
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
                            <option value="Paquete de Maternidad">Paquete de Maternidad</option>
                            <option value="Parto Humanizado">Parto Humanizado</option>
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
                        <div class="clearfix"></div>                    
                    </form>
                </div>
            </div>
            
        </div>

		<div class="row" id="partoInfo">
			<img src="img/parto-humanizado/line.png" alt="" class="img-responsive">
            <img src="img/ultrasonido-especializado/banner.png" alt="Ultrasonido Especializado" class="img-responsive" style="margin-top: 40px;">
            <p>Contamos  con uno de los equipos más avanzados que en combinación con la experiencia y capacidad de un Médico Subespecialista en Medicina Materno Fetal, identifica factores de riesgo y te da la información más completa sobre las condiciones de tu embarazo, algo mucho más completo y seguro de un ultrasonido convencional.Pregunta por los ultrasonidos que debes realizar durante tu embarazo:</p>
            <ul>
                <li><img src="img/atencion/arrow-colon.png" alt="Arrow">Tamizaje de cromosomopatías (Síndrome de Down) 11-13.6 semanas.</li>
                <li><img src="img/atencion/arrow-colon.png" alt="Arrow">Estructural (18-24 semanas).</li>
                <li><img src="img/atencion/arrow-colon.png" alt="Arrow">Crecimiento y bienestar fetal (tercer trimestre).</li>
                <li><img src="img/atencion/arrow-colon.png" alt="Arrow">Ultrasonido 4D.</li>
            </ul>
		</div>		
	</div>


</div>

<?php include "views/partialViews/_footer.php"; ?>
<?php include "views/partialViews/_scripts.php"; ?>
<script type="text/javascript">
	
/* Restricciones contacto */
$("#contactParto").validate({

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
                //console.log(data);
                var object = JSON.parse(data);
                $(':input[type="submit"]').css("display","block");
                $("#loading").css("display","none");
                if(object.type == "success") {
                    $(form)[0].reset();
                    grecaptcha.reset();
                    window.location.href = "/gracias_ultrasonido";
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