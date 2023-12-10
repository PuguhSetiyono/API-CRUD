<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;
    
    public $primaryKey = 'id_sampah';
    protected $fillable = ['jenis_sampah', 'keterangan'];
}
