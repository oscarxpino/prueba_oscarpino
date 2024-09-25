# prueba_oscarpino
Prueba Tecnica Fullstack (Laravel, Vue.js)

## Parte 1: API RESTful con Laravel

### Descripción
La Parte 1 del proyecto consiste en la creación de una API RESTful utilizando Laravel, diseñada para gestionar un recurso de `productos`. Esta API permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre la base de datos de productos.

### Endpoints de la API

- **GET /api/products**
  - Descripción: Obtiene una lista de todos los productos.
  - Devuelve un JSON con todos los productos disponibles.

- **GET /api/products/{id}**
  - Descripción: Obtiene un producto específico por su ID.
  - Devuelve un JSON con los detalles del producto o un mensaje de error si no se encuentra.

- **POST /api/products**
  - Descripción: Crea un nuevo producto en la base de datos.
  - Datos requeridos: `name`, `description`, `price`, `stock`.
  -  Devuelve el producto creado en formato JSON.

- **PUT /api/products/{id}**
  - Descripción: Actualiza un producto existente.
  - Datos requeridos: Se puede enviar cualquier campo para actualizar.
  - Devuelve el producto actualizado o un mensaje de error si no se encuentra.

- **DELETE /api/products/{id}**
  - Descripción: Elimina un producto de la base de datos.
  - Devuelve un mensaje confirmando la eliminación o un mensaje de error si no se encuentra.

### Estructura de la Tabla `products`
- `id`: entero (autoincremental)
- `name`: cadena (requerido)
- `description`: texto (requerido)
- `price`: decimal (requerido, mayor a 0)
- `stock`: entero (requerido, mayor o igual a 0)

### Controlador `ProductController`
El controlador `ProductController` maneja la lógica para procesar las solicitudes a la API. Implementa validaciones para garantizar que los datos recibidos sean correctos y se devuelvan las respuestas adecuadas.

### Conclusiones
Esta parte del proyecto demuestra cómo construir una API RESTful en Laravel, proporcionando una base sólida para la gestión de productos y permitiendo futuras extensiones y mejoras.
![image](https://github.com/user-attachments/assets/655aff0c-c64a-4c48-8bcc-1854e6a37e87)
