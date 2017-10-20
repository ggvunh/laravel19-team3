<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Booking;

class SendMailController extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $booking;
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('hotels.bookings.sendmail')->with(['userMail' => $this->booking->booking_code]);

    }
}
