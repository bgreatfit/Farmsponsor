<?php

namespace App\Console\Commands;

use App\Models\Vestbank;
use Illuminate\Console\Command;

class autosponsor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sponsor:auto';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Auto Farm Sponsorship';

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

        $vestors = Vestbank::where('standing_order', '=', 1)->get();

        foreach($vestors as $vestor){
            $rate = 0.0004167;


            $dailyInterest = $vestor->capital * $rate;

            $vestor->increment('interest', $dailyInterest);

        }

        $this->info('Vestbanking Updated');
    }
}
