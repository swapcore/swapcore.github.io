/*
	Scripts del sitio web
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

function AddEvent(id,e,func)
{
	document.getElementById(id).addEventListener(e,func);
}

// mostrar menú para telefonos moviles
function ShowMobileMenu()
{
	document.getElementById('mobile-menu-id').style.display='flex';
}

// ocultar menú para telefonos moviles
function CloseMobileMenu()
{
	document.getElementById('mobile-menu-id').style.display='none';
}

// mostrar botón to-top
function ShowToTop()
{
	let toup=document.getElementById('to-top');
	
	if(document.documentElement.scrollTop>150){
		toup.style.display='inline';
	}
	else {
		toup.style.display='none';
	}
	return;
}

function pd()
{
	console.log('Hola');
}

// función principal
function main()
{
	// definir eventos
	window.addEventListener('scroll',ShowToTop);

	AddEvent('open-menu-id','click',ShowMobileMenu);
	AddEvent('close-menu-id','click',CloseMobileMenu);
}

main();