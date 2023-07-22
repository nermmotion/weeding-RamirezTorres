<?php
    // Obtiene los datos del formulario
    $name 		= $_POST['name'];
    $email 		= $_POST['email'];
    $assistance = $_POST['assitance-wedding'];
    $guests 	= $_POST['guests'];
    $message 	= $_POST['message'];

    $output 	= "Name: ".$name."\n\nEmail: ".$email."\n\Asistencia: ".$assistance."\n\nInvitados: ".$guests."\n\nMessage: ".$message;

    $to 		= 'nerm.animator@gmail.com';
    $headers	= 'FROM: "'.$email.'"';

    $send		= mail($to, $fname, $output."\n\nEste mensaje fue enviado por ", $headers);
?>