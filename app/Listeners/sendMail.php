<?php

namespace App\Listeners;

use App\Mail\TestMail;
use App\Events\newMail;
use App\Jobs\TestMailJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(newMail $event): void
    {
        // dd(Auth::user()->name);
        // Mail::to(Auth::user()->email)->send(new TestMail());
        dispatch(new TestMailJob(Auth::user()->email));

    }
}
