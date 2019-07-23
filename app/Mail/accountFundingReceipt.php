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

    public $bankfunding;
    public $fileName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bankfunding $bankfunding, $fileName)
    {
        $this->bankfunding = $bankfunding;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.vestbank.accountFundingReceipt')
            ->attach($this->fileName, [
                'as' => 'Account Funding Receipt.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
