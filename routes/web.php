<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\HealthCenterController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SampleStatusController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeSectionOneController;
use App\Http\Controllers\HomeSectionTwoController;
use App\Http\Controllers\HomeSectionThreeController;
use App\Http\Controllers\HomeSectionFourController;
use App\Http\Controllers\HomeSectionFiveController;
use App\Http\Controllers\HomeSectionSixController;
use App\Http\Controllers\ChatBotController;

  
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/help', [PageController::class, 'help'])->name('help');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');
Route::get('/guideline', [PageController::class, 'guideline'])->name('guideline');
  
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('health', HealthCenterController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('samples', SampleController::class);
    Route::resource('status', SampleStatusController::class);
    Route::get('/category',[SampleStatusController::class,"category"]);
    Route::get('/users/{user_id}/approve', [UserController::class,'approve'])->name('users.approve');
    Route::get('/users',[UserController::class,"index"])->name('users.index');
    Route::get('/approval',[HomeController::class,"approval"])->name('approval');
    //Route::get('/home',[HomeController::class,"index"])->name('home');
    

    //Page controller
    Route::resource('home_section_ones', HomeSectionOneController::class);
    Route::resource('home_section_twos', HomeSectionTwoController::class);
    Route::resource('home_section_threes', HomeSectionThreeController::class);
    Route::resource('home_section_fours', HomeSectionFourController::class);
    Route::resource('home_section_fives', HomeSectionFiveController::class);
    Route::resource('home_section_sixes', HomeSectionSixController::class);

});

Route::post('send',[ChatBotController::class,'sendChat']);


// Route::middleware(['auth'])->group(function () {
//     Route::get('/approval',[HomeController::class,"approval"])->name('approval');
//     Route::get('/home',[HomeController::class,"index"])->name('home');

// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/approval',[HomeController::class,"approval"])->name('approval');

//     Route::middleware(['approved'])->group(function () {
//         Route::get('/home',[HomeController::class,"index"])->name('home');
//     });
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/approval',[HomeController::class,"approval"])->name('approval');

//     Route::middleware(['approved'])->group(function () {
//         Route::get('/home',[HomeController::class,"index"])->name('home');
//     });

//     Route::middleware(['admin'])->group(function () {
//         Route::get('/users',[UserController::class,"index"])->name('users.index');

//         Route::get('/users/{user_id}/approve', [UserController::class,'approve'])->name('users.approve');
//     });
// });