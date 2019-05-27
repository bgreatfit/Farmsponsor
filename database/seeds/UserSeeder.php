[<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create()->each(function($user){
            factory(App\Models\Farm::class, rand(5,10))->create([
                'user_id' => $user->id,
                'status_id' => App\Models\Status::all()->random(1)[0]->id
            ]);
        });
    }
}
