<?php

include_once '../config.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch($action){
	case 'list':
		include '../actions/list.php';
		break;
	case 'details':
		include '../actions/details.php';
		break;
	default:
		include '../actions/home.php';
		break;
}

?>
<!DOCTYPE>
<html>
	<head>
		<title><?php echo $page_title; ?> | Tuto PHP</title>
	</head>
	<body>
		<header>
			<h1>Menu del sitio</h1>
			<ul>
				<li><a href="?">Home</a></li>
				<li><a href="?action=list">Lista de usuarios</a></li>
				<li><a href="?action=details&id=12">Ficha de un usuario</a></li>
			</ul>
			<hr>
		</header>
		
		<?php
		
		switch($action){
			case 'list':
				include '../views/list.php';
				break;
			case 'details':
				include '../views/details.php';
				break;
			default:
				include '../views/home.php';
				break;
		}
		?>
		
		<footer>
			<hr>
			<p>soy el footer. &Uacute;ltima modificacion: <?php echo $config['last_modif']; ?></p>
		</footer>
	</body>
</html>