<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Cadastro</title>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    </head>

    <body>
        <!--Cabeçalho-->
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Cadastro</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="exibir.php">Exibir</a></li>
                </ul>
            </div>
        </nav>
        <!--Inicio do formulário-->
        <div class="container">
            <form action="recebe.php" method="post">
                <div class="row">
                    <div class="col s6">
                        <label>Nome</label>
                        <input type="text" name="nome">
                    </div>
                    <div class="col s6">
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <label>Data de nascimento</label>
                        <input type="date" name="data_nasc">
                    </div>
                    <div class="col s6">
                        <label>Curso</label>
                        <input type="text" name="curso">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <input type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>