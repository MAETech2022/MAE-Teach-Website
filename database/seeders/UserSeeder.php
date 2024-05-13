<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Employer;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => '123456',
            'email_verified_at' =>  currentDateTimeInsert(),

        ]);

    }
}
