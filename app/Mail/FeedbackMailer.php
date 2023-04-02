<?php

namespace App\Mail;

use App\Http\Requests\SendRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class FeedbackMailer extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    /**
     * Create a new message instance.
     */
    public function __construct( $data)
    {
        $this->data = $data;
    }

  /**
   * @return FeedbackMailer
   */
  public function build (): FeedbackMailer
    {
//      return $this->from('portfolio@example.ru', 'Portfolio')
//        ->subject("Форма обратной связи")
//        ->view('email.feedback', ['data' => $this->data]);

        return $this->from('portfolio@example.ru', 'Portfolio')
          ->view('email.feedback')->with(['name' => $this->data->name]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Feedback Mailer',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
