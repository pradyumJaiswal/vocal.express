<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class follower extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;
    protected $fillable =[
        'user_id',
        'follower_id'
    ];

    public function user():BelongsTo
    {
         return $this->belongsTo(User::class);
    }
}
