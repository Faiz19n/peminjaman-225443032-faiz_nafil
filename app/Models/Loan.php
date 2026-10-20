<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Loan extends Model
{
    protected $fillable = [
        'user_id',
        'loan_date',
        'due_date',
        'returned_at',
        'status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'loan_date' => 'date',
            'due_date' => 'date',
            'returned_at' => 'date',
        ];
    }

    // Satu peminjaman milik satu user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Satu peminjaman berisi banyak alat
    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'loan_item')
                    ->withPivot('qty')
                    ->withTimestamps();
    }
}