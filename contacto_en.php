<?php
	if($_POST['submit']) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$consulta = $_POST['consulta'];
		$asunto = "Consulta";
		$destino = "contacto@duamsistemas.com.ar";
		$fecha = date('Y-m-d H:i');
			
		// Mail de consulta
		$contenido  = "nombre: $nombre\n";
		$contenido .= "apellido: $apellido\n";
		$contenido .= "e-mail: $email\n";
		$contenido .= "-----------------\n";
		$contenido .= "consulta: $consulta\n";
		$contenido .= "-----------------";	
		$contenido .= "\nEl mensaje se envio el: $fecha";
		
		$headers .= "From: ".$nombre."<$email>\n";
		if (mail($destino,$asunto,$contenido,$headers)) {
			$aviso = "<p class='avisoOk'>The message has been deilvered.</p>";
		} else {
			$aviso = "<p class='avisoError'>ERROR. The message cannot be delivered.<br />\n";
			$aviso .= "Try later.</p>";
		}
			
		// Mail del respuesta al usuario
		$mensaje2  = "Thanks for contacting us.\n";
		$mensaje2 .= "We will answer soon.\n";
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
<meta name="Author" content="Tjobbe Andrews, SiteCreative.net" />
<META name="y_key" content="0d9e793618426d3a">

<title>DUAM Sistemas</title>
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
				<li><a href="index_en.html">Home</a></li>
				<li><a href="empresa_en.html">The Company</a></li>
				<li><a href="clientes_en.html">Our Clients</a></li>
				<li><a href="#">Contact</a></li>

			</ul>
	    </div>
		
		<div id="header"></div>
		<div id="content">
			<h2>Contact</h2>
			<p>If you have any doubt, you can contact us. We gladly answer all your inquires.</p>
<form id="form1" name="form1" method="post" action="contacto_en.php">
	<span style="color:red;"><?php echo $aviso; ?></span>
			<p align="left">			
				<table width="90%" border="0">
				<tr>
					<td>Name</td>
					<td><input id="nombre" name="nombre" type="text" /></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input id="apellido" name="apellido" type="text" /></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input name="email" type="text" id="email"></td>
				</tr>
				<tr>
					<td>Comment</td>
					<td><textarea id="consulta" name="consulta"></textarea></td>
				</tr>
				<tr>
						<td colspan="2" align="center">
							<input name="submit" type="submit" id="submit" value="Send" />
							<input type="reset" value="Clear"/>
						</td>
				</tr>
							<tr>
			<td>How did you find our website?</td>
			<td>
					<input type=radio name="contactado" value=facebook>Facebook<br>
					<input type=radio name="contactado" value=cliente>Customer Pages<br>
					<input type=radio name="contactado" value=web>Searchers<br>
					<input type=radio name="contactado" value=otros>Others<br>
			</td>
			</tr>		

				</table>
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
		
		
	<!--<p style="border-bottom:2px solid #DADADA;">&nbsp;</p> -->
						
			
		<br>
		</div>
		<div id="news">
			<div class="newsItem">
				<h1>Info</h1>
			<p>You can get a Company breef clicking <a href="presentacion.pps">here</a>.</p>
			</div>
			
<iframe src="http://www.facebook.com/plugins/likebox.php?locale=en_EN&id=129237857120964&amp;width=200&amp;header=true&amp;height=587" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:587px;" allowTransparency="true"></iframe>

		<!--	<div class="newsItem">
				<h1>Other info</h1>
				<p>You are free to use this design for anythign you wish. I do ask that the &quot;design by sitecreative&quot; stays in the footer with a link back to my site. Please don't sell it or re-distribute it. </p>
			</div> -->
	  </div>
	</div>
	<div id="footer">
		<span id="copyright">Design  <a href="http://www.duamsistemas.com.ar" target="_blank">DUAM Sistemas</a></span>
		<ul>
				<li><a href="index_en.html">Home</a></li>
				<li><a href="empresa_en.html">The Company</a></li>
				<li><a href="clientes_en.html">Our Clients</a></li>
				<li><a href="contacto_en.html">Contact</a></li>
		</ul>
	</div>
</div>
</body>
</html>
