<?php
	if($_POST['submit']) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$consulta = $_POST['consulta'];
		$contactado = $_POST['contactado'];
		$asunto = "Consulta";
		$destino = "info@duamsistemas.com.ar, samanta@duamsistemas.com.ar";
		$fecha = date('Y-m-d H:i');
			
		// Mail de consulta
		$contenido  = "nombre: $nombre\n";
		$contenido .= "apellido: $apellido\n";
		$contenido .= "e-mail: $email\n";
		$contenido .= "-----------------\n";
		$contenido .= "consulta: $consulta\n";
		$contenido .= "contactado: $contactado\n";
		$contenido .= "-----------------";	
		$contenido .= "\nEl mensaje se envio el: $fecha";
		
		$headers .= "From: ".$nombre."<$email>\n";
		if (mail($destino,$asunto,$contenido,$headers)) {
			$aviso = "<p class='avisoOk'>El mensaje ha sido enviado correctamente.</p>";
		} else {
			$aviso = "<p class='avisoError'>ERROR El mensaje no se pudo enviar.<br />\n";
			$aviso .= "Intente más tarde.</p>";
		}
			
		if ($OK == "evento1") {

			echo "<B>contactado =</B>".$contactado."<br>";
}
		// Mail del respuesta al usuario
		$mensaje2  = "Gracias por contactarnos.\n";
		$mensaje2 .= "Responderemos al a brevedad.\n";
		$mensaje2 .= "\n";
		$mensaje2 .= "DUAM Sistemas\n";
		$mensaje2 .= "\n";
		$subject2 = "www.duamsistemas.com.ar";
		$remitente2 = "DUAM Sistemas";
		$headers2 .= "From: ".$remitente2."<$destino>\n";
		mail($email,$subject2,$mensaje2,$headers2);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Author" content="Duam Sistemas" />
<meta name="y_key" content="64bc5a2bbfce196c">
<meta name="Samanta Fizzano" content="contacto, free, sistemas, web, posicionamiento web, paginas" />
<META name="y_key" content="0d9e793618426d3a">


<title>Contacto</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="container">
	<div id="holder" class="clearfix">
		<div id="logo">
&nbsp;			
	  </div>
	   <table align="right">
		<tr>
			<td><a href="contacto.php">Español</a> | <a href="contacto_en.php">English</a></td>
		</tr>
	  </table>
		<div id="navigation">
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="empresa.html">La Empresa</a></li>
				<li><a href="servicios.html">Servicios y Productos</a></li>
				<li><a href="clientes.html">Nuestros Clientes</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
	    </div>
		
		<div id="header"></div>
		<div id="content">
			<h2>Contacto</h2>
			<p>Por cualquier consulta comuniquese con nosotros. Con gusto responderemos a todas sus inquietudes.</p>
<form id="form1" name="form1" method="post" action="contacto.php">
	<span style="color:red;"><?php echo $aviso; ?></span>
			<p align="left">			
				<table width="90%" border="0">
				<tr>
					<td>Nombre</td>
					<td><input id="nombre" name="nombre" type="text" /></td>
				</tr>
				<tr>
					<td>Apellido</td>
					<td><input id="apellido" name="apellido" type="text" /></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input name="email" type="text" id="email"></td>
				</tr>
				<tr>
					<td>Comentario</td>
					<td><textarea id="consulta" name="consulta"></textarea></td>
				</tr>
			<tr>
			<td>¿Cómo llegaste a nuestra web?</td>
			<td>
					<input type=radio name="contactado" value=facebook>Facebook<br>
					<input type=radio name="contactado" value=cliente>Página de un cliente<br>
					<input type=radio name="contactado" value=web>Buscadores<br>
					<input type=radio name="contactado" value=otros>Otros<br>
			</td>
			</tr>		

				</table>
				<tr>
						<td colspan="2" align="center">
							<input name="submit" type="submit" id="submit" value="Enviar" />
							<input type="reset" value="Borrar"/>
						</td>
				</tr>
	
			</p>			
	</form>	
			<br>
				<br>
			<p align="center">					
			<b>DUAM Sistemas</b><br>
			Biarritz 2735(C1416EZR), Capital Federal<br>
			Buenos Aires, Argentina<br>
			Phone 5411.4504.2240<br>
			<a href="mailto:info@duamsistemas.com.ar">info@duamsistemas.com.ar</a><br>
			</p>						
			
		<br>
		</div>
		<div id="news">
			<div class="newsItem">
				<h1>Info</h1>
				<p>Puedes descargar desde <a href="presentacion.pps">aquí</a> el documento de presentación de la empresa.</p>
			</div>
<iframe src="http://www.facebook.com/plugins/likebox.php?locale=es_ES&id=129237857120964&amp;width=200&amp;header=true&amp;height=587" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:587px;" allowTransparency="true"></iframe>


	  </div>
	</div>
	<div id="footer">
		<span id="copyright">Diseño  <a href="http://www.duamsistemas.com.ar" target="_blank">DUAM Sistemas</a></span>
		<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="empresa.html">La Empresa</a></li>
				<li><a href="servicios.html">Servicios y Productos</a></li>
				<li><a href="clientes.html">Nuestros Clientes</a></li>
				<li><a href="contacto.html">Contacto</a></li>
		</ul>
	</div>
</div>
</body>
</html>
