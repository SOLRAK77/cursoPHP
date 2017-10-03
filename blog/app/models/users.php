<?php

namespace app\models;
use \Illuminate\Database\Eloquent\Model;

class users extends Model{
    protected $table = 'USUARIOS';
    protected $fillable = ['NOMBRE','EMAIL','CONTRASENA'];
}