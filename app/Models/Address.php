<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    use HasFactory;
    protected $fillable = [
        'addressline1',
        'addressline2',
        'city',
        'province',
        'phone',
        'postal',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

