<?php
$to = "lulyalvarinas@hotmail.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['nombre y apellido'];
$email = $_POST['email'];
$comment = $_POST['¿qué estas buscando?']; 


$comments = $_POST['¿que estas buscando?'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>Nombre del usuario: $name </p> 
<p>Email: $email </p> 
<p>Comentarios: $comments </p> 
</body>
</html>";
 echo '¡gracias!';
mail($to, $subject, $message, $headers);
?>