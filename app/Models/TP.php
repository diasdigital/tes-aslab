<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TP extends Model
{

    protected $table = 'tugas_pendahuluan';

    protected $fillable = [
        'judul',
        'subjudul',
        'kategori',
        'deadline',
        'deskripsi'
    ];

    use HasFactory;
}
