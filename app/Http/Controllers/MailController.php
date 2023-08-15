<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\TestMail;
use App\Jobs\TestMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmails(){
        $emails=User::select('email')->chunk(50,function($data){
            $emails = $data->pluck('email')->toArray();
            dispatch(new TestMailJob($emails));
        });
        return('done');
       
        // $data='admin@gmail.com';
        // dispatch(new TestMailJob($data));
        // return('done');
     


        // $emails=User::select('email')->get();
        // foreach($emails as $mails)
        // {
        
        //         Mail::to($mails)->send(new TestMail());

        // }
    }


}
