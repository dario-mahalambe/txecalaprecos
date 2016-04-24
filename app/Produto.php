<?php namespace txecala_laravel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

protected  $fillable = ['id','nome', 'titulo', 'descricao','preco', 'local'];

}
