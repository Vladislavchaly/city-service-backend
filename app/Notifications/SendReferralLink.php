<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendReferralLink extends Notification
{
    use Queueable;

    private string $refToken;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $refToken)
    {
        $this->refToken = $refToken;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($notifiable->name. 'Thank you so much for your interest in the Gadget Medics Giveaway program.')
            ->line( 'Every day we try to find out how we can give back to our community. And we found a perfect way.')
            ->line('With a giveaway program, you are not only helping us to grow but also will have a chance to win
            a grand prize. Every month the award will be different. It can be a laptop, an iPad, or something else.
            Also, at the end of the year, we will have a grand prize.')
            ->line('Your unique link is:')
            ->action('unique link', url('/'.$this->refToken))
            ->line('The rules are pretty simple:')
            ->line('1. Repair your sick gadget with us.')
            ->line('2. Tell your friends how great we are by sharing your unique link on social media.')
            ->line('3. Wait for your friends to perform a repair.')
            ->line('At the end of each month, we will have one winner who will get a prize.')
            ->line('So, more people come, more chances to win.')
            ->line('It’s that simple!')
            ->line('We want to thank you again for supporting our business.')
            ->line('Have a wonderful day');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
