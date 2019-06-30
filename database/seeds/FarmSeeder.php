<?php

use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Models\Farm::class, 20)->create()->each(function($farm){});
    }
}
