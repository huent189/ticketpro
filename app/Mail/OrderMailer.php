<?php

namespace App\Mail;

use App\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class OrderMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function sendOrderTickets(Booking $booking){
        $data = [
            'event' => $booking->event,
            'attendees' => $booking->attendees,
        ];
        Mail::send('front-end.ticketPdf', $data, function ($message) use ($booking){
            $message->to($booking->email);
            $message->subject('Mua vé thành công');
        });
    }
    public function build()
    {
        return $this->view('front-end.ticketPdf');
    }
}
