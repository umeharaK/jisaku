<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\ResetPassword;

class UserResetPassword extends Notification
{
    use Queueable;

    /**
    * The password reset token.
    * 
    * @var string
    */
    public $token;

    /**
     * Create a new notification instance.
     *
     * @param string $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
            ->subject('パスワード再設定')
            ->greeting('平素よりアプリをご利用いただきありがとうございます')
            ->line('下のボタンをクリックしてパスワードを再設定してください。')
            ->action(__('パスワードを再設定'), url("http://127.0.0.1:8000".route('password.reset', $this->token, false)))
            // ->action(__('パスワードを再設定'), url(config('app.url').route('password.reset', $this->token, false)))
            ->line('もしこのメールに心当たりがない場合は、そのまま削除してください。');
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
