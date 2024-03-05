<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $announcements = Announcement::orderByDesc('created_at')->take(6)->get();

        return view('index', compact('announcements'));
    }
}
