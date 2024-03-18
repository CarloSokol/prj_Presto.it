<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;


class RevisorController extends Controller
{
    public function index()
{
    $announcements_to_check = Announcement::whereNull('is_accepted')->get();
    return view('revisor.index', compact('announcements_to_check'));
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

    public function removeAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(null);
        return redirect()->back()->with('message', 'Hai rimosso l\'annuncio');
    }

    public function becomeRevisor()
    {
        return view('work-with-us.work-with-us');
    }

    public function sendRevisor(Request $request)
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $request->get('description')));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore');
    }

    public function MakeRevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();

        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato un revisore');
    }
}
