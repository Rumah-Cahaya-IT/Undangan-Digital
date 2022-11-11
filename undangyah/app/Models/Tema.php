<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $fillable = [
        'tema_id',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function temas()
    {
        return $this->belongsTo(Temas::class);
    }
}
