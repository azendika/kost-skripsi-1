<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiKos extends Model
{
    use HasFactory;

    protected $table = 'lokasi_kos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'nama_kos',
        'jumlah_kamar',
        'alamat_kos'
    ];

    // Kamar.php (Kamar model)
    public function kamars()
    {
        return $this->hasMany(Kamar::class, 'kost_id');
    }

}
