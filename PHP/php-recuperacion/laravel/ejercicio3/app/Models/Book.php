<?php

namespace App\Models;
use App\Models\Author;
use App\Models\Category;    
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'publication_year',
        'author_id',
        'category_id',
    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
