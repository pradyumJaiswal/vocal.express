<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'comment',
        'user_id'
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function post(): belongsTo
    {
        return $this->belongsTo(post::class);
    }
}
