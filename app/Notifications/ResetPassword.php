<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    use Queueable;

    public $user;
    public $token;
    public $email;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, $token, $email)
    {
        $this->user = $user;
        $this->token = $token;
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Trust your day is going on well, in the bid to serve you better we had a major upgrade on our website 
                                    which also betters our security, kindly click on the link below to reset your password.')
                    ->action('Reset Password', route('user.reset', ['token' => $this->token, 'email' => $this->email]))
                    ->line('if you have successfully gone through this process, please repeat the process again, We apologize for any inconvenience this may sprout')
                    ->line('All previous transactions and data supplied to us with respect to sponsorships and vestbanking are safe.')
                    ->line('We look forward to a more secure future together!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}



