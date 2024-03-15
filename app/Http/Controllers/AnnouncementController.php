<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function createAnnouncement(?Category $category = null)
    {
        if (!auth()->check()) {
            return response('Non sei autenticato', 403);
        }

        return view('announcements.create', compact('category'));
    }

    public function showAnnouncement(Announcement $announcement)
    {
        if (!auth()->check()) {
            return response('Non sei autenticato', 403);
        }

        return view('announcements.show', compact('announcement'));
    }

    public function indexAnnouncement()
    {
        $announcements = Announcement::where('is_accepted', true)->paginate(6); 

        // $announcements = Announcement::paginate(6);

        return view('announcements.index', compact('announcements'));
    }
}

// 16:01
