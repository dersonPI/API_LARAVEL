<?php

/**MODELO DA TABLEA PARA GUARDAR AS INFORMAÇÕES NO BANCO DE DADOS
 * 
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;
    protected $table ='spaces';
    protected $fillable = ['data'=>'array','imported_t','status'];
}
