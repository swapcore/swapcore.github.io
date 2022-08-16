<!--
	Pagina principal
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
		<title>Inicio | Swapcore</title>
		<link rel="icon" type="image/png" href="img\favicon.png">
		<link rel="stylesheet" href="css\styles.css">
	</head>
	
	<body>
		<?php require("menu.php");?>
		<div class="container-begin">
			<div class="welcome">
				<img class="welcome-photo" src="img/photo.png"></img>
				<div class="welcome-info">
					<div class="welcome-holder">
						<img class="welcome-holder-logo" src="img/logo.png"></img>
						<div class="welcome-holder-text">
							<p class="welcome-holder-name">Swapcore</p>
						</div>
					</div>
					<div class="welcome-user">
						<p class="welcome-user-name">¡Hola. Soy Oscar Elías!</p>
						<p class="welcome-user-description">
							Programador autodidacta, entusiasta del lenguaje C,
							la electrónica, arte, música, historia y la dinámica social.
						</p>
					</div>
					<div class="btn-group welcome-info-btn-group">
						<a class="btn" href="contact.php">Contactamé</a>
						<a class="btn" href="recruiter.php">Información para el reclutador</a>
					</div>
				</div>
			</div>
			<div class="welcome-footer">
				<small>Actuar en el momento y lugar adecuados</small>
				<a href="https://github.com/swapcore" target="_blank">
					<img class="github-link" src="img\github.png"><img>
				</a>
			</div>
		</div>
		<?php require("totop.php");?>
		<script src="js/script.js"></script>
	</body>
</html>