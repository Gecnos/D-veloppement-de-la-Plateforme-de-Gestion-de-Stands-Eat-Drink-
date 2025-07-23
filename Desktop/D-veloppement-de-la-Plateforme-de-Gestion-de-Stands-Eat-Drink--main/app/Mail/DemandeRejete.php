<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class DemandeRejete extends Mailable
{
    public function __construct(public User $user) {}

    public function build()
    {
        return $this->markdown('emails.demande_rejete')
            ->subject('Votre demande a été rejete');
    }
}
