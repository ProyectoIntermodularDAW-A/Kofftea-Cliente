<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacta con Kofftea</title>
    <link rel="stylesheet" href="./styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="form-page">
    <div class="container">
        
        <form>
            <h2>Formulario de Contacto Kofftea</h2>
            
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="email">Correo electrónico:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

            <label for="upload">Adjuntar archivo:</label><br>
            <input type="file" id="upload" name="upload" required><br><br>

            <div class="checkbox-group">
                <input type="checkbox" id="acepto" name="acepto" required> <label for="acepto">Acepto los <a href="#">términos y condiciones</a> y la <a href="#">política de privacidad</a>.</label>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="publicidad" name="publicidad"> <label for="publicidad">Deseo recibir novedades y promociones de Kofftea por correo electrónico.</label>
            </div>


            <button type="submit">Enviar</button>

            <div id="mensaje-estado"></div>
        </form>
    </div>

    <script src="./scripts/form.js"></script>
</body>
</html>
