<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Panel central</title>
    <!-- CSS -->

    <link rel="stylesheet" href="<?= $this->bootstrap_css ?>">
    <link rel="stylesheet" href="<?= $this->fontawesome ?>">
    <link rel="stylesheet" href="<?= $this->sweetalert_css ?>">
    <link rel="stylesheet" href="<?= $this->animate ?>">
    <link rel="stylesheet" href="<?= $this->style_css?>">

    <!-- JS -->
    <script src="<?= $this->jquery ?>"></script>
    <script src="<?= $this->jquery_validate ?>"></script>
    <script src="<?= $this->additional_methods ?>"></script>
    <script src="<?= $this->bootstrap_js ?>"></script>
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
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">

</div>

</body>
</html>