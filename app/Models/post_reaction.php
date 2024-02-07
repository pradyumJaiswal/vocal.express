<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Enums\ProductStatusEnum;

class post_reaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
       'post_id',
       'user_id',
       'type'
    ];

    // protected $casts = [
    //     'type' => PostReactionEnum::class
    // ];
}
