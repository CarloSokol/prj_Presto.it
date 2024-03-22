<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dei dati del commento
        $request->validate([
            'announcement_id' => 'required|exists:announcements,id',
            'comment' => 'required|string|max:255',
        ]);

        // Creazione di un nuovo commento
        $comment = new Comment();
        $comment->announcement_id = $request->announcement_id;
        $comment->user_id = auth()->id(); // Assumendo che ci sia un sistema di autenticazione degli utenti
        $comment->body = $request->comment;
        $comment->save();

        // Ritorna alla pagina dell'annuncio dopo aver aggiunto il commento
        return redirect()->back()->with('success', 'Commento aggiunto con successo!');
    }
}
