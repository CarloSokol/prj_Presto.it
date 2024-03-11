<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
   public function createAnnouncement()
   {

      if (!auth()->check()) return response('Non sei autenticato', 403);

      return view('announcements.create');
   }

   public function showAnnouncement (Announcement $announcement)
   {
      return view('announcements.show', compact('announcement' ) );
   }

   public function indexAnnouncement(){

      $announcements = Announcement::where('is_accepted', true)->paginate(6);

      // $announcements = Announcement::paginate(4);

      return view('announcements.index', compact('announcements'));
   }

}

// 16:01