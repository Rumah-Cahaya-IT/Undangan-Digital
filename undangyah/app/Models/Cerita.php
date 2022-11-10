<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_cerita',
        'cerita',
        'status_laramaran',
        'lamaran',
        'status_nikah',
        'nikah',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
