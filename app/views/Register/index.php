<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$this->name?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=$this->semantic_css?>">
    <link rel="stylesheet" href="<?=$this->bootstrap_css?>">
    <link rel="stylesheet" href="<?=$this->sweetalert_css?>">
    <link rel="stylesheet" href="<?=$this->animate?>">
    <link rel="stylesheet" href="<?=$this->style_css?>">

    <!-- JS -->
    <script src="<?=$this->jquery?>"></script>
    <script src="<?=$this->jquery_validate?>"></script>
    <script src="<?=$this->additional_methods?>"></script>
    <script src="<?=$this->sweetalert_js?>"></script>
    <script src="<?=$this->semanticjs?>"></script>
    <script src="<?=$this->app?>"></script>
</head>
<body>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center text-uppercase"><?= $this->name ?></h1>
            <div class="column">
                <form class="ui form" id="formRegister">
                    <div class="field">
                        <label>Nombre:</label>
                        <input type="text" name="name" id="name" placeholder="Name" tabindex="1" autocomplete="off"
                               required>
                    </div>
                    <div class="field">
                        <label>Apellido:</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name" tabindex="2" autocomplete="off"
                               required>
                    </div>
                    <div class="field">
                        <label>Correo:</label>
                        <input type="email" name="email" id="email" placeholder="E-mail" tabindex="3" autocomplete="off"
                               required>
                    </div>
                    <div class="field">
                        <label>Password:</label>
                        <input type="password" name="password" id="password" tabindex="4" placeholder="Password"
                               autocomplete="off" maxlength="24" minlength="6" required>
                    </div>
                    <div class="field text-center">
                        <div class="ui large buttons">
                            <button  type="submit" id="submit" class="ui teal button text-uppercase">Register</button>
                            <div class="or"></div>
                            <a href="<?=$this->URL?>Home" class="ui black button active">Login</a>
                        </div>
                        <br>

                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>