<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <title>Cadastro - Clínica</title>
    </head>
    <body> 
       <nav>
            <div class="nav-wrapper pink darken">
                <a href="#" class="brand-logo center">Cadastro de Pacientes</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="sass.html"></a></li>
                    <li><a href="badges.html"></a></li>
                    <li><a href="collapsible.html"></a></li>
                </ul>
            </div>
        </nav>
        <br>
        <form action="recebe.php" method="post">
            <div class="row">
                <div class="col s6">
                    <label>Nome</label>
                    <input type="text" name="nome">
                </div>
                <div class="col s6">
                <label>Sobrenome</label>
                    <input type="text" name="sobrenome">
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <label>E-mail</label>
                    <input type="email" name="email">
                </div>
                <div class="col s6">
                    <label>Telefone</label>
                    <input type="tel" name="telefone">
                </div>
            </div>
            <div class="row">
            <button class="btn waves-effect waves-light pink darken" type="submit" name="action">Cadastrar</button>
            </div>
        </form>
        <footer class="page-footer pink darken">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Clínica</h5>
                <p class="grey-text text-lighten-4">Para qualquer pessoa</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Whatsapp: (00)90000-0000</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Telefone: (00)90000-0000</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Rua booba booba 2020</a>
            </div>
          </div>
        </footer> 
    </body>
</html>