<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
   public function createAnnouncement()
   {

      if (!auth()->check()) return response('Non sei autenticato', 403);

      return view('announcements.create');
   }
}
