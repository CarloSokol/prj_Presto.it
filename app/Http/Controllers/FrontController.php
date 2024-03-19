<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function welcome()
    {

        $announcements = Announcement::where('is_accepted', true)->latest()->take(6)->get();

        // $announcements = Announcement::orderByDesc('created_at')->take(6)->get();

        return view('index', compact('announcements'));
    }

    public function categoryShow(Category $category)
    {
        $announcements = Announcement::where('is_accepted', true)->latest()->get();

        return view('categoryShow', compact('category','announcements'));
    }


    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

        return view('announcements.index', compact('announcements'));
    }

    // public function setLanguage($lang)
    // {
    //     App::setLocale($lang);
    //     Session::put("locale", $lang);
    //     // session()->put('locale', $lang);
    //     return redirect()->back();
    // }

    public function setLanguage($lang)
{
    
session()->put('locale', $lang);
return redirect()->back();
}
}

   



