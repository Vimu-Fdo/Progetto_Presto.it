<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $categories = [
            'Informatica',
            'Elettronica',
            'Telefonia',
            'Abbigliamento',
            'Scarpe',
            'Giocattoli',
            'Libri',
            'Musica',
            'Film',
            'Sport',
            'Bellezza',
            'Casa',
            'Giardinaggio',
            'Animali',
            'Bambini',
            'Arredamento',
            'Veicoli',
            'Immobili',
            'Servizi',
            'Altro',
        ];

        foreach ($categories as $category) {
            Category::create(['name'=>$category]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};


// Nella funzione up() creiamo la tabella categories con il campo name per il nome della categoria
// Abbiamo inseerito $categories con un array di categorie
// Abbiamo creato un foreach per ciclare l'array e inserire le categorie nel database in base al nome