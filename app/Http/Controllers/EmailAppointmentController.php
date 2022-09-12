<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Time_zone;
use Carbon\Carbon;
use App\Mail\UserAppointment;
use Mail;
use Illuminate\Http\Request;
use Auth;

class EmailAppointmentController extends Controller
{
	protected $appointment;
	protected $correct_time_student;
	protected $correct_date_student;
	protected $correct_time_tutor;
	protected $correct_date_tutor;
	
    public function __construct($appointmentId)
    {
        //return $this->middleware('auth');
		$this->appointment = Appointment::find($appointmentId);
		$slot_time = date(" H:i:s", strtotime($this->appointment->start_time));
		
		$time_zone_id_appointment = ($this->appointment->time_zone_id)? $this->appointment->time_zone_id:387;
		$time_zone_id_student = ($this->appointment->user->time_zone_id)? $this->appointment->user->time_zone_id:387;
		$time_zone_id_tutor = ($this->appointment->instructor->user->time_zone_id)? $this->appointment->instructor->user->time_zone_id:387;
		
		$time_zone_appointment = Time_zone::find($time_zone_id_appointment);
		$time_zone_student = Time_zone::find($time_zone_id_student);
		$time_zone_tutor = Time_zone::find($time_zone_id_tutor);
		
		$slot_time_converted_student = Carbon::createFromFormat('Y-m-d H:i:s' , $this->appointment->date.$slot_time, $time_zone_appointment->time_zone_name)->setTimezone($time_zone_student->time_zone_name);
		$this->correct_time_student = Carbon::parse($slot_time_converted_student)->format('H:i');
		$this->correct_date_student = Carbon::parse($slot_time_converted_student)->format('Y-m-d');
		
		$slot_time_converted_tutor = Carbon::createFromFormat('Y-m-d H:i:s' , $this->appointment->date.$slot_time, $time_zone_appointment->time_zone_name)->setTimezone($time_zone_tutor->time_zone_name);
		$this->correct_time_tutor = Carbon::parse($slot_time_converted_tutor)->format('H:i');
		$this->correct_date_tutor = Carbon::parse($slot_time_converted_tutor)->format('Y-m-d');
    }
    
	/**
     * Book Appointment Email
     */
    public function book()
    {
		$this->appointment->action = 'bookAppointment';
			
		try
		{
			$x = 'Kindly be informed that your lesson with student ('.$this->appointment->user->fname.' '. $this->appointment->user->lname.') at ('.$this->correct_time_tutor.') on ('.$this->correct_date_tutor.') has been booked';
            $y = 'Kindly be informed that your lesson with tutor ('.$this->appointment->instructor->user->fname.' '. $this->appointment->instructor->user->lname.') at ('.$this->correct_time_student.') on ('.$this->correct_date_student.') has been booked';
               
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, 0));
            Mail::to($this->appointment->instructor->user->email)->send(new UserAppointment($x, $this->appointment, 0));
        }
		catch(\Swift_TransportException $e)
		{
            //return back()->with('success',__('adminstaticword.action_done_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration'));
        }
    }
	
	/**
     * Free Appointment Email
     */
    public function free($meetingId)
    {
		$this->appointment->action = 'freeAppointment';
            
		try
		{
			$x = 'Kindly be informed that your lesson with student ('.$this->appointment->user->fname.' '. $this->appointment->user->lname.') at ('.$this->correct_time_tutor.') on ('.$this->correct_date_tutor.') has been booked';
			$y = 'Kindly be informed that your lesson with tutor ('.$this->appointment->instructor->user->fname.' '. $this->appointment->instructor->user->lname.') at ('.$this->correct_time_student.') on ('.$this->correct_date_student.') has been free booked';
				
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, $meetingId));
			Mail::to($this->appointment->instructor->user->email)->send(new UserAppointment($x, $this->appointment, $meetingId));
		}
		catch(\Swift_TransportException $e)
		{
			return back()->with('success',__('adminstaticword.action_done_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration'));
		}
    }
	
	/**
     * Balance Appointment Email
     */
    public function balance($meetingId)
    {
		$this->appointment->action = 'balanceAppointment';
            
		try
		{
			$x = 'Kindly be informed that your lesson with student ('.$this->appointment->user->fname.' '. $this->appointment->user->lname.') at ('.$this->correct_time_tutor.') on ('.$this->correct_date_tutor.') has been booked';
			$y = 'Kindly be informed that your lesson with tutor ('.$this->appointment->instructor->user->fname.' '. $this->appointment->instructor->user->lname.') at ('.$this->correct_time_student.') on ('.$this->correct_date_student.') has been booked with your balance';
				
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, $meetingId));
			Mail::to($this->appointment->instructor->user->email)->send(new UserAppointment($x, $this->appointment, $meetingId));
		}
		catch(\Swift_TransportException $e)
		{
			//return back()->with('success',__('adminstaticword.action_done_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration'));
		}
    }
	
	/**
     * Confirm Appointment Email
     */
    public function confirm($meetingId)
    {
		$this->appointment->action = 'confirmAppointment';
            
		try
		{			
			$x = 'Kindly be informed that your lesson with student ('.$this->appointment->user->fname.' '. $this->appointment->user->lname.') at ('.$this->correct_time_tutor.') on ('.$this->correct_date_tutor.') has been confirmed';
            $y = 'Kindly be informed that your lesson with tutor ('.$this->appointment->instructor->user->fname.' '. $this->appointment->instructor->user->lname.') at ('.$this->correct_time_student.') on ('.$this->correct_date_student.') has been confirmed';
				
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, $meetingId));
			Mail::to($this->appointment->instructor->user->email)->send(new UserAppointment($x, $this->appointment, $meetingId));
		}
		catch(\Swift_TransportException $e)
		{
			//return back()->with('success',__('adminstaticword.action_done_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration'));
		}
    }

    /**
     * Reschedule Appointment Email
     */
    public function reschedule($meetingId)
    {
		$this->appointment->action = 'rescheduleAppointment';
			
		try
		{
            $x = 'Kindly be informed that your lesson with student ('.$this->appointment->user->fname.' '. $this->appointment->user->lname.') has been rescheduled to ('.$this->correct_time_tutor.') on ('.$this->correct_date_tutor.')';
            $y = 'Kindly be informed that your lesson with tutor ('.$this->appointment->instructor->user->fname.' '. $this->appointment->instructor->user->lname.') has been rescheduled to ('.$this->correct_time_student.') on ('.$this->correct_date_student.')';
            
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, $meetingId));
			Mail::to($this->appointment->instructor->user->email)->send(new UserAppointment($x, $this->appointment, $meetingId));
        }
		catch(\Swift_TransportException $e)
		{
			return redirect()->to('/mylessons/'.auth()->id())->with('success',__('adminstaticword.action_done_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration'));
		}
    }
	
	/**
     * Cancel Appointment Email
     */
    public function cancel()
    {
		$this->appointment->action = 'cancelAppointment';
			
		try
		{
			$x = 'Kindly be informed that your lesson with student ('.$this->appointment->user->fname.' '. $this->appointment->user->lname.') at ('.$this->correct_time_tutor.') on ('.$this->correct_date_tutor.') has been canceled';
			$y = 'Kindly be informed that your lesson with tutor ('.$this->appointment->instructor->user->fname.' '. $this->appointment->instructor->user->lname.') at ('.$this->correct_time_student.') on ('.$this->correct_date_student.') has been canceled';
               
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, 0));
            Mail::to($this->appointment->instructor->user->email)->send(new UserAppointment($x, $this->appointment, 0));
        }
		catch(\Swift_TransportException $e)
		{
            //return back()->with('success',__('adminstaticword.action_done_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration')
        }
    }
	
	/**
     * End Meeting Email
     */
    public function endMeeting($tutorId)
    {
		$this->appointment->action = 'endMeeting';
			
		try
		{			
			$y = 'Hello (' . $this->appointment->user->fname . ' ' . $this->appointment->user->lname . ') Kindly be informed that your lesson with Tutor (' . $this->appointment->instructor->user->fname . ' ' . $this->appointment->instructor->user->lname . ')is Done If you Need anything else , please just let us Know..';
            
			Mail::to($this->appointment->user->email)->send(new UserAppointment($y, $this->appointment, $tutorId));
        }
		catch(\Swift_TransportException $e)
		{
			return back()->with('success', __('adminstaticword.meeting_ended_successfully').' '.__('adminstaticword.but').' '.__('adminstaticword.email_will_not_sent_because_of_error_in_mail_configuration'));
		}
    }
}