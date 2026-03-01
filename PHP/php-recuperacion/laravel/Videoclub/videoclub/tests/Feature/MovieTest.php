<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Director;
use App\Models\Genre;
use App\Models\Movie;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_movies_index_loads()
    {
        $response = $this->get(route('movies.index'));
        $response->assertStatus(200);
    }

    public function test_movies_create_loads_with_directors()
    {
        Director::create(['nombre' => 'Director 1', 'fecha_nacimiento' => '1990-01-01']);
        $response = $this->get(route('movies.create'));
        $response->assertStatus(200);
        $response->assertViewHas('directors');
    }

    public function test_store_creates_movie_and_redirects()
    {
        $director = Director::create(['nombre' => 'Director Test', 'fecha_nacimiento' => '1990-01-01']);
        $data = [
            'titulo' => 'Test Movie',
            'anio' => 2023,
            'director_id' => $director->id,
            'precio_alquiler' => 10.50
        ];

        $response = $this->post(route('movies.store'), $data);

        $response->assertRedirect(route('movies.index'));
        $this->assertDatabaseHas('movies', ['titulo' => 'Test Movie']);
    }

    public function test_movie_genre_relationship()
    {
        $director = Director::create(['nombre' => 'Director Rel', 'fecha_nacimiento' => '1990-01-01']);
        $movie = Movie::create([
            'titulo' => 'Genre Movie',
            'anio' => 2023,
            'director_id' => $director->id,
            'precio_alquiler' => 12.00
        ]);
        $genre = Genre::create(['nombre' => 'Action']);

        $movie->genres()->attach($genre->id);

        $this->assertDatabaseHas('genre_films', [
            'movie_id' => $movie->id,
            'genre_id' => $genre->id
        ]);
    }
}
