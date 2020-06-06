<?php

namespace Loja\Entities\Categorie;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];
}
