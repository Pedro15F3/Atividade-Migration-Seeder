<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'Name'=>'Pedro',
            'DateOfBirth'=>'2004/01/02',
            'Email'=>'pedrokolody30@gmail.com',
            'RegistrationNumber'=>'42999195638',
            'ClassCourse'=>'TADS',
        ]);
    }
}
