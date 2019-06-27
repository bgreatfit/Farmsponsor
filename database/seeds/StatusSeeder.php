<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = collect(['pending', 'success', 'error']);
    	$status->each(function ($name) {
    		factory(App\Models\Status::class)->create(['name' => $name]);
	    });
    }
}
