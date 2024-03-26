<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments'; // Assicurati che il nome della tabella corrisponda al nome effettivo della tabella nel database

    protected $fillable = [
        'announcement_id', // Assicurati che il nome della colonna corrisponda al nome effettivo della colonna nel database
        'user_id',
        'body',
    ];
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
    // Altri attributi del modello e metodi
}
