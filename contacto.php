<?php 
	if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';


        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';


        }else if($_POST['empresa'] == ''){
            $errors[3] = '<span class="error">Ingrese la empresa</span>';


        }else if($_POST['telefono'] == ''){
            $errors[4] = '<span class="error">Ingrese un teléfono</span>';


        }else if($_POST['cargo'] == ''){
            $errors[5] = '<span class="error">Ingrese su cargo</span>';

        }else if($_POST['mensaje'] == ''){
            $errors[6] = '<span class="error">Ingrese su mensaje</span>';

        }else{
            $dest = "fredy@suwwweb.com"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $empresa = $_POST['empresa'];
            $telefono = $_POST['telefono']; //Asunto
            $cargo = $_POST['cargo'];
            $mensaje = $_POST['mensaje'];
            $cuerpo = "Nombre: $nombre <br/> Email: $email <br/> Empresa: $empresa <br/> Teléfono: $telefono <br/> Cargo: $cargo <br/> Mensaje: $mensaje"; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

            if(mail($dest,"Contacto página web",$cuerpo,$headers)){
                $result = '<div class="result_ok">Hemos recibido tú mensaje.</div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['empresa'] = '';
                $_POST['telefono'] = '';
                $_POST['cargo'] = '';
                $_POST['mensaje'] = '';

            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Basic Page Needs
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <meta charset="utf-8">
	  <title>Your page title here :)</title>
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <!-- Mobile Specific Metas
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- FONT
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

	  <!-- CSS
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <link rel="stylesheet" href="assets/css/all-css.css">

	  <!-- Favicon
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>
<body>
	<div class="form__contact">
		<div class="center header__form">
			<h3>COTIZAR</h3>
		</div>
		<div class="line__header__form"><hr></div>

		<p class="container center">Dejenos sus datos, en breve nos pondremos en contácto.</p>
		<hr>
		
		<div class="container center">
			<form action="" method="post">
			<?php if(isset($result)) { echo $result; } ?>
				<div><input type="text" name="nombre" class="nombre twelve columns" placeholder="Nombre y apellidos" value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>"><?php if(isset($errors)){ echo $errors[1]; } ?></div>

				<div class="row">
					<div class="six columns">
						<div><input type="email" name="email" class="email twelve columns" placeholder="Correo electrónico" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"><?php if(isset($errors)){ echo $errors[2]; } ?></div>

						<div><input type="text" name="empresa" class="empresa twelve columns" placeholder="Empresa" value="<?php if(isset($_POST['empresa'])){ echo $_POST['empresa']; } ?>"><?php if(isset($errors)){ echo $errors[3]; } ?></div>
					</div>
					<div class="six columns">
						<div><input type="tel" name="telefono" class="telefono twelve columns" placeholder="Teléfono" value="<?php if(isset($_POST['telefono'])){ echo $_POST['telefono']; } ?>"><?php if(isset($errors)){ echo $errors[4]; } ?></div>

						<div><input type="text" name="cargo" class="cargo twelve columns" placeholder="Cargo en la empresa" value="<?php if(isset($_POST['cargo'])){ echo $_POST['cargo']; } ?>"><?php if(isset($errors)){ echo $errors[5]; } ?></div>
					</div>
				</div>

				<div><textarea name="mensaje" maxlength="300" class="mensaje twelve columns" placeholder="Mensaje" value="<?php if(isset($_POST['mensaje'])){ echo $_POST['mensaje']; } ?>"></textarea><?php if(isset($errors)){ echo $errors[6]; } ?></div>

				<div><input type="submit" name="boton" class="boton" value="Enviar"></div>
			</form>
		</div>
	</div>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
		// Formulario
		$(function() { 
		  var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
		  $(".boton").click(function(){  
		    $(".error").fadeOut().remove();
		    
		    if ($(".nombre").val() == "") {  
		      $(".nombre").focus().after('<span class="error">Ingrese su nombre</span>');  
		      return false;  
		    }  
		    
		    if ($(".email").val() == "" || !emailreg.test($(".email").val())) {
		      $(".email").focus().after('<span class="error">Ingrese un email correcto</span>');  
		      return false;  
		    }  
		    
		    if ($(".empresa").val() == "") {  
		      $(".empresa").focus().after('<span class="error">Ingrese una empresa</span>');  
		      return false;  
		    }  

		    if ($(".telefono").val() == "") {  
		      $(".telefono").focus().after('<span class="error">Ingrese un teléfono</span>');  
		      return false;  
		    }  
		    
		    if ($(".cargo").val() == "") {  
		      $(".cargo").focus().after('<span class="error">Ingrese su cargo</span>');   
		      return false;  
		    }  
		    
		    if ($(".mensaje").val() == "") {  
		      $(".mensaje").focus().after('<span class="error">Ingrese un mensaje</span>');   
		      return false;  
		    }  

		    });  
		    
		  $(".nombre, .empresa, .telefono, .cargo, .mensaje").bind('blur keyup', function(){  
		    if ($(this).val() != "") {        
		      $('.error').fadeOut();
		      return false;  
		    }  
		  }); 
		  
		  $(".email").bind('blur keyup', function(){  
		    if ($(".email").val() != "" && emailreg.test($(".email").val())) {  
		      $('.error').fadeOut();  
		      return false;  
		    }  
		  });

		});
	</script>
</body>
</html>