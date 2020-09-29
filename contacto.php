<?php
    //Variables
    string  $nombre = $_POST['nombre'];
    string $email= $_POST['email'];
    string $consuta= $_POST['consulta'];

    echo "Soy tu script de consulta";

    //Estructura del cuerpo del mensaje
    $mensaje   ="
        <strong>Nombre: </strong>$nombre<br/>
        <strong>Email: </strong>$email<br/>
        <strong>Consulta: </strong>$consulta<br/>
    ";

    //Generacion autmatica de mail
    mail(
        'info@misitio.com', //destinatario
        "consulta", //asunto
        $mensaje, //mensaje
        "From:$nombre<$email> \n 
        Reply-To:$email \n
        Content-Type: TEXT/HTML; charset=utf-8" //remitente - extras

    );


    header("location: https://misitio.com");
    

?>
