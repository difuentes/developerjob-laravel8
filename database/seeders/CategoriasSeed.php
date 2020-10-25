<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre'=>'Front end',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Back end',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'FullStack developer',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'React ',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'React Native',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'NodeJS',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        
    }
}
