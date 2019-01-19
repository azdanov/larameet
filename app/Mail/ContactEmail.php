<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Mail\Mailable;

final class ContactEmail extends Mailable
{
    /** @var array|string[] */
    public $contact = [];

    /**
     * @param string[] $contact
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    public function build(): self
    {
        return $this->to($this->contact['email'])
            ->subject('HackerPair Inquiry')
            ->markdown('email.contact');
    }
}
