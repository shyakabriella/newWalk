<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\SkeduleController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;


/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/

  
Route::get('/', [PageController::class, 'homepage'])->name('/');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/app', [PageController::class, 'app'])->name('app');
Route::resource('apply', ApplicationController::class);
//Route::resource('applications', 'ApplicationController');
Route::get('/api/applications/count', [DashboardController::class, 'getApplicationCounts']);


Route::get('/generate-pdf', [ReportController::class, 'generatePdf']);
Route::get('/generate-excel', [ReportController::class, 'generateExcel']);



Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');
Route::patch('/applications/approve/{id}', [ApplicationController::class, 'approve'])->name('applications.approve');
Route::patch('/applications/reject/{id}', [ApplicationController::class, 'reject'])->name('applications.reject');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('event', EventController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('requirements', RequirementController::class);
Route::resource('skedules', SkeduleController::class);
Route::resource('report', ReportController::class);

});

