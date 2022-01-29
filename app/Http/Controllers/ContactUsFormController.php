<?php

namespace App\Http\Controllers;
use App\Mail\ContactUsFormMailable;
use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller {

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'identification' => 'string|max:255',
            'phone' => 'string|max:15|min:14',
            'message' => 'required|max:500'
        ]);

        ContactForm::create($request->all());

        Mail::queue(new ContactUsFormMailable(
            $request->get('name'),
            $request->get('email'),
            $request->get('identification'),
            $request->get('phone'),
            $request->get('message')));

        return back()->withSuccessMessage('Sua mensagem foi enviada com sucesso! Faremos contato em breve.');
    }

}
