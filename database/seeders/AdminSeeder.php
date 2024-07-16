<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'first_name' => 'Jayani',
                'last_name' => 'Hettiarachchi',
                'email' => 'jayanihettiarachchi98@gmail.com',
                'password' => Hash::make('Jayani@123')
            ],
        ];

        foreach ($admins as $admin) {
            Admin::insert([
                'first_name' => $admin['first_name'],
                'last_name' => $admin['last_name'],
                'email' => $admin['email'],
                'password' => $admin['password'],
            ]);
        }
    }
}
