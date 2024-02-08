<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $user = User::factory()->create();


        Address::factory()->create(['user_id' => $user->id]);
    }
}
