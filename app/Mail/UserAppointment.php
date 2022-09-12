<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAppointment extends Mailable
{
    use Queueable, SerializesModels;
    public $x, $request, $meetingid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($x, $request, $meetingid =null)
    {
        $this->x = $x;
        $this->request = $request;
        $this->meetingid = $meetingid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        dd($this->request->all());
        if (isset($this->request->page)){

            return $this->markdown('email.resumeVerification')->subject('Review Documents');

        }

        if (isset($this->request->tutorId)){
            return $this->markdown('email.reviews')->subject('Reviews');

        }
        if (strstr($this->x, "status")){
//            dd( "Found!");
            return $this->markdown('email.statusChange')->subject('Account Status');

        }
        if ($this->request->review == 'reviewMail'){

            return $this->markdown('email.newReviews')->subject('Review tutor');


        }
		
		if(isset($this->request->action))
		{
			if($this->request->action == 'bookAppointment')
			{
				return $this->markdown('email.bookAppointment')->subject('Book Appointment');
			}
			elseif($this->request->action == 'freeAppointment')
			{
				return $this->markdown('email.freeAppointment')->subject('Free Appointment');
			}
			elseif($this->request->action == 'balanceAppointment')
			{
				return $this->markdown('email.balanceAppointment')->subject('Balance Appointment');
			}
			elseif($this->request->action == 'confirmAppointment')
			{
				return $this->markdown('email.confirmAppointment')->subject('Confirm Appointment');
			}
			elseif($this->request->action == 'rescheduleAppointment')
			{
				return $this->markdown('email.rescheduleAppointment')->subject('Reschedule Appointment');
			}
			elseif($this->request->action == 'cancelAppointment')
			{
				return $this->markdown('email.cancelAppointment')->subject('Cancel Appointment');
			}
			elseif($this->request->action == 'endMeeting')
			{
				return $this->markdown('email.newReviews')->subject('Review Tutor');
			}
        }


        return $this->markdown('email.userAppointment')->subject('Request Appointment');
    }
}
