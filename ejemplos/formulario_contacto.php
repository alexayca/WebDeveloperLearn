<?php
require("./formulario_contacto_mail.php");
function validate_data($name, $email, $subject, $message, $form) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}
// <!-- los alert se deben mostrar segun el caso de status -->
$status = "";

if ( isset($_POST["form"]) ) {

    // operador splat en PHP (token ...)
    // denota que la función acepta un número variable de argumentos.
    // Los argumentos serán pasados a la variable dada como un aryay.
    // https://www.php.net/manual/es/functions.arguments.php#functions.variable-arg-list
    if ( validate_data(...$_POST) ) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body="name <$email> te envia el siguiente mensaje: <br><br>$message";

        // TODO: sanitizar los datos
        // Mandar el correo mail(); requiere tener un servidor de correo
        // phpmailer package se puede descargar con composer
        // se recomienda ignorar por git la carpeta vendor
        sendMail($subject,$body,$email,$name,true);

        $status = "success";

    }
    else {
        $status = "danger";
    }
   
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario_contacto.css">
    <title>Formulario de contacto</title>
</head>
<body>

    <?php if($status == "danger"): ?>
    <div class="alert danger">
        <span>Surgió un problema</span>
    </div>
    <?php endif; ?>

    <?php if($status == "success"): ?>
    <div class="alert success">
        <span>¡Mensaje enviado con éxito!</span>
    </div>
    <?php endif; ?>

    <form action="#" method="POST">

        <h1>¡Contáctanos!</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>

        <div class="contact-info">
            
            <div class="info">
                <!-- el tag i funciona para agregar los iconos -->
                <span><i class="fas fa-map-marker-alt"></i> 13 Saw Mill Circle, North Olmested.</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> +1 123 456 7890</span>
            </div>

        </div>

    </form>

    <!-- 
        https://fontawesome.com/ 
        https://tailwindcss.com/
        https://icons8.com/line-awesome
        -->
    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
    
</body>
</html>