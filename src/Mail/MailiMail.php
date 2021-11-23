<?php

namespace Maili\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailiMail extends Mailable
{
	use Queueable, SerializesModels;

	public $mail = null;

	public function __construct(object $mail)
	{
		$this->mail = $mail;
	}

	public function build()
	{
		return $this->view('maili::emails.maili.email')->subject($this->mail->subject ?? 'Welcome!');
	}
}