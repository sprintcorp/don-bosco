<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new User();
        $superAdmin->name = "Bosco Boys";
        $superAdmin->email = "madetiloye@gmail.com";
        $superAdmin->password = Hash::make('dominicsavio');
        $superAdmin->save();
    }
}