<?php

namespace App\Console\Commands;

use App\Models\Vestbank;
use Illuminate\Console\Command;

class vestbanking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vestbank:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update vestbanking daily roi';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $vestors = Vestbank::all();

       foreach($vestors as $vestor){
           $rate = 0.0004164;


           $dailyInterest = $vestor->capital * $rate;

           $vestor->increment('interest', $dailyInterest);

       }

        $this->info('Vestbanking Updated');
    }
}
