<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'bio' => 'British author, best known for the Harry Potter series.',
        ]);
        Author::create([
            'name' => 'George R.R. Martin',
            'bio' => 'American novelist and short story writer, known for A Song of Ice and Fire series.',
        ]);
        Author::create([
            'name' => 'J.R.R. Tolkien',
            'bio' => 'English writer, poet, and philologist, famous for The Lord of the Rings.',
        ]);
        Author::create([
            'name' => 'Agatha Christie',
            'bio' => 'English writer known for her detective novels and short stories.',
        ]);
        Author::create([
            'name' => 'Stephen King',
            'bio' => 'American author of horror, supernatural fiction, suspense, and fantasy novels.',
        ]);
    }
}