# SDM_2025.4.16
# 📚 Librería Laravel CRUD

¡Bienvenido a tu sistema de gestión de libros con Laravel!  
Esta aplicación permite a los usuarios autenticados **crear, ver, editar y eliminar libros** fácilmente.  
Incluye **login, bootstrap, migraciones automáticas y un generador de CRUD**.

## ✨ Características

✅ Registro/Login de usuarios  
✅ CRUD completo de libros  
✅ Estilos con Bootstrap  
✅ Protección con middleware (solo usuarios logueados pueden ver los libros)  
✅ Panel de navegación dinámico según sesión  
✅ Instalación sencilla paso a paso


## ⚙️ Requisitos

- PHP 8.x
- Composer
- MySQL (XAMPP, Laragon, etc)
- Node.js y NPM
- Laravel 10+
- Navegador moderno (Chrome, Firefox, etc)


## 🛠️ Instalación paso a paso

### 1. Crear el proyecto Laravel

composer create-project laravel/laravel libreria
2. Configurar la base de datos en .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
Crea esta base de datos en phpMyAdmin antes de continuar.

3. Ejecutar migraciones
bash

php artisan migrate
🎨 Estilos y autenticación
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run dev
⚙️ Generador de CRUD

composer require ibex/crud-generator --dev
php artisan vendor:publish --tag=crud
php artisan make:crud libros
📌 Elige Bootstrap como opción al generar el CRUD.

🔐 Rutas protegidas y acceso
Edita routes/web.php:

php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('libros', LibroController::class)->middleware('auth');
🧭 Agregar enlace en la barra de navegación
En resources/views/layouts/app.blade.php, agrega este bloque dentro del <ul class="navbar-nav me-auto">:

blade

@if (Auth::check())
    <a class="nav-link" href="{{ route('libros.index') }}">📘 Libros</a>
@endif
👀 Ver en el navegador
Abre en tu navegador:
📍 http://localhost/libreria/public/libros

🚀 ¿Cómo desplegar esta app?
Aquí van algunas opciones sencillas para hacer deploy de tu aplicación Laravel:

🟢 Opción 1: Usar Laravel Forge
Es oficial de Laravel

Sube tu código desde GitHub

Te conecta a un servidor (como DigitalOcean, Linode, etc)

Hace todo el setup automático

🔵 Opción 2: Subirlo a un hosting como Hostinger, InfinityFree, 000Webhost:
Comprime todo el proyecto (excepto vendor)

Súbelo al hosting en /public_html

Apunta el dominio a la carpeta /public

Ejecuta composer install desde el panel o vía SSH

Configura .env con tus datos del hosting

🔴 Opción 3: Desplegar gratis con Render o Railway
Sube tu código a GitHub

Crea una cuenta en la plataforma

Elige “Deploy from GitHub repo”

Configura variables de entorno

Te dan una URL pública al instante
