<!--
	Reseña: UTF8RDR
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
		<title>UTF8RDR | Swapcore</title>
		<link rel="icon" type="image/png" href="/img/favicon.png">
		<link rel="stylesheet" href="/css/styles.css">
	</head>
	<body>
		<?php require("../menu.php");?>
		
		<!--contenedor-->
		<div class="container">
			<div class="container-text">
				<div class="proyect-page-head">
					<h2>UTF8RDR</h2>
					<a class="btn" href="https://github.com/swapcore/UTF8RDR" target="_blank">Ver codigo fuente</a>
				</div>
				<p>
				En 1967 un conjunto de caracteres utilizados en
				telegrafía más otros caracteres adicionales formaron
				ASCII. Más tarde, en 1967 este se actualizo y se
				renombro como US-ASCII. US-ASCII utiliza 7 bits para
				representar 128 caracteres definidos previamente por
				ASCII. Un octavo bit se usaba como bit de paridad
				para detectar errores de transmisión.
				</p>
				<p>
				Por el momento no era requerido otro conjunto de
				caracteres, sin embargo, debido al desarrollo
				tecnológico y la expansión de Internet, empresas
				crearon sus conjuntos de caracteres utilizando el bit
				de paridad de US-ASCII, conocidos popularmente como
				“ASCII extendido”.
				</p>
				<p>
				Estos conjuntos de caracteres, a pesar de que contenían
				caracteres de otras lenguas, fueron ineficientes debido
				a incompatibilidades de codificación entre dispositivos
				además de que algunos conjuntos de caracteres ni siquiera
				incluían US-ASCII. Estos problemas fueron comunes hasta
				el año 1991 cuando se desarrolló un estándar conocido
				como UNICODE. Este nuevo estándar de conjunto de caracteres
				se alzó rápidamente remplazando gradualmente los
				conjuntos de caracteres existentes.
				</p>
				<p>
				Los caracteres contenidos en UNICODE son representados
				por valores numéricos llamados puntos de código. Estos
				puntos están divididos entre el plano básico multilingüe
				y el plano suplementario. Y estos se dividen en bloques
				que pueden corresponder con un grupo de caracteres de una
				lengua, jerarquía o característica que los relacione entre
				sí. Esta organización facilita la consulta de los
				caracteres y la adicción de nuevos dialectos, lenguas y
				símbolos para su conservación, uso y estudio.
				</p>
				<p>
				UNICODE es mantenido por el consorcio UNICODE, una organización
				sin ánimos de lucro conformada por empresas como Adobe
				Systems, Apple, Google, IBM, Microsoft, Oracle Corporation
				y Yahoo! entre otros.
				</p>
				<h3>¿Por qué usar este software?</h3>
				<p>
				Para que un dispositivo pueda almacenar y procesar los códigos
				UNICODE de manera eficiente se diseñaron los sistemas de
				codificación UTF-16, UTF-32 e UTF-8. A continuación se
				explicaran cada uno de estos:
				<ul>
					<li>
					UTF-16: Sistema de codificación que utiliza 16 bits
					para almacenar códigos UNICODE desde 0 a 65535
					(<code>0x0</code> a <code>0xFFFF</code>).
					Para códigos más allá de este rango se almacenan en pares
					subrogados de 16 bits.
					</li>
					<li>
					UTF-32: Sistema de codificación que utiliza 32 bits para
					almacenar códigos UNICODE desde 0 a 1114111
					(<code>0x0</code> a <code>0x10FFFF</code>).
					Este sistema almacena los códigos sin cambios y abarca todos
					los bloques UNICODE definidos.
					</li>
					<li>
					UTF-8: Sistema de codificación de longitud variable;
					puede utilizar 1, 2, 3 o 4 bytes para representar los códigos
					UNICODE. Al igual que UTF-32 abarca todos los bloques UNICODE
					definidos.
					</li>
				</ul>
				<p>
				Generalmente los sistemas operativos utilizan UTF-16 e UTF-32 para
				codificar caracteres de forma nativa mientras que UTF-8 es usado
				para enviar y recibir datos a través de Internet.
				Este envió y recibo de datos supone un problema a la hora de
				decodificarlos ya que cada sistema operativo contiene sus funciones
				de decodificación y esto impide que una aplicación sea portable. 
				Para solucionar este problema diseñe este software. Espero que sea
				una alternativa simple y portátil para leer secuencias de datos UTF-8.
				</p>
				<h3>¿Cómo funciona?</h3>
				<p>
				UTF8RDR está conformada por cuatro funciones, mismas que pueden ser
				utilizadas de manera individual para casos muy específicos. Este software
				está escrito en lenguaje C en su versión C99 y utiliza la librería
				<code>&ltstdint.h&gt</code>. Además de que procesa las secuencias 
				UTF-8 con el endianess que maneja el microprocesador anfitrión.
				Cualidades que hacen que este software sea multiplataforma y portable. 
				</p>
				<p>
				A continuación explicare a detalle las funciones mencionadas.
				</p>
				<h4>DecodeUTF8Ch()</h4>
				<p>
				Esta función es el corazón de este software. Recibe un buffer de datos
				que contiene un carácter UTF-8 y lo decodifica en un punto de código
				UNICODE a través de un puntero a una variable del tipo
				<code>UTFCODEPOINT</code>. La función retorna el número de bytes
				leídos desde el buffer. Este valor es usado por las funciones
				<code>UTF8StrToUTF16Str()</code> y <code>UTF8StrToUTF32Str()</code>.
				</p>
				<p>
				En caso de un error de codificación los datos se rechazan y se retorna
				0. El tratamiento de este error dependerá de la función que la invoque
				aunque UNICODE recomienda sustituir el carácter por un carácter de
				remplazo (<code>0xFFFD</code>) o detener el procesamiento en caso
				de que el buffer de datos pertenezca a una cadena UTF-8. En mi
				opinión no recomiendo intentar reparar estos datos ya que pueden
				producir comportamientos indefinidos o mostrar caracteres erróneos
				al usuario. 
				</p>
				<h4>EncodeToUTF16Ch()</h4>
				<p>
				Esta función recibe un punto de código UNICODE y retorna un carácter
				UTF-16 a través de un puntero a una variable del tipo
				<code>UTF32CH</code>. Debido a que UTF-16 puede utilizar 16 o 32 bits
				para codificar caracteres la variable que recibe el carácter UTF-16
				tiene una longitud de 32 bits, útil en caso de que el carácter sea
				representado en dos pares subrogados en dos unidades de 16 bits.
				</p>
				<p>
				La función comprueba si el código UNICODE representa un carácter real.
				Retorna el número de unidades de 16 bits utilizados.  En caso de error retorna 0.
				</p>
				<h4>UTF8StrToUTF16Str() y UTF8StrToUTF32Str()</h4>
				<p>
				Estas funciones se comportan de manera similar. Reciben un buffer a una
				cadena UTF-8 y retornan un buffer a una cadena UTF-16 y UTF-32
				respectivamente. En caso de un error de codificación detienen el
				procesamiento de la cadena UTF-8 y retornan NULL.
				</p>
				<p>
				Las cadenas resultantes que devuelven estas funciones son formadas de
				acuerdo al orden de bytes que maneja el microprocesador anfitrión y
				se utiliza la función <code>malloc()</code> para reservar espacio en memoria para
				las cadenas . No se realiza conversiones de formato UNICODE.
				</p>
				<h3>Condiciones de uso</h3>
				<p>
				Tenga presente que este software se publica bajo los términos de
				la licencia GNU General Public Licence Versión 3. Consulte el archivo
				LICENCE de este repositorio o diríjase a
				<a href="https://www.gnu.org/licenses" target="_blank">https://www.gnu.org/licenses</a>
				para más información acerca de las lineamientos de uso del este software.
				</p>
			</div>
		</div>
		<!--fin de contenedor-->
		
		<?php require("../footer.php");?>
		<?php require("../totop.php");?>
		<script src="/js/script.js"></script>
	</body>
</html>

