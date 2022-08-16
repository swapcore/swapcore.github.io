<!--
	Contacto
	Copyright (c) 2022 Oscar Elias
	
	This file is part of Mi portafolio.
	
	Mi portafolio is free software: you can redistribute it and/or
	modify it under the terms of the GNU General Public License as
	published by the Free Software Foundation, either version 3 of
	the License, or (at your option) any later version.

	Mi portafolio is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with Mi portafolio. If not, see <https://www.gnu.org/licenses/>.
-->

<!doctype html>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Contacto | Swapcore</title>
		<link rel="icon" type="image/png" href="img\favicon.png">
		<link rel="stylesheet" href="css\styles.css">
	</head>
	
	<body>
		<?php require("menu.php");?>
		<div class="container">
			<div class="header">
				<img class="header-img" src="img/contact.png"></img>
				<h1>Contacto</h1>
			</div>
			<div class="contact-container">
				<form class="contact" action="contact.php" method="post">
					<input class="textbox" placeholder="E-Mail" type="text" name="email"></input>
					<input class="textbox" placeholder="Asunto" type="text" name="subject"></input>
					<textarea class="textbox"  placeholder="Mensaje" name="message" rows="10"></textarea>
<?php
	const SEND_MAIL_OK = 0;
	const ERROR_NO_EMAIL = 1;
	const ERROR_NO_SUBJECT = 2;
	const ERROR_NO_MESSAGE = 4;
	const SEND_MAIL_ERROR = 8;
	
	// enviar correo
	function SendMail()
	{		
		$message;
		$flag=0;

		// verificando datos de formulario
		if(empty($_POST['email'])) {
			$flag |= ERROR_NO_EMAIL;
		}
		if(empty($_POST['subject'])) {
			$flag |= ERROR_NO_SUBJECT;
		}
		if(empty($_POST['message'])) {
			$flag |= ERROR_NO_MESSAGE;
		}
		
		if($flag>0) {
			// faltan datos en el formulario
			return $flag;
		}
		
		// preparar mensaje
		$message=wordwrap($_POST['message'],70,"\r\n");

		//enviar correo
		$issendmail=mail('mepple_505@hotmail.com',
			$_POST['subject'],$message);
		
		if(!$issendmail) {
			return SEND_MAIL_ERROR;
		}
		
		return $SEND_MAIL_OK;
	}


	if($_POST) {
		$msg;
		
		// enviando correo
		$flag=SendMail();
		
		// verificando envio de correo
		if($flag==SEND_MAIL_OK) {
			$msg = '¡Mensaje enviado!';
			echo '<script>alert("'.$msg.'")</script>';
		}
		if($flag==SEND_MAIL_ERROR) {
			$msg = 'Error al envia el mensaje';
			echo '<script>alert("'.$msg.'")</script>';
			echo '<small>* '.$msg.'</small>';
		}		
		if($flag & ERROR_NO_EMAIL) {
			echo '<small>* Escriba su E-Mail</small>';
		}
		if($flag & ERROR_NO_SUBJECT) {
			echo '<small>* Escriba el asunto</small>';
		}
		if($flag & ERROR_NO_MESSAGE) {
			echo '<small>* Escriba el mensaje</small>';
		}
	}
?>
					<input class="btn btn-send" type="submit" value="Enviar"></input>
					<small>
						Para cualquier sugerencia, duda o aclaración puede usar este
						medio para contactarme. Superviso los mensajes diariamente y
						contesto a la brevedad.
					</small>
				</form>
			</div>
		</div>
		<?php require("footer.php");?>
		<?php require("totop.php");?>
		<script src="js/script.js"></script>
	</body>
</html>