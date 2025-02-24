<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produc extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    protected $table = 'produc';
}
