<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable=['Titulo','Edicao','Ano','Editora_idEditora','Categoria_idCategoria'];
    protected $primaryKey = 'idLivro';
protected $guarded = ['idLivro','created_at','updated_at','deleted_at'];
    protected $table='livros';

//    public $timestamps = true;
}
