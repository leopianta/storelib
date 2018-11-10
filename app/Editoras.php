<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editoras extends Model
{
    protected $fillable=['Nome','Sigla'];
    protected $primaryKey = 'idEditora';
    protected $guarded = ['idEditora'];
    protected $table='editora';

//    public $timestamps = false;
}
