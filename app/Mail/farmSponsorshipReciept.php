<?php

namespace App\Mail;

use App\Models\Sponsor;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class farmSponsorshipReciept extends Mailable
{
    use Queueable, SerializesModels;

    public $sponsor;
    public $fileName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Model $sponsor, $fileName)
    {
        $this->sponsor = $sponsor;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.farm.sponsorshipReceipt')
            ->attach($this->fileName, [
                'as' => 'Sponsorship Receipt.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
