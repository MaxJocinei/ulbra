<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Resposta PHP</title>
    </head>
    <body>
        
        <?php

    $v1 = $_GET["vend1"];
    foreach($v1 as $vend1){
        print_r($vend1. ' - ') ;
    }echo "<br/>";
    
     $v2 = $_GET["vend2"];
    foreach($v2 as $vend2){
        print_r($vend2. ' - ') ;
    }echo "<br/>";
    
     $v3 = $_GET["vend3"];
    foreach($v3 as $vend3){
        print_r($vend3. ' - ') ;
    }echo "<br/>";
    $i;
    
   
    
/*-------------------------------------- Mostre os totais de vendas, mês a mês, da loja --------------------------------------*/    
    $maiorMes = 0;
    $posMaiorMes = 0;
    for($i=1; $i<=13; $i++){
        $totalmes = $v1[$i]+$v2[$i]+$v3[$i];
        
        if($totalmes > $maiorMes){
            $maiorMes = $totalmes;
            $posMaiorMes = $i;
        }
        switch  ($i){
            case 1:
                echo "<br/>Total de Janeiro: R$". $totalmes; 
                break;
            case 2:
                echo "<br/>Total de Fevereiro: R$". $totalmes;
                break;
            case 3:
                echo "<br/>Total de Março: R$". $totalmes;
                break;
            case 4:
                echo "<br/>Total de Abril: R$". $totalmes;
                break;
            case 5:
                echo "<br/>Total de Maio: R$". $totalmes;
                break;
            case 6:
                echo "<br/>Total de Junho: R$". $totalmes;
                break;
            case 7:
                echo "<br/>Total de Julho: R$". $totalmes;
                break;
            case 8:
                echo "<br/>Total de Agosto: R$". $totalmes;
                break;
            case 9:
                echo "<br/>Total de Setembro: R$". $totalmes;
                break;
            case 10:
                echo "<br/>Total de Outubro: R$". $totalmes;
                break;
            case 11:
                echo "<br/>Total de Novembro: R$". $totalmes;
                break;
            case 12:
                echo "<br/>Total de Dezembro: R$". $totalmes;
                break;   
        }
       
    }
    echo "<br/>O maior volume de vendas foi no mes de ".$posMaiorMes." e foi um valor de: R$".$maiorMes;
    
    
/*-------------------------------------- FIM Mostre os totais de vendas, mês a mês, da loja --------------------------------------*/
    
    
/*-------------------------------------- Mostre os totais de vendas, por semestre, da loja --------------------------------------*/    
    for($i=1; $i<=6; $i++){
        $tot = $v1[$i]+$v2[$i]+$v3[$i];
        $total1semestre = $total1semestre + $tot;      
    }
    echo "<br/>total primeiro semestre: R$".$total1semestre;
    
    for($i=7; $i<=13; $i++){
        $tot = $v1[$i]+$v2[$i]+$v3[$i];
        $total2semestre = $total2semestre + $tot;      
    }
    echo "<br/>total segundo semestre: R$".$total2semestre;
    
/*-------------------------------------- FIM Mostre os totais de vendas, por semestre, da loja --------------------------------------*/    
    
/*-------------------------------------- Mostre o total de vendas do ano da loja --------------------------------------*/    
    $totalAno = $total1semestre+$total2semestre;
    echo "<br/>Total anual de venda: R$".$totalAno;
/*-------------------------------------- FIM Mostre o total de vendas do ano da loja --------------------------------------*/    
    
/*-------------------------------------- Mostre o total de vendas, por semestre, de cada vendedor --------------------------------------*/ 

    /*CALCULO DO PRIMEIRO SEMESTRE*/
    for($i=1; $i<=6; $i++){
        $total1SemestreV1 += $v1[$i];
        $total1SemestreV2 += $v2[$i];
        $total1SemestreV3 += $v3[$i];
    } 
    echo "<br/>Total de vendas do primeiro semestre do vendedor ".$v1[0]. " é de: R$".$total1SemestreV1;
    echo "<br/>Total de vendas do primeiro semestre do vendedor ".$v2[0]. " é de: R$".$total1SemestreV2;
    echo "<br/>Total de vendas do primeiro semestre do vendedor ".$v3[0]. " é de: R$".$total1SemestreV3;

    /*CALCULO DO SEGUNDO SEMESTRE*/
    for($i=7; $i<=13; $i++){
        $total2SemestreV1 += $v1[$i];
        $total2SemestreV2 += $v2[$i];
        $total2SemestreV3 += $v3[$i];
    } 
    echo "<br/>Total de vendas do segundo semestre do vendedor ".$v1[0]. " é de: R$".$total2SemestreV1;
    echo "<br/>Total de vendas do segundo semestre do vendedor ".$v2[0]. " é de: R$".$total2SemestreV2;
    echo "<br/>Total de vendas do segundo semestre do vendedor ".$v3[0]. " é de: R$".$total2SemestreV3;



/*-------------------------------------- FIM Mostre o total de vendas, por semestre, de cada vendedor --------------------------------------*/  


/*-------------------------------------- Qual o semestre mais rentável da loja (mostre o semestre e o valor)? --------------------------------------*/
    if($total1semestre>$total2semestre){
        echo "<br/>O primeiro semestre foi o mais rentável!";
    }else{
        echo "<br/>O segundo semestre foi o mais rentável!";
    }
/*-------------------------------------- FIM Qual o semestre mais rentável da loja (mostre o semestre e o valor)? --------------------------------------*/
 
 
/*-------------------------------------- Qual o vendedor que mais faturou (mostre o vendedor e o valor)? --------------------------------------*/
    $totalVendedor1 = $total1SemestreV1 + $total2SemestreV1;
    $totalVendedor2 = $total1SemestreV2 + $total2SemestreV2;
    $totalVendedor3 = $total1SemestreV3 + $total2SemestreV3;        
    
    if($totalVendedor1>$totalVendedor2 && $totalVendedor1>$totalVendedor3){
        echo "<br/>O vendedor que obteve a maior venda do ano foi ". $v1[0]. " com um valor de: R$".$totalVendedor1;
    }elseif($totalVendedor2>$totalVendedor1 && $totalVendedor2>$totalVendedor3){
        echo "<br/>O vendedor que obteve a maior venda do ano foi ". $v2[0]. " com um valor de: R$".$totalVendedor2;
    }else{
        echo "<br/>O vendedor que obteve a maior venda do ano foi ". $v3[0]. " com um valor de: R$".$totalVendedor3;
    }
?>
        
        
        
        
    </body>
</html>