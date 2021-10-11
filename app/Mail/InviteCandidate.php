<?php

namespace App\Mail;

use App\Models\Candidate;
use App\Models\Election;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteCandidate extends Mailable
{
    use Queueable, SerializesModels;

    public $election;
    public $candidate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Election $election, Candidate $candidate)
    {
        $this->election = $election;
        $this->candidate = $candidate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.elections.invite-candidate')
            ->subject('Invitation to Contest');
    }
}
