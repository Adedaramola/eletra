<?php

namespace App\Mail;

use App\Models\Election;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ElectionCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $election;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Election $election)
    {
        $this->user = $user;
        $this->election = $election;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.elections.election_created')
            ->subject('New Election Created');
    }
}
