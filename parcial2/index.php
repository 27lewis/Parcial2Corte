<?php
require_once 'PersonFactory.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ministerio de Educación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ministerio de Educación</h1>

    <form method="post" action="">
        Ingrese su edad:
        <input type="number" name="edad" required>
        <input type="submit" value="Ver formulario">
    </form>

    <hr>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $edad = $_POST['edad'];

        
        $persona = PersonFactory::crearPersona($edad);

        
        $persona->imprimirFormulario();
    }
    ?>
</body>
</html>
