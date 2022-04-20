<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'detail',
        'salary'
    ];
}

