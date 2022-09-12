<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Messenger_message;
use App\Events\MessageSent;
use App\Messenger_thread;
use App\User;
use App\Notification;
use App\Messenger_participant;
use Carbon\Carbon;

class ChatController extends Controller
{
    public function getChat($user_id)
    {
        $messages = Messenger_message::where('sender_id' , Auth::user()->id )->where('user_id', $user_id)
        ->orWhere(function($query) use($user_id) {
            $query->where('user_id' , Auth::user()->id )
            ->where('sender_id', $user_id); 
        })->orderBy('id', 'asc')->get();

        $user = User::find($user_id);
        
        return view('frontend.chat',compact('messages','user'));
    }

    public function sendMessage(Request $request)
    {
        $thread = Messenger_thread::create(
            [
                'subject' => 'Message To Tutor',

            ]
        );
        // Message
        $message = Messenger_message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => $request->reciever_id,
                'sender_id' => Auth::user()->id,
                'body'      => $request->message,
            ]
        );

        Messenger_participant::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => $request->reciever_id,
                'sender_id' => Auth::user()->id,
                'last_read' => new Carbon,
            ]);
        
        $receipientUser = User::find($request->reciever_id);
        $notification = new Notification;
        $notification->type = 6;
        $notification->notifiable_type  = "Instructor" ;
        $notification->notifiable_id  = $request->reciever_id;
        $notification->data  = "You have a new message";
        $notification->save();

        $broadcast = event(new MessageSent($receipientUser, $message ));

        \Session::flash('flash_message_success', __('adminstaticword.sent_successfully'));

        return redirect()->route('get.chat', $request->reciever_id)->with('message', __('adminstaticword.sent_successfully'));
    }
}
