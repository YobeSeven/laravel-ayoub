<?php

namespace App\Http\Controllers\Mail;

use App\Mail\MailSender;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request)
    {
        Mail::to(`test@test.com`)->send(new MailSender($request));
        return redirect()->back();
    }

}
