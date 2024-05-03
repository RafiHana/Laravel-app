<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
        protected $tables = 'prodis';
        public $timestamps = true;
        public $fillable = ['nama_prodi', 'fakultas_id'];
        public function fakultas(){
        return $this->hasOne(Fakultas::class, 'id', 'fakultas_id');
    }
}
