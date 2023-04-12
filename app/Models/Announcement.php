<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use App\Models\Announcement;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        'title', 
        'body',
        'price',
    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $category
        ];
        return $array;
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}

// Abbiamo inserito protected $fillable per indicare i campi che possono essere inseriti nel database da parte dell'utente.
// Abbiamo inserito la funzione category per indicare che un annuncio appartiene ad una categoria usansando belongsTo.
// Abbiamo inserito la funzione user per indicare che un annuncio appartiene ad un utente usansando belongsTo.
// 
