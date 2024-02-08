<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}

