<?php
    function datosPersonales(){
        $nombre = "Pamela";
        $apellido = "Criollo";
        $direccion  = "Av. Jose Peralta S12-86 y James Siverwright";
        $telefono = "0987862112";
        $email = "pamsnine@hotmail.com";

        return $nombre." ".$apellido;
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    ul{
        list-style-type: none;
        margin:0;
        padding:o;
        display:flex;
        flex-direction: row;
        flex-direction: column;
        }

    li { flex-grow: 1; }
    a {
        display:block;
        padding: lem;
        background-color:LightGray;
        text-align:center;
        margin-right:0.2em;
        margin-bottom:0.2em;
        text-decoration:none;
        color:#000000;
        }
        a:hover{background-color:lighcoral;}

        body{
        color: blue;
        background: white;
        }
    
        h1 {
        color: black;
        font-size: 1.4em;
        background-color: #CCC;}
    </style>

</head>
<body>
    <center>
    <strong><h1>CUERPO DE AGENTES DE CONTROL METROPOLITANO QUITO</h1></strong>
    <img src="\practica\images\logoagentes.jpg" alt="Logo CACMQ">
    </center>
    <br>
    <nav>
         <ul>
             <li> <a target="_blank" href="\practica\clases\inicio.php">Inicio</a></li>
             <li> <a target="_blank" href="\practica\clases\inicio.php">Noticias</a></li>
             <li> <a target="_blank" href="\practica\clases\inicio.php">Contacto</a></li>
             <li> <a target="_blank" href="\practica\clases\inicio.php">Quienes Somos</a></li>
        </ul>
    </nav>
    <br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid est a iusto alias, 
        incidunt odit provident tempore dolorum eveniet <b>aliquam<b> ex ab pariatur fugit! Minus,
        suscipit at excepturi earum voluptate dolorem voluptatum eos ad vitae explicabo atque! 
        Ducimus illo earum necessitatibus, dolorem assumenda expedita quae dolor consectetur 
        eveniet esse rerum!
    </p>
    <br>
    <table>
        <tr>
            <th></th>
            <th>columna 1</th>
            <th>columna 2</th>
            <th>columna 3</th>
        </tr>
        <tr>
            <th>Alemania</th>
            <td>14567</td>
            <td>876544</td>
            <td>876588</td>
        </tr>
        <tr>
            <th>Euador</th>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <th>Colombia</th>
            <td>aaaa</td>
            <td>bbbb</td>
            <td>cccc</td>
        </tr>
    </table>

    <br>
    <address>
    <a href="https://cuerpodeagentesdecontrolquito.gob.ec/">Abrir CACMQ</a>
    </address>
    <br>
    <script tipe="text/javascript">
        document.write(new Date());
    </script>

    

    <br>
    <?php
        echo(datosPersonales());
    ?>
</body>
</html>