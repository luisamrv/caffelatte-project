<?php

namespace App\Mail;
use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Subscriber extends Mailable
{
    use Queueable, SerializesModels;
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.to-brand.subscriber')->with([
          'email' =>  $this->request->get('email')
        ])->from($this->request->get('email'))->bcc(env('BRAND_DEVELOPER_EMAIL'))->subject('Caffe Latte | New Subscriber');
    }
}
