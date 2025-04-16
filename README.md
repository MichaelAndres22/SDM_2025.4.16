# SDM_2025.4.16
# 📚 Librería Laravel CRUD

¡Bienvenido a tu sistema de gestión de libros con Laravel!  
Esta aplicación permite a los usuarios autenticados **crear, ver, editar y eliminar libros** fácilmente.  
Incluye **login, bootstrap, migraciones automáticas y un generador de CRUD**.

---

## ✨ Características

✅ Registro/Login de usuarios  
✅ CRUD completo de libros  
✅ Estilos con Bootstrap  
✅ Protección con middleware (solo usuarios logueados pueden ver los libros)  
✅ Panel de navegación dinámico según sesión  
✅ Instalación sencilla paso a paso

---

## ⚙️ Requisitos

- PHP 8.x  
- Composer  
- MySQL (XAMPP, Laragon, etc)  
- Node.js y NPM  
- Laravel 10+  
- Navegador moderno (Chrome, Firefox, etc)

---

## 🛠️ Instalación rápida

1. Crea un nuevo proyecto Laravel.  
2. Configura tu archivo `.env` con los datos de la base de datos (usa phpMyAdmin para crearla).  
3. Ejecuta las migraciones para crear las tablas necesarias.  
4. Instala Bootstrap y la autenticación (login y registro).  
5. Instala un generador de CRUD para crear la tabla de libros.  
6. Protege las rutas para que solo usuarios logueados puedan ver los libros.  
7. Agrega un enlace directo a la sección de libros en la barra de navegación.

---

## 👀 Ver la app en tu navegador

Accede desde:  
📍 **http://localhost/libreria/public/libros**

---

## 🚀 ¿Cómo desplegar esta app?

Aquí tienes tres formas simples de publicar tu proyecto:

### 🟢 Opción 1: Laravel Forge

- Plataforma oficial de Laravel para despliegues profesionales.
- Conecta tu repositorio y servidor fácilmente (DigitalOcean, Linode, etc).
- Hace el setup completo automáticamente.

### 🔵 Opción 2: Hosting compartido (Hostinger, InfinityFree, 000Webhost)

- Comprime tu proyecto (excepto la carpeta `vendor`).
- Súbelo al servidor en la carpeta `/public_html`.
- Apunta tu dominio a la carpeta `/public`.
- Ejecuta instalación de dependencias desde el panel o SSH.
- Configura correctamente el archivo `.env`.

### 🔴 Opción 3: Desplegar gratis con Render o Railway

- Sube tu proyecto a GitHub.
- Crea una cuenta en Render o Railway.
- Selecciona “Deploy from GitHub”.
- Añade las variables de entorno requeridas.
- Obtendrás una URL pública para compartir tu proyecto.

---

## 🙌 Autor

Hecho con ❤️ por [TuNombre]  
¡Si te fue útil, dale ⭐ al repo!

