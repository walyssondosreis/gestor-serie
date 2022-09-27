<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    /* Propriedade fillable é utilizada para informar ao método
    create quais campos devem ser capturados de um formulario
    que venha ser gravado no banco. Atribuição em massa.*/
    protected $fillable = ['nome'];
    // protected $primaryKey = 'id';
    // protected $with = ['temporadas'];

    public function temporadas()
    {
        // return $this->hasMany(Season::class,'series_id','id');
        return $this->hasMany(Season::class,'series_id');
    }
    
    protected static function booted()
    {
        self::addGlobalScope('ordered', function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome','desc');
        });
    }
}


