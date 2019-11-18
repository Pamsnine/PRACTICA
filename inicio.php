<?php
    function factorial($numero=5){
        $acu=1;
        for($i=1;$i<=$numero;$i++){
            $acu*=$i;
        }
        echo"<h1>El factorial es:".$acu."</h1>";
    }

    function manejoArreglos(){
        $agentes = array('AG1','AG2','AG3');
        $numero = array('cero'=>0,'uno'=>1,'dos'=>2);
        
        echo $agentes[1]."<br>";
        echo $numero ['dos'];
    }

    function fecha(){
        $fecha = date ("j/n/Y H:i");
        print("$fecha");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>PAGINA DE INICIO</h1>
    </center>

    <?php
        fecha();
        factorial(5);
        manejoArreglos();
    ?>

</body>
</html>