<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    protected $fillable = ['nama_ruangan', 'kapasitas'];

    // Satu alat bisa ada di banyak peminjaman
    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Loan::class, 'rooms')
                    ->withTimestamps();
    }

    
}