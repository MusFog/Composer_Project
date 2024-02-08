<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class AddressFactory extends Factory
{

    public function definition()
    {

        return [
            'addressline1' => '123 Main Street',
            'addressline2' => 'Main Street',
            'city' => 'Kyiv',
            'province' => 'Kyiv2',
            'phone' => '1234567890',
            'postal' => '12345',
        ];
    }

}
