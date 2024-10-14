<?php 

/* 
Site: da Tpower Informática
Autor: Willian Borges
Data: 13 de outubro, 2024
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;

	case 'sobre':
		include 'app/views/sobre.php';
		break;

	case 'navegar':
		include 'app/views/navegar.php';
		break;

	case 'blast':
		include 'app/views/blast.php';
		break;
	
	default:
		include 'app/views/home.php';
		break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';