<!--
	Lista de proyectos
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
		<title>Proyectos | Swapcore</title>
		<link rel="icon" type="image/png" href="/img/favicon.png">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	
	<body>
		<?php require("menu.php");?>
		<div class="container">
			<div class="header">
				<img class="header-img" src="img/proyect.png"></img>
				<h1>Proyectos</h1>
			</div>
			<div class="card-container">
				<div class="card">
					<div class="card-img-container">
						<img class="card-img" src="/img/library.png"></img>
					</div>
					<h4 class="card-title">UTF8RDR</h4>
					<p class="card-subtitle">Lector de secuencias UTF-8</p>
					<div class="btn-group card-btn-group">
						<a class="btn btn-sm card-btn" href="proyects/utf8rdr.php">Detalles</a>
						<a class="btn btn-sm card-btn" href="https://github.com/swapcore/UTF8RDR" target="_blank">Ver codigo</a>
					</div>
				</div>
				<div class="card">
					<div class="card-img-container">
						<img class="card-img" src="img/web.png"></img>
					</div>
					<h4 class="card-title">Mi portafolio</h4>
					<p class="card-subtitle">¡Asi es!. Mi portafolio</p>
					<div class="btn-group card-btn-group">
						<a class="btn btn-sm card-btn" href="proyects/mi_portfolio.php">Detalles</a>
						<a class="btn btn-sm card-btn" href="#">Ver codigo</a>
					</div>
				</div>
			</div>
		</div>
		<?php require("footer.php");?>
		<?php require("totop.php");?>
		<script src="js/script.js"></script>
	</body>
</html>