<!DOCTYPE html>
<html>
    <head>
        <title>Discursiva 2</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="estilo.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="resp">
                <form method="post" action="calcular.php">
                    <h1><label for="" class="txt">Vamos calcular seu IMC?:</label></h1><br/>
                    <label for="" class"txt">Seu nome: </label><input type="text" name="nome"/></br>
                    <label for="" class"txt">Seu Sexo: </label><select name="sexo">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select></br>
                    <label for="" class"txt">Nascimento: </label><input type="date" name="dataNascimento"/></br>
                    <label for="" class"txt">Seu Peso: </label><input type="number" name="peso" step="0.001"/></br>
                    <label for="" class"txt">Sua Altura: </label><input type="number" name="altura" step="0.001"/></br>
                    <input type="submit" value="Calcular"/>
                </form>
            </div>
        </div>
    </body>
</html>