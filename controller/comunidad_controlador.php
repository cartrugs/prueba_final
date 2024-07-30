<?php

require_once '../model/comunidad_modelo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

    if ($accion === 'crear') {
        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $poblacion = $_POST['poblacion'];
        $id_administrador = $_POST['id_administrador'];

        // Llamar a la función para agregar comunidad
        $resultado = agregar_comunidad($nombre, $direccion, $poblacion, $id_administrador);

        if ($resultado) {
            $mensaje = "Comunidad dada de alta exitosamente.";
        } else {
            $mensaje = "Error al dar de alta la comunidad.";
        }
        include '../views/confirmacion.php';
    }
} else {
    $administradores = obtener_administradores();
    include '../views/alta_comunidad.php';
}
?>
