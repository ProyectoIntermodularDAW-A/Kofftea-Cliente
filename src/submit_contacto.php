<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errores = []; // Guardará los errores que se vayan generando.
    
    if (!isset($_POST["nombre"], $_POST["email"], $_POST["mensaje"])) {
        die("Error: Completar los campos faltantes en el formulario.");
    }

    // Validación de los inputs.

    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ''), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(trim($_POST["mensaje"] ?? ''), ENT_QUOTES, 'UTF-8');

    if(empty($nombre) || strlen($nombre) < 3) $errores[] = "Nombre inválido.";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "Email inválido.";
    if (empty($mensaje)) $errores[] = "El mensaje no puede estar vacío.";

    
    // Validación archivo adjunto.

    if (isset($_FILES["upload"]) && $_FILES["upload"]["error"] === UPLOAD_ERR_OK) {
        $permitidos = ['jpg', 'jpeg', 'png', 'pdf'];
        $ext = strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));

        if (!in_array($ext, $permitidos)) {
            $errores[] = "Formato de archivo no permitido.";
        }

        if ($_FILES["upload"]["size"] > 2 * 1024 * 1024) {
            $errores[] = "El archivo no puede superar los 2MB.";
        }
    }

    // Validación de los checkbox.

    if (empty($_POST["acepto"])) $errores[] = "Debes aceptar los términos y condiciones.";
    $publicidad = isset($_POST["publicidad"]) ? 1 : 0;

    // Imprime los errores, en caso de que haya alguno.
    if(!empty($errores)) {
        foreach($errores as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "Formulario validado correctamente";
    }

} else {
    die("Método no permitido.");
}