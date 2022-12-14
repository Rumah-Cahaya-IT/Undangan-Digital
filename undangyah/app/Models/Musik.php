<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;

    protected $fillable = [
        'musik',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
