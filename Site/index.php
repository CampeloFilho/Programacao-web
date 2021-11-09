<!DOCTYPE html>
<html>
    <head>
        <title>HOME - RAIMUNDO NONATO</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css"/> 
    </head>
    <body>
        <h1>EEEP JOAQUIM ANTONIO ALBANO</h1>        
        <div class="formulario">
            <form action="#" method="post">
                Nome:<br><input type="name" name="nome"><br>
                Sexo:<br><input type="radio" name="sexo" value="masc"> Masculino<BR>
                <input type="radio" name="sexo" value="fem"> Feminino<BR>
                Idade: <br><input type="number" max="100" min="1" name="idade"><br>
                Sua cidade:<br><select name="cidade">
                    <option value="#">selecione...</option>
                    <option value="Fortaleza">Fortaleza</option>
                    <option value="Boa viagem">Boa viagem</option>
                    <option value="Caucaia">Caucaia</option>
                    <option value="Eusebio">Eusebio</option>
                </select><br>

                <input type="submit" name="cadastrar"><br>
            </form>
        </div>
    </body>
</html>