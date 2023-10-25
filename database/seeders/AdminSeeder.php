<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as  Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    
    {
        $admins = [
            [
                'name' => 'Mohamed',
                'surname' => 'Jebali',
                'email' => 'mohamedjebali992010@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => 'password123',
            ],
            [
                'name' => 'Jane',
                'surname' => 'Smith',
                'email' => 'jane.smith@example.com',
                'password' => 'securepwd456',
            ],
            [
                'name' => 'Alice',
                'surname' => 'Johnson',
                'email' => 'alice.johnson@example.com',
                'password' => 'mysecretpassword',
            ],
        ];

        foreach ($admins as $admin) {
            $newAdmin = new Admin();
            $newAdmin->name = $admin['name'];
            $newAdmin->surname = $admin['surname'];
            $newAdmin->email = $admin['email'];
            $newAdmin->password = Hash::make($admin['password']);
            $newAdmin->save();
        }
    }
}
