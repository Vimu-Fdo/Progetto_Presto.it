<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'body',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }
}

// Abbiamo inserito protected $fillable per indicare i campi che possono essere inseriti nel database da parte dell'utente.
// Abbiamo inserito la funzione category per indicare che un annuncio appartiene ad una categoria usansando belongsTo.
// Abbiamo inserito la funzione user per indicare che un annuncio appartiene ad un utente usansando belongsTo.
// 
