<?php

namespace App\Jobs;
use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Auth;

class TestMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $email;
     public function __construct($email)
    {
        // dd('hi');
        $this->email = $email;
        // dd($this->data);
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Log::info('Starting TestMailJob execution.');

        // dd($this->data);
        Mail::to($this->email)->send(new TestMail());
        
    }
}
