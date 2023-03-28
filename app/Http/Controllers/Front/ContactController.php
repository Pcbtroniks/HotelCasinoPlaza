<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\EventContactMailRequest;
use App\Http\Requests\Front\ContactMailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventContactMail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    private $contactEmail;
    private $eventContactEmail;

    public function __construct()
    {
        $this->contactEmail = 'reservaciones@hotelcasinoplaza.mx';
        $this->eventContactEmail = 'ejecutivaventas@hotelcasinoplaza.mx';
    }

    public function sendContactEmail(ContactMailRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->contactEmail)->send(new ContactMail($data));

        return redirect()->back()->with('success', 'El mensaje se ha enviado correctamente');
    }

    public function sendEventContactEmail(EventContactMailRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->eventContactEmail)->send(new EventContactMail($data));

        return redirect()->back()->with('success', 'El mensaje se ha enviado correctamente');
    }
}
