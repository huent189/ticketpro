<?php

namespace App\Jobs;

use App\Booking;
use Barryvdh\DomPDF\PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateTicket implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $booking;
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
    }

    public function generatePDFTickets()
    {
        $data = [
            'order'     => $this->booking,
            'event'     => $this->event,
            //xem lai cho nay
            'tickets'   => $this->event->tickets,
            'attendees' => $this->attendees,
            'css'       => file_get_contents(public_path('assets/css/ticket_pdf.css')),
            'image'     => base64_encode(file_get_contents(public_path($this->booking->event->organiser->profileImage))),
        ];
        $pdf = PDF::loadView('front-end.ticket.PDFTicket', $data)->save(public_path($this->booking->pdfTiketPath));
    }
}
