<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mempelaiwanita extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama',
        'panggilan',
        'nama_ayah',
        'nama_ibu',
        'instagram',
        'facebook',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
