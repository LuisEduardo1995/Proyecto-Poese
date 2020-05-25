<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('usuario', function(){
    
    return datatables()->eloquent(App\models\seguridad\Usuario::query())
    ->addColumn('btn', 'includes/boton-datatable')
    ->rawColumns(['btn'])
    ->toJson();

});
