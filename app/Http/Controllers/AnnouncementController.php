<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     * Abbiamo inserito la funzione indexAnnouncement per mostrare tutti gli annunci.
     * Abbiamo inserito la orderBy per mostrare gli annunci in ordine decrescente.
     * Abbiamo inserito la paginate per mostrare 6 annunci per pagina dopodiche si passa alla pagina successiva.
     */
    public function indexAnnouncement()
    {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at' , 'desc')->paginate(6);
       /*  $announcements=Announcement::paginate(5); */
        return view('announcements.index' , compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showAnnouncement(Announcement $announcement)
    {
        
     return view('announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
