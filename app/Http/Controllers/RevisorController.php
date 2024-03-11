<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }
    public function becomeRevisor(){
        return view('work-with-us.work-with-us');
        Mail::to('admin@presto.it')->send(new becomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore');
    }
    public function MakeRevisor(User $user) {
        
        Artisan::call('presto:makeUserRevisor', ["email" =>$user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato un revisore');
        
    }
}
