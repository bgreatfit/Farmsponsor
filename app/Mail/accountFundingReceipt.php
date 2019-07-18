<?php

namespace App\Mail;

use App\Models\Bankfunding;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class accountFundingReceipt extends Mailable
{
    use Queueable, SerializesModels;

    protected $bankfunding;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bankfunding $bankfunding)
    {
        $this->bankfunding = $bankfunding;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.vestbank.accountFundingReceipt');
    }
}
