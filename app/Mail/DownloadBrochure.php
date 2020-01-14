<?php

namespace App\Mail;
use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DownloadBrochure extends Mailable
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
        return $this->view('mail.to-brand.download-brochure')->with([
            'product_name' =>  $this->request->get('product_name'),
            'name' =>  $this->request->get('name'),
            'email' =>  $this->request->get('email'),
            'phone' => $this->request->get('phone'),
            'country' =>  $this->request->get('country'),
            'city' =>  $this->request->get('city'),
            'occupation' => $this->request->get('occupation'),
            'company' => $this->request->get('company')
        ])->from($this->request->get('email'))->bcc(env('BRAND_DEVELOPER_EMAIL'))->subject('Caffe Latte | Download Brochure');
    }
}
