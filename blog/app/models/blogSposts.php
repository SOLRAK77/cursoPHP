<?php

namespace app\models;
use \Illuminate\Database\Eloquent\Model;

class blogSposts extends Model{
    protected $table = 'BLOG_POST';
    protected $fillable = ['TITULO','CONTENIDO'];
}