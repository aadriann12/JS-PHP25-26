<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    // Campos asignables masivamente
    protected $fillable = [
        'user_id', 'book_id', 'librarian_id',
        'loaned_at', 'due_at', 'returned_at',
        'status', 'notes',
    ];

    // Casts: las fechas se tratan como Carbon automáticamente
    protected $casts = [
        'loaned_at'   => 'date',
        'due_at'      => 'date',
        'returned_at' => 'date',
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function book() { return $this->belongsTo(Book::class); }
    public function librarian() { return $this->belongsTo(User::class, 'librarian_id'); }
}
