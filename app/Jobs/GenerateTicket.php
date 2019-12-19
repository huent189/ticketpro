<?php

namespace App\Jobs;

use App\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;

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
        $this->generatePDFTickets();
    }

    public function generatePDFTickets()
    {
        // $data = [
        //     'order'     => $this->booking,
        //     'event'     => $this->booking->event,
        //     //xem lai cho nay
        //     // 'tickets'   => $this->event->tickets,
        //     'attendees' => $this->booking->attendees,
        //     'css'       => file_get_contents(public_path('css/ticket_pdf.css')),
        //     'image'     => base64_encode(file_get_contents(public_path($this->booking->event->organizer->profileImage))),
        // ];
        // Wkhtml2pdf::setOutputMode('F');
        // Wkhtml2pdf::html('front-end.ticket.PDFTicket', $data, public_path($this->booking->pdfTicketPath)); 
        // return view('front-end.ticket.PDFTicket', $data);
        // error_log(print_r($data));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('front-end.ticketPdf', [])->save(public_path('/ticket_pdf/test123.pdf'));
    }
}
