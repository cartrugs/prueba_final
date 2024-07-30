<?php
function conectarBD() {
    // Datos de conexión a la base de datos
    $host = 'localhost';
    $dbname = 'PruebaPractica';
    $username = 'root';
    $password = '';

    try {
        // Crear una nueva instancia de PDO para la conexión a la base de datos
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        // Configurar el manejo de errores para que lance excepciones en caso de errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Devolver el objeto PDO para que pueda ser utilizado en otras partes del código
        return $pdo;
    } catch (PDOException $e) {
        // Capturar cualquier excepción PDO y mostrar un mensaje de error
        die("Error en la conexión: " . $e->getMessage());
    }
}
?>
