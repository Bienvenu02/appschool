<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerificationConnectionMultiple extends Notification
{
    use Queueable;

    protected $token, $subject, $view;

    /**
     * Create a new notification instance.
     */
    public function __construct($token, $subject, $view)
    {
        $this->token = $token;
        $this->subject = $subject;
        $this->view = $view;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject($this->subject)
            ->view($this->view, [
                'code' => $this->token,
                'user' => $notifiable,
                'imagePath' => public_path('images/logo/site_logo.png'),
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
