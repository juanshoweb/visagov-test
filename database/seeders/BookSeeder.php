<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Don Quijote', 'author' => "Megan Marwell"],
            ['title' => 'El libro Negro de las Horas', 'author' => "Eva Garcia Saénz de Urturi"],
        ]);
    }
}
