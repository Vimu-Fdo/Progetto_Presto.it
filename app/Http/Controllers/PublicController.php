<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at' , 'desc')->take(6)->get();
       
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category) {
       return view('categories', compact('category'));
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announcements.index', compact('announcements'));

    }

    public function setLocale($lang) {

        session()->put('locale', $lang);
        return redirect()->back();
    }
}

// Abbiamo inserito la funzione home per mostrare la welcome page.
// Abbiamo inserito orderBy per mostrare gli annunci in ordine decrescente.
// Abbiamo inserito take per mostrare solo 6 annunci.
