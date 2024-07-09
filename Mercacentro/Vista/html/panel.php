<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Mercacentro</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="Vista/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="Vista/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="Vista/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    <img src="Vista/imagenes/mercalogo3.png" class="img-responsive" alt="Responsive image">
                </a>
            </div>

            <ul class="nav">
                <li class="active"><a href="index.php?accion=sucursal">Sucursal</a></li>
                <li><a href="#">Tipo de Area</a></li>
                <li><a href="#">Area</a></li>
                <li><a href="#">Cargo</a></li>
                <li><a href="#">Tipo de Usuario</a></li>
                <li><a href="#">Usuario</a></li>
                <li><a href="#">PQRS</a></li>   
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Inicio</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
								<p>Notificaciones</p>
                            </a>
                        </li>                        
						<li>
                            <a href="#">
								<i class="ti-user"></i>
								<p>Perfil</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-share-alt"></i>
                                <p>logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="Vista/js/jquery.js" type="text/javascript"></script>
	<script src="Vista/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="Vista/js/paper-dashboard.js"></script>
</html>
