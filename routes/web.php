<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroPersonaWebController;
use App\Http\Controllers\RegistroProductoWebController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShoppingCartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//--------------------------------------------
//ruta listar personas
Route::get('/lista-personas',
 [PersonaController::class, 'listarPersona']
)->name('lista-personas');

Route::delete('/eliminar-personas/{id_persona}',
 [PersonaController::class, 'eliminarPersona']
)->name('eliminar.persona');

Route::get('/mostrar-persona/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar.persona');

Route::get('/editar-persona/{id_persona}',
[PersonaController::class, 'editarPersona']
)->name('editar.persona');

Route::put('/actualizar-persona/{id_persona}',
[PersonaController::class, 'actualizarPersona']
)->name('actualizar.persona');
//--------------------------------------------

//ruta listar productos
Route::get('/lista-productos',
 [ProductoController::class, 'listarProducto']
)->name('lista-productos');

Route::delete('/eliminar-productos/{id_producto}',
 [ProductoController::class, 'eliminarProducto']
)->name('eliminar.producto');

Route::get('/lista-productos/{id_producto}',
[ProductoController::class, 'mostrarProducto']
)->name('mostrar.producto');

Route::get('/editar-producto/{id_producto}',
[ProductoController::class, 'editarProducto']
)->name('editar.producto');

Route::put('/actualizar-producto/{id_producto}',
[ProductoController::class, 'actualizarProducto']
)->name('actualizar.producto');

//----------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina-web');
//-----------------------------------------------------------------
Route::get('/pagina-web/registro-persona',
[RegistroPersonaWebController::class, 'registroPersona']
)->name('registro.persona');

Route::get('/pagina-web/registro-producto',
[RegistroProductoWebController::class, 'registroProducto']
)->name('registro.producto');

Route::post('/pagina-web/guardar-persona',
[RegistroPersonaWebController::class, 'guardarPersona']
)->name('guardar.persona');

Route::post('/pagina-web/guardar-producto',
[RegistroProductoWebController::class, 'guardarProducto']
)->name('guardar.producto');
//-----------------------------------------------------------------

// Ruta Exportar Pdf-persona

Route::get('/pdf-personas',[PdfController::class, 'exportarPdfPersonas'])
->name('pdf.personas');
//-----------------------------------------------------------------
// Ruta Exportar Pdf-producto

Route::get('/pdf-productos',[PdfController::class, 'exportarPdfProductos'])
->name('pdf.productos');
//-----------------------------------------------------------------


// Ruta de restricción de vistas y de inicio de sesión

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function () {
    // Rutas protegidas

    Route::get('/lista-personas', [PersonaController::class, 'listarPersona'])->name('lista-personas');
    Route::get('/lista-productos', [ProductoController::class, 'listarProducto'])->name('lista-productos');
    Route::get('/pagina-web', [PaginaWebController::class, 'verPaginaWeb'])->name('pagina-web');
    Route::get('/paginaweb', [PaginaWebController::class, 'index'])->name('paginaweb');
});

Route::get('/paginaweb', [IndexController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog-detail/{id}', [BlogDetailController::class, 'show'])->name('blog-detail');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product-detail/{id}', [ProductDetailController::class, 'show'])->name('product-detail');

Route::get('/shoping-cart', [ShoppingCartController::class, 'index'])->name('shoping-cart');
