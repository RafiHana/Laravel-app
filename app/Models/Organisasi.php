<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;
        protected $tables = 'organisasis';
        public $timestamps = true;
        public $fillable = ['nama_organisasi', 'nama_ketua', 'fakultas_id', 'nama_prodi'];
        public function fakultas(){
        return $this->hasOne(Fakultas::class, 'id', 'fakultas_id');
        }
        public function prodi(){
        return $this->hasOne(Prodi::class, 'id', 'nama_prodi');
        }
}
