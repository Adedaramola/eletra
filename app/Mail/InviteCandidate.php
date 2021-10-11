<?php

namespace App\Mail;

use App\Models\Candidate;
use App\Models\Election;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class InviteCandidate extends Mailable
{
    use Queueable, SerializesModels;

    public $election;
    public $candidate;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Election $election, Candidate $candidate)
    {
        $this->election = $election;
        $this->candidate = $candidate;
        $this->url = URL::signedRoute(
            'candidate.apply',
            [
                'election_id' => $election->id,
                'position' => $candidate->position,
                'email' => $candidate->email,
                'candidate_code' => $election->candidate_code
            ]
        );
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
