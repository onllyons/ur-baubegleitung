<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $message = ContactMessage::create($data);

        Mail::to('info@ur-baubegleitung.de')->send(new ContactMessageMail($message));

        return back()->with('success', 'Vielen Dank! Ihre Nachricht wurde gesendet.');
    }
}
