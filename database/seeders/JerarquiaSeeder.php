<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JerarquiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jerarquias = ['BRO CDO', 'BRO SUP', 'SUBTENIENTE', 'TENIENTE', 'CAPITAN'];

        foreach($jerarquias as $jerarquia) {
            DB::table('jerarquias')->insert([
                'rango'=> $jerarquia
            ]);
        }
    }
}
