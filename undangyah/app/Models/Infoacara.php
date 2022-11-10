<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infoacara extends Model
{
    use HasFactory;

    protected $fillable = [
        'zona',
        'status_akad',
        'tanggal_akad',
        'waktu_akad',
        'alamat_akad',
        'status_resepsi',
        'tanggal_resepsi',
        'waktu_resepsi',
        'alamat_resepsi',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
