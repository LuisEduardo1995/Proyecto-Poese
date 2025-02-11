<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "permiso";
    protected $fillable = ['responsabilidad'];
    protected $guarded = ['id'];

    public function roles(){
        return $this->belongsToMany(Rol::class, 'permiso_rol', 'permiso_id', 'rol_id');
    }
}
