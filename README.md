# prueba_final

1. Mostrar formulario para dar de alta un vecino.
    - Campos del formulario:
        - Nombre
        - Escalera
        - Piso
        - Puerta
        - Selección de comunidad (lista desplegable)
    - Botón de envío que envía el formulario a vecino_controlador.php con la acción crear.

2. En vecino_controlador.php:
    - Verificar el método de solicitud.
    - Si el método es POST y la acción es crear:
        - Obtener los datos del formulario.
        - Llamar a la función agregar_vecino en el modelo.
        - Mostrar vista confirmacion.php con mensaje de éxito o error.

3. En vecino_modelo.php:
    - Función agregar_vecino que inserta un nuevo vecino en la base de datos.

4. En confirmacion.php:
    - Mostrar mensaje de éxito o error.
