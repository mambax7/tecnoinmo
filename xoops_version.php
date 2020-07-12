<?php
$modversion['name'] = _TECNOINMO_NOMBRE;  	/*El nombre de tu m�dulo*/
$modversion['version'] = 1.1; 			      /*La versi�n que estes realizando*/
$modversion['description'] = _TECNOINMO_DESC; 	/*Su descripci�n*/
$modversion['credits'] = '<A href="www.tecnolibre.org">www.tecnolibre.org</A>';			      /*Los cr�ditos y agradecimientos*/
$modversion['author'] = "-::P4r4s1t0::-<br>.:: D�iren ::.<br>NEOMODO<br>wilson";
$modversion['help'] = "help.html";		      /*Archivo de ayuda si lo haz realizado*/
$modversion['license'] = "GPL see LICENSE";	/*La licencia de uso*/
$modversion['official'] = 1;			      /*Si el m�dulo es oficial pones 1, sino 0*/
$modversion['image'] = "images/slogo.png";	/*La ubicaci�n del �cono de administraci�n*/
$modversion['dirname'] = "tecnoinmo";		/*Nombre de la carpeta del m�dulo*/

//Script mysql
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";	/*Ubucaci�n del script mysql si lo posee.*/

//Tablas Base de Datos
$modversion['tables'][0] = "tecnoinmo_zona";		/*Nombre de las tablas que posea el script mysql*/
$modversion['tables'][1] = "tecnoinmo_inmueble";
$modversion['tables'][2] = "tecnoinmo_foto";
$modversion['tables'][3] = "tecnoinmo_agencia";

//Administraci�n
$modversion['hasAdmin'] = 1;			      /*Si el m�dulo posee administraci�n pones 1, sino 0*/
$modversion['adminindex'] = "admin/index.php";  /*Si el m�dulo posee administraci�n pones aqu� su p�gina de inicio*/
$modversion['adminmenu'] = "admin/menu.php";	/*Si el m�dulo posee administraci�n pones el archivo que contiene su men�*/

//Templates
$modversion['templates'][1]['file'] = 'tecnoinmo_portada.html';
$modversion['templates'][1]['description'] = 'Portada del m�dulo';
$modversion['templates'][2]['file'] = 'tecnoinmo_inmueble.html';
$modversion['templates'][2]['description'] = 'Muestra un inmueble';
$modversion['templates'][3]['file'] = 'tecnoinmo_lista.html';
$modversion['templates'][3]['description'] = 'Muestra listado de inmuebles';

//Bloques
$modversion['blocks'][1]['file'] = "bloque_menu.php";
$modversion['blocks'][1]['name'] = _TECNOINMO_BLOQUE_NOMBRE;
$modversion['blocks'][1]['description'] = _TECNOINMO_BLOQUE_DESCRIPCION;
$modversion['blocks'][1]['show_func'] = "b_tecnoinmo_show";
$modversion['blocks'][1]['template'] = 'tecnoinmo_bloque.html';

//Men�
$modversion['hasMain'] = 1; 	  /*Si el m�dulo posee algo a mostrar para el usuario com�n pones 1, sino 0*/
				  /*Poner esta opci�n en 1 permitir� que el m�dulo aparezca en el men� principal del sitio*/

//Buscador
$modversion['hasSearch'] = 0;					      /*Si le haz creado una funci�n de b�squeda al m�dulo pones 1, sino 0*/
#$modversion['search']['file'] = "include/search.inc.php";	/*Indicas el archivo donde se encuentra la funci�n de b�squeda*/
#$modversion['search']['func'] = "mi_modulo_search";		/*Indicas el nombre de la funci�n de b�squeda que hayas creado.*/

?>
