<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $announcements = Announcement::orderBy('created_at' , 'desc')->take(6)->get();/* take(6)->get()->orderBy('created_at'); */
       
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category) {
       return view('categories', compact('category'));
    }
}
