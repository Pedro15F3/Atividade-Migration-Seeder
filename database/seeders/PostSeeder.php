<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'PostTitle'=>'por que voltar para ficante',
            'Author'=>'Emanuel',
            'PublicationDate'=>'2024/03/11',
            'Content'=>'muita coisa',
            'Tags'=>'love',
        ]);
    }
}
