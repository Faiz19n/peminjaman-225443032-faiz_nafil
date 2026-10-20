<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'stock',
        'location',
        'description',
    ];

    public function scopeAvailable(Builder $query): void
    {
        $query->where('stock', '>', 0);
    }

    // Satu alat milik satu kategori
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Satu alat bisa ada di banyak peminjaman
    public function loans(): BelongsToMany
    {
        return $this->belongsToMany(Loan::class, 'loan_item')
                    ->withPivot('qty')
                    ->withTimestamps();
    }
}