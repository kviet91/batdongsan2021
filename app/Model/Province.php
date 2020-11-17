<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = [
        'name',
        'type',
        'slug',
        'name_with_code',
        'code',
    ];
}
