<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "nome"=>"Outro Nome de Testes",
            "email"=>"emailde@teste.com",
            "senha"=>Hash::make("12345678")
        ]);
    }
}
