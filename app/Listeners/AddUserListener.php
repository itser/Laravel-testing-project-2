<?php

namespace App\Listeners;

use App\Events\onAddUser;
use App\Mail\NewUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class AddUserListener
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
     * @param  onAddUser  $event
     * @return void
     */
    public function handle(onAddUser $event)
    {
        if (isset($event->user->email) && $event->user->email){
            Mail::to($event->user->email)->send(new NewUser());
        }
    }
}
