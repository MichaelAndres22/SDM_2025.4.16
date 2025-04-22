# SDM_2025.4.16
## 📚 Librería Laravel CRUD

¡Bienvenido a tu sistema de gestión de libros con Laravel!  
Esta aplicación permite a los usuarios autenticados **crear, ver, editar y eliminar libros** fácilmente.  
Incluye **login, bootstrap, migraciones automáticas y un generador de CRUD**.

---

## ✨ Características

- ✅ Registro/Login de usuarios  
- ✅ CRUD completo de libros  
- ✅ Estilos con Bootstrap  
- ✅ Protección con middleware (solo usuarios logueados pueden ver los libros)  
- ✅ Panel de navegación dinámico según sesión  
- ✅ Instalación sencilla paso a paso

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

1. **Clona el proyecto desde GitHub:**  
   Usa el siguiente comando para clonar el repositorio:  
   
   git clone https://github.com/tuusuario/libreria-laravel.git

2. **Instala las dependencias de Composer:** 
    Ejecuta el siguiente comando en la raíz del proyecto para instalar las dependencias de Laravel:

   composer install

3. **Instala las dependencias de Node.js y compila los assets:**
    Ejecuta los siguientes comandos para instalar las dependencias de NPM y compilar los assets con Laravel Mix:

   npm install
   npm run dev

4. **Configura el archivo .env:**
    Crea un archivo .env copiando el archivo .env.example:

   cp .env.example .env
  Luego, configura los detalles de la base de datos (por ejemplo, usando phpMyAdmin o tu gestor favorito).

5. **Genera la clave de la aplicación:**
  Ejecuta el siguiente comando para generar la clave de la aplicación:

    php artisan key:generate

6. **Ejecuta las migraciones:**
  Corre las migraciones para crear las tablas necesarias en tu base de datos:

   php artisan migrate


👀 Ver la app en tu navegador
Accede desde:
📍 http://localhost/libreria/public/libros

🙌 Autor
Hecho con ❤️ por Michael Pillaga
¡Si te fue útil, dale ⭐ al repo!

