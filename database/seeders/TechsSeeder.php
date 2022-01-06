<?php

namespace Database\Seeders;

use App\Models\Techs;
use Illuminate\Database\Seeder;

class TechsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Techs::factory(10)->create();
    }
}
