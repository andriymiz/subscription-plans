<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([[
            'name' => 'Plan A',
            'max_clients' => 10,
        ], [
            'name' => 'Plan B',
            'max_clients' => 20,
        ], [
            'name' => 'Plan C',
            'max_clients' => 30,
        ]]);
    }
}
