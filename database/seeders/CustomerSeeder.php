<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'first_name' => 'Jayani',
                'last_name' => 'Hettiarachchi',
                'email' => 'jayanihettiarachchi98@gmail.com',
                'username' => 'JayaniKH98',
                'password' => Hash::make('Jayani@123')
            ],
            [
                'first_name' => 'Kavindya',
                'last_name' => 'Widanapathirana',
                'email' => 'kavindyawidanapathirana98@gmail.com',
                'username' => 'KavindyaW98',
                'password' => Hash::make('Kavindya@123')
            ],
        ];

        foreach ($customers as $customer) {
            Customer::insert([
                'first_name' => $customer['first_name'],
                'last_name' => $customer['last_name'],
                'email' => $customer['email'],
                'username' => $customer['username'],
                'password' => $customer['password'],
            ]);
        }
    }
}
