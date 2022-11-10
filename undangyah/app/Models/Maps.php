<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    use HasFactory;

    protected $fillable = [
        'maps',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
