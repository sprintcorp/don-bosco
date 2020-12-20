<?php

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
        $Admin = new User();
        $Admin->name = "Bosco Boys";
        $Admin->email = "madetiloye@gmail.com";
        $Admin->password = Hash::make('dominicsavio');
        $Admin->save();
    }
}