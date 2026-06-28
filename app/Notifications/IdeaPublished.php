<?php

namespace App\Notifications;

use App\Models\Idea;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class IdeaPublished extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Idea $idea)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Hello!')
            ->line('You published a new idea: ' . $this->idea->description)
            ->action('Read it', url('/ideas/' . $this->idea->id))
            ->line('Thank you for using our app!');
    }
}