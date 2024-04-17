<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class FollowUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public User $user,public bool $follow = true)
    {
        //
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
        // return (new MailMessage)
        //             ->lineIf($this->follow,'"user"'.$this->user->name. 'has followed you.')
        //             ->lineIf(!$this->follow,'"user"'.$this->user->name. 'has Unfollowed you.')

        //             ->action('view profile', url('User/Profile/'.$this->user.'/profile'))
        //             ->line('Thank you for using our application!');

        $action = $this->follow ? 'has followed' : 'has unfollowed';

        return (new MailMessage)
            ->from('hunterdreaded@gmail.com', 'Dreaded Hunter')
            ->line('"' . $this->user->name . '" ' . $action . ' you.')
            ->action('View Profile', url('User/Profile/'.$this->user.'/profile'))
            ->line('Thank you for using our application!');
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
