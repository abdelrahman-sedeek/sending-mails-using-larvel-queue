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
        $email=array('abdurhamansedeek@gmail.com', 'test2@gmail.com');
        foreach($email as $mail)
        {
            
            dispatch(new TestMailJob($mail));
          
        }
        
       
    }


}
