<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $resetPasswordUrl;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $resetPasswordUrl
     */
    public function __construct($user, $resetPasswordUrl)
    {
        $this->user = $user;
        $this->resetPasswordUrl = $resetPasswordUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reset_password_vi')
            ->subject(__('Reset Password'));
    }
}
