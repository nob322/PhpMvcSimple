<!-- views/user_view.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($user->getName()); ?>!</h1>
</body>
</html>
