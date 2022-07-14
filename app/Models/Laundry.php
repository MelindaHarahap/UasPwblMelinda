<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'Laundrys';
    protected $fillable = ['nama_pel', '/kg', 'hargaBarang'];
    use HasFactory;
}
