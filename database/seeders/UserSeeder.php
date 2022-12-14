<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'admin';
        $inputan['email'] = 'admin@gmail.com';
        $inputan['password'] = Hash::make('password');
        $inputan['phone'] = '080097561234';
        $inputan['alamat'] = 'kediri';
        $inputan['role'] = 'admin';
        User::create($inputan);
    }
}
