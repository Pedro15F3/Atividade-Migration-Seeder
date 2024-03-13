<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'Title'=>'a volta dos que não foram',
            'AuthorPublisher'=>'Gabrel',
            'PublicationDate'=>'2000/07/31',
            'GenreType'=>'ficção',
            'AvailableCopies'=>'1000',
        ]);
    }
}
