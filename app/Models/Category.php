<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
}

// Abbiamo inserito protected $fillable per indicare i campi che possono essere inseriti nel database da parte dell'utente.
// Abbiamo inserito la funzione announcements per indicare che una categoria ha molti annunci usando hasMany.