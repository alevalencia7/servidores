<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
        'nombre'=>('estructura de datos'),
        'autor'=>('luis joyanes'),
    ]);
        DB::table('libro')->insert([
        'nombre'=>('programacion orientada a objetos'),
        'autor'=>('luis joyanes'),
    ]);
    }
}
