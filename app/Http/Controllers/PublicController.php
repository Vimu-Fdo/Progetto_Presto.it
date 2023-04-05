<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category) {
       return view('categories', compact('category'));
    }
}
