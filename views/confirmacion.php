<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>
<body class="container">
    <h1 class="mt-4">Confirmación</h1>
    <div class="alert alert-info mt-4">
        <?= htmlspecialchars($mensaje); ?>
    </div>
    <a href="../views/alta_comunidad.php" class="btn btn-primary"> <i class="fa-solid fa-arrow-left"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
