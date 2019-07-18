<?php

namespace App\Mail;

use App\Models\WithdrawalLog;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class fundsWithdrawalReceipt extends Mailable
{
    use Queueable, SerializesModels;


    public $withdrawal;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(WithdrawalLog $withdrawal)
    {
        $this->withdrawal = $withdrawal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.vestbank.accountWithdrawalReceipt');
    }
}
