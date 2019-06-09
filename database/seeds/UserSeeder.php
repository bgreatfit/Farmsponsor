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
        factory(App\User::class, 10)->create()->each(function($user){
            factory(App\Models\Farm::class, rand(5,10))->create([
                'user_id' => $user->id,
                'status_id' => App\Models\Status::all()->random(1)[0]->id
            ]);

            factory(App\Models\Vestbank::class)->create([
                'user_id' => $user->id,
            ]);

            factory(App\Models\Bank::class)->create([
                'user_id' => $user->id,
                'account_name' => $user->name,
            ]);

            factory(App\Models\Registerlog::class)->create([
                'user_id' => $user->id,
            ]);

            factory(App\Models\Bankdeposit::class, rand(8,15))->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
