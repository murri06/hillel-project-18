<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'notes',
        'dt_start',
        'dt_end',
    ];

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);
    }
}
