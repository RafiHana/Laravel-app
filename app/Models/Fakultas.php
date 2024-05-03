<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $tables = 'fakultas';
    public $timestamps = true;
    public $fillable = ['nama_fakultas'];
}
