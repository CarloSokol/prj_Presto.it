<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {

        $announcements = Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');

        // $announcements = Announcement::orderByDesc('created_at')->take(6)->get();

        return view('index', compact('announcements'));
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}
