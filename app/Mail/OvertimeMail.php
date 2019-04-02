<?php

namespace App\Mail;

use App\Models\Overtime;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OvertimeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Overtime $overtime)
    {
        $this->overtime = $overtime;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Erfassung Überstunden / Minusstunden";

        return $this->from(\Auth::getUser()->email)
            ->subject($subject)
            ->view('_mails.overtime')
            ->with([
                'overtime_at' => $this->overtime->overtime_at,
                'started_at' => $this->overtime->started_at,
                'ended_at' => $this->overtime->ended_at,
                'overtime_minutes' => $this->overtime->overtime_minutes,
            ]);
    }
}
