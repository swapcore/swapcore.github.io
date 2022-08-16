/*
	Listar proyectos
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
*/

const PROYECT_LIBRARY_TYPE = 1;
const PROYECT_MOBILEAPP_TYPE = 2;
const PROYECT_PROGRAM_TYPE = 3;
const PROYECT_WEBSITE_TYPE = 4;

// crear tarjeta de proyecto
function CreateProyectCard(type, title, description, linkpage)
{
	let album;
	let imagetype;
	
	album=document.getElementById('proyect-list');
	
	// elegir imagen
	switch(type) {
		case PROYECT_LIBRARY_TYPE: {
			imagetype='img/library.png';
			break;
		}
		case PROYECT_MOBILEAPP_TYPE: {
			imagetype='img/mobile.png';
			break;
		}
		case PROYECT_PROGRAM_TYPE: {
			imagetype='img/app.png';
			break;
		}
		case PROYECT_WEBSITE_TYPE: {
			imagetype='img/web.png';
			break;
		}
	}
	
	// crear tarjeta de proyecto
	album.insertAdjacentHTML('beforeend',
		'<div class="proyect-card">'+
		'	<img class="proyect-card-image" src="'+imagetype+'">'+
		'	<div class="proyect-card-text">'+
		'		<a class="proyect-card-title" href="'+linkpage+'">'+title+'</a>'+
		'		<p class="proyect-card-subtitle">'+description+'</p>'+
		'	</div>'+
		'	<div class="proyect-card-link">'+
		'		<a class="proyect-card-view" href="'+linkpage+'">Ver proyecto</a>'+
		'	</div>'+
		'</div>');
}

// mostrar lista de proyectos
function ShowProyectList()
{	
	CreateProyectCard(PROYECT_LIBRARY_TYPE,
		'UTF8RDR',
		'lectura de secuencias UTF-8',
		'utf8rdr.php');
}

// función principal
function main()
{
	ShowProyectList();
}

main();