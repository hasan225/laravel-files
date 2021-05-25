<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10; $i++) {
            # code...

        DB::table('members')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'address'=>Str::random(10),
            'value'=>str::random(10),
            ]);
            }
    }
}
