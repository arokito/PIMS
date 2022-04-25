<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\ParishionerController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContributionCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PaymentMethodController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/kwd',function ()
{

    return view('kwd');
}
);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(
    function(){
           Route::get('/getuser',[UserController::class,'getUser'])->name('getuser');
           Route::get('/',[IndexController::class,'index'])->name('index');
           Route::resource('/roles',RoleController::class);
           Route::resource('/permissions',PermissionController::class);
           Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
           Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
           Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
           Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
           Route::get('/users',[UserController::class,'index'])->name('users.index');
           Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
           Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
           Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
           Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
           Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
           Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');





    }
);

Route::middleware(['auth','role:paroko|katibu|sister|admin'])->group(
    function(){
        Route::get('/admin',[IndexController::class,'index'])->name('admin.index');

        Route::get('/getparishioner',[ParishionerController::class,'getParishioner'])->name('getparishioner');


        Route::resource('/zones',ZoneController::class);
        Route::resource('/communities',CommunityController::class);
        Route::resource('/families',FamilyController::class);
        Route::resource('/expenses',ExpenseController::class);
        Route::resource('/categories',ContributionCategoryController::class);
        Route::resource('/methods',PaymentMethodController::class);
        Route::resource('/announcements',AnnouncementController::class);
        Route::resource('/parishioners',ParishionerController::class);
        

        Route::get('download',[UserController::class,'download' ] );

    }

    
);
require __DIR__.'/auth.php';





