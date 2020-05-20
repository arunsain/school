<?php

namespace App\Listeners\Admin;
use App\Mail\Admin\SendTeacherPasswordMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTeacherPassword
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
       // dd($event->data);
        //
        Mail::to($event->data->email)->send(new SendTeacherPasswordMail($event->data));
    }
}
