<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'file'
    ];

    public function tema()
    {
        return $this->hasMany(Tema::class, 'temas_id');
    }
}
