<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$this->name?></title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?=$this->semantic_css?>">
        <link rel="stylesheet" href="<?=$this->bootstrap_css?>">
        <link rel="stylesheet" href="<?=$this->style_css?>">

        <!-- JS -->
        <script src="<?=$this->jquery?>"></script>
        <script src="<?=$this->semanticjs?>"></script>

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
                    <h1 class="text-center text-uppercase"><?=$this->name?></h1>
                    <div class="column">
                      <form class="ui form">
                          <div class="field">
                              <label>Correo:</label>
                              <input type="email" name="email" id="email" placeholder="E-mail">
                          </div>
                          <div class="field">
                              <label>Password:</label>
                              <input type="password" name="password" id="password" placeholder="Password">
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
