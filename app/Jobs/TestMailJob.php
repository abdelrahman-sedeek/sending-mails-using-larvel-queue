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

class TestMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $data;
     public function __construct($data)
    {
        // dd('hi');
        $this->data = $data;
        // dd($this->data);
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Log::info('Starting TestMailJob execution.');

        // dd($this->data);
        foreach($this->data as $email)
        {
            Mail::to($email)->send(new TestMail());

        }
    }
}
