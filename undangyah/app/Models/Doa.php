<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
