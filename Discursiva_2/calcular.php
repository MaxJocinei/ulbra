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
                <?php
                    require ("pessoa.php");
                    
                    $pessoa = new Pessoa();
                    
                    $pessoa->setNome($_POST['nome']);
                    $pessoa->setSexo($_POST['sexo']);
                    $pessoa->setDataNascimento($_POST['dataNascimento']);
                    $pessoa->setPeso($_POST['peso']);
                    $pessoa->setAltura($_POST['altura']);
                    
                    echo "Seja bem vindo ". $pessoa->getNome()."</br>";
                    echo "Indivíduo do sexo ". $pessoa->getSexo()."</br>";
                    echo "Nascido em ". $pessoa->getDataNascimento()."</br>";
                    
                    $imc = $pessoa->getPeso()/($pessoa->getAltura()*$pessoa->getAltura());
                    
                    
                    
                    if($imc<16){
                        $categoria = "Magreza Grave";
                    }elseif($imc<17){
                        $categoria = "Magreza Moderada";
                    }elseif($imc<18.5){
                        $categoria = "Magreza Leve";
                    }elseif($imc<25){
                        $categoria = "Saudável";
                    }elseif($imc<30){
                        $categoria = "Sobrepeso";
                    }elseif($imc<35){
                        $categoria = "Obesidade Grau I";
                    }elseif($imc<40){
                        $categoria = "Obesidade Grau II";
                    }elseif($imc>=40){
                        $categoria = "Obesidade Grau III";
                    }
                    
                    echo "Seu IMC é ".$imc ." e você está com ".$categoria."</br>";
                    echo "Resultado obtido a partir do peso ".$pessoa->getPeso()."Kg e da altura ".$pessoa->getAltura()."m</br>";
                ?>
            </div>
        </div>
    </body>
</html>