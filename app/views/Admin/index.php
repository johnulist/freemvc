<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Panel central</title>
    <!-- CSS -->

    <link rel="stylesheet" href="<?= $this->bootstrap_css ?>">
    <link rel="stylesheet" href="<?= $this->fontawesome ?>">
    <link rel="stylesheet" href="<?= $this->sweetalert_css ?>">
    <link rel="stylesheet" href="<?= $this->semantic_css ?>">
    <link rel="stylesheet" href="<?= $this->animate ?>">
    <link rel="stylesheet" href="<?= $this->style_css?>">

    <!-- JS -->
    <script src="<?= $this->jquery ?>"></script>
    <script src="<?= $this->jquery_validate ?>"></script>
    <script src="<?= $this->additional_methods ?>"></script>
    <script src="<?= $this->bootstrap_js ?>"></script>
    <script src="<?= $this->semanticjs ?>"></script>
    <script src="<?= $this->sweetalert_js ?>"></script>
    <script src="<?= $this->app_admin ?>"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$this->URL?>Administracion">Panel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="announcement icon"></i>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu hide">
                        <li>
                            <a href="#">
                                <p>Angel De La Cruz</p>
                                <p>Hola necesito ayuda</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Angel De La Cruz</p>
                                <p>Hola necesito ayuda</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Angel De La Cruz</p>
                                <p>Hola necesito ayuda</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Angel De La Cruz</p>
                                <p>Hola necesito ayuda</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <?=$this->DATA->name?> <?=$this->DATA->lastname?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=$this->URL?>perfil/"><i class="fa fa-address-card-o" aria-hidden="true"></i>  Perfil</a></li>
                        <li><a href="#"><i class="setting icon"></i> Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?=$this->URL?>Login/logout/"><i class="fa fa-power-off" aria-hidden="true"></i>
                                 Cerrar sesión</a></li>
                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="" style="width: 200px;">
    <ul class="nav">
        <li><a href="#">Dashboard</a></li>
    </ul>
</div>
<div class="container-fluid" style="margin-left: 200px;">
   <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
</div>

</body>
</html>