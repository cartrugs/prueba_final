<?php
require_once '../model/comunidad_modelo.php';
// Obtener administradores para la lista desplegable
$administradores = obtener_administradores();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Comunidad</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>
<body class="container">
    <h1 class="mt-4">Alta de Nueva Comunidad</h1>
    <form action="../controller/comunidad_controlador.php" method="post" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" id="direccion" name="direccion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="poblacion" class="form-label">Población:</label>
            <input type="text" id="poblacion" name="poblacion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_administrador" class="form-label">Administrador:</label>
            <select id="id_administrador" name="id_administrador" class="form-select" required>
                <option value="" disabled selected>Seleccione un administrador</option>
                <?php foreach ($administradores as $administrador): ?>
                    <option value="<?= htmlspecialchars($administrador['id_administrador']); ?>"><?= htmlspecialchars($administrador['nombre']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="accion" value="crear">
        <button type="submit" class="btn btn-primary">Dar de Alta <i class="fa-solid fa-arrow-up"></i></button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
