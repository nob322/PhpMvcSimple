<?php
// index.php
require_once 'controllers/UserController.php';

$name = isset($_GET['name']) ? $_GET['name'] : 'Invitado';
$view = isset($_GET['view']) ? $_GET['view'] : 'user';

// Instanciar el controlador
$controller = new UserController();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación MVC</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?name=<?php echo htmlspecialchars($name); ?>&view=welcome">Bienvenida</a></li>
            <li><a href="index.php?view=about">Acerca de</a></li>
            <li><a href="index.php?view=contact">Contacto</a></li>
        </ul>
    </nav>

    <?php
    // Cargar la vista correspondiente
    if ($view === 'welcome') {
        $controller->showWelcome($name);
    } elseif ($view === 'about') {
        $controller->showAbout();
    } elseif ($view === 'contact') {
        $controller->showContact();
    } else {
        $controller->showUser($name);
    }
    ?>
</body>
</html>
