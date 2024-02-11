<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post_reaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
       'post_id',
       'user_id',
       'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // protected $casts = [
    //     'type' => PostReactionEnum::class
    // ];
}
