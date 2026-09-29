<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'message.required' => 'Deskripsi wajib diisi.',
            'message.min' => 'Deskripsi minimal 10 karakter.',
        ]);

        Mail::to(config('mail.contact_recipient'))->send(new ContactMessage(
            name: $validated['name'],
            email: $validated['email'],
            company: $validated['company'] ?? null,
            messageText: $validated['message'],
        ));

        return to_route('contact')->with('contact_success', 'Terima kasih, pesan Anda berhasil dikirim.');
    }
}
