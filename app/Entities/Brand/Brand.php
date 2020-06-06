<?php

namespace Loja\Entities\Brand;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = [
        'name'
    ];
}
