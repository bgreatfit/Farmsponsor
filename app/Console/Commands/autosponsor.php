<?php

namespace App\Console\Commands;

use App\Models\Farm;
use App\Models\Sponsor;
use App\Models\Transactionlogs;
use App\User;
use Auth;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Str;

class autosponsor extends Command
{
    const amountPerUnit = 100000;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vestbank:sponsorfarm';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Auto Farm Sponsorship';

    /**
     * @var Sponsor
     */
    private $sponsor;

    /**
     * @var Farm
     */
    private $farm;
    /**
     * @var Transactionlogs
     */
    private $transactionlog;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Sponsor $sponsor, Farm $farm, Transactionlogs $transactionlog)
    {
        parent::__construct();
        $this->sponsor = $sponsor;
        $this->farm = $farm;
        $this->transactionlog = $transactionlog;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Throwable
     */
    public function handle()
    {

        $vestors = User::whereHas('vestbank', function($query){
            $query->where('capital', '>', self::amountPerUnit);
        })->get();

        $farm = $this->farm->latest()->first();

        foreach($vestors as $vestor){

            DB::transaction(function () use ($vestor, $farm){

                $units = floor($vestor->vestbank->balance / self::amountPerUnit);

                if( $units < 1 ){
                    $this->info('Unit less than one');
                    return false;
                }

                $sponsor = $this->sponsor->create([
                    'farm_id' => $farm->id,
                    'units' => $units,
                    'ip_address' => request()->ip(),
                    'user_id' => $vestor->id,
                ]);

                $farm->decrement('units', $units);

                $vestor->vestbank->decrement('capital', $units * self::amountPerUnit);

                // generates a 8digit transaction id for each transaction
                // then tests if a transaction already exist with the token
                // If it does, then it generates another transaction id
                do{
                    $transactionId = rand(10000000,99999999) . Str::random(2);
                }while($this->transactionlog->whereTransactionId($transactionId)->first() != NULL);

                $this->transactionlog->create([
                    'user_id' => $vestor->id,
                    'transaction_id' => $transactionId,
                    'transactionable_id' => $sponsor->id,
                    'transactionable_type' => get_class($sponsor),
                ]);

                return $this->info($vestor);

            });

        }

        $this->info('Done');
    }

}
