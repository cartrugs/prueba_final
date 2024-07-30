<?php

// model/comunidad_modelo.php

require_once 'conexion_comunidad.php';

// Función para obtener administradores
function obtener_administradores() {
    $pdo = conectarBD();
    $stmt = $pdo->query("SELECT id_administrador, nombre FROM Administradores");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para agregar comunidad
function agregar_comunidad($nombre, $direccion, $poblacion, $id_administrador) {
    $nombre = limpiar_datos($nombre);
    $direccion = limpiar_datos($direccion);
    $poblacion = limpiar_datos($poblacion);
    $id_administrador = limpiar_datos($id_administrador);

    $pdo = conectarBD();
    $stmt = $pdo->prepare("INSERT INTO Comunidades (nombre, direccion, poblacion, id_administrador) VALUES (:nombre, :direccion, :poblacion, :id_administrador)");

    return $stmt->execute([
        ':nombre' => $nombre,
        ':direccion' => $direccion,
        ':poblacion' => $poblacion,
        ':id_administrador' => $id_administrador
    ]);
}

// Función para limpiar datos
function limpiar_datos($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
