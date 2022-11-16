<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    protected $table = 'testis';
    protected $guarded = ['id'];
    use HasFactory;
}
