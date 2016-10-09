<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    
    protected $table = "produtos";
    public $timestamps = false;
    /*Quais atributos podem ser populados*/
    protected $fillable = array("nome", "descricao", "valor", "quantidade");
    /*Impedir que o usuário altere o id de seu modelo.*/
    protected $guarded = ["id"];
}
