<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nomguerra' => 'Usuário Teste',
            'desemail'  => 'teste@loja.com',
            'dessenha'  => md5('jxn9sid4'),
        ]);
    }
}
