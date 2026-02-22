<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1️⃣ Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        // 2️⃣ Enregistrer en base
        $contact = Contacts::create($request->all());

        // 3️⃣ Envoyer email
        Mail::to('ortegaeditor@gmail.com')->send(new ContactMessage($contact));

        // 4️⃣ Retour avec message de succès
        return back()->with('success', 'Message envoyé avec succès.');
    }
}
