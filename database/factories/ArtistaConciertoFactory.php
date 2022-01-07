<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artista;
use App\Models\Concierto;
use App\Models\ArtistaConcierto;

class ArtistaConciertoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artista_id'        =>Artista::all()->random()->id,
            'concierto_id'      =>Concierto::all()->random()->id,

        ];
    }
}
