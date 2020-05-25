<?php

use App\models\admin\Permiso;
use Illuminate\Database\Eloquent\Builder;

if (!function_exists('getMenuActivo')) {
    function getMenuActivo($ruta)
    {
        if (request()->is($ruta) || request()->is($ruta . '/*')) {
            return 'menu-open';
        } else {
            return '';
        }
    }
}

if (!function_exists('getSubMenuActivo')) {
    function getSubMenuActivo($ruta)
    {
        if (request()->is($ruta) || request()->is($ruta . '/*')) {
            return 'active';
        } else {
            return '';
        }
    }
}

if (!function_exists('canUser')) {
    function can($permiso, $redirect = true)
    {
        if (session()->get('rol_tipo_usuario') == 'Administrador'){
            return true;
        }else {
            $rolId = session()->get('rol_id');
            $permisos = cache()->tags('permiso')->rememberForever("permiso.rolid.$rolId", function(){
                return Permiso::whereHas('roles', function ($query) {
                    $query->where('rol_id', session()->get('rol_id'));
                })->get()->pluck('responsabilidad')->toArray();
            });
            if (!in_array($permiso, $permisos)) {
                if ($redirect){
                    if($redirect){
                        if (!request()->ajax())
                        return redirect()->route('home')->with('mensaje', 'No tienes permiso para entrar en este modulo')->send();
                        abort(403, 'No tienes permiso');
                    }else {
                        return false;
                    }
                }
                return true;
            }
        }
    }

}