<?php

include_once '../config.php';
include_once '../_classes/Conexion.php';

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?> | Tuto PHP</title>

    <!-- Bootstrap -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="top-buffer">
    <div class="container">
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Pe-ashé-Pe</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php if($action == 'home') echo 'active'; ?>"><a href="?">Home</a></li>
                        <li class="<?php if($action == 'list') echo 'active'; ?>"><a href="?action=list">Lista de usuarios</a></li>
                        <li class="<?php if($action == 'details') echo 'active'; ?>"><a href="?action=details&id=12">Ficha de un usuario</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div>
</div>

<div class="container">

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
        Copyright 2017
        <div class="pull-right">&Uacute;ltima modificacion: <?php echo $config['last_modif']; ?></div>
    </footer>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>