<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Aquí puedes implementar la lógica para enviar el correo
        // O bien almacenar el mensaje en la base de datos
        // Por ejemplo, enviar un correo:

        Mail::send([], [], function ($message) use ($request) {
            $message->to('tuemail@ejemplo.com')
                ->subject('Nuevo mensaje de contacto')
                ->setBody('Nombre: ' . $request->name . '<br>Email: ' . $request->email . '<br>Mensaje: ' . $request->message, 'text/html');
        });

        return back()->with('success', 'Tu mensaje ha sido enviado.');
    }
}
