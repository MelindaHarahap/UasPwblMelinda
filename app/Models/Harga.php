<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = "hargaBarang";
    protected $fillable = ['nama', 'hargaBarang'];
    use HasFactory;
}
