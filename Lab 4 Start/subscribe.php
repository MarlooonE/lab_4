<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscribe to Newsletter</title>
</head>
<body>
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Verificar si se proporcionó una dirección de correo electrónico
        if (isset($_GET["emailAddress"]) && !empty($_GET["emailAddress"])) {
            $emailAddress = $_GET["emailAddress"];

            // Aquí puedes realizar acciones adicionales, como almacenar la dirección de correo electrónico en tu base de datos

            // Mostrar un mensaje de éxito
            echo "<p>Gracias por suscribirte a nuestro boletín. Te mantendremos informado.</p>";
        } else {
            // Mostrar un mensaje de error si no se proporciona una dirección de correo electrónico
            echo "<p>Error: Por favor, proporciona una dirección de correo electrónico válida.</p>";
        }
    }
    ?>
</body>
</html>
