<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\ContactMailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    private $contactEmail;

    public function __construct()
    {
        $this->contactEmail = 'reservaciones@hotelcasinoplaza.mx';
    }

    public function sendContactEmail(ContactMailRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->contactEmail)->send(new ContactMail($data));

        return redirect()->back()->with('success', 'El mensaje se ha enviado correctamente');
    }
}
