<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;
    

    protected $fillable =['body','user_id'];

    public function user():BelongsTo
    {
         return $this->belongsTo(User::class);
    }
    public function group():BelongsTo
    {
         return $this->belongsTo(group::class);
    }
    public function attachments():HasMany
    {
         return $this->hasMany(postAttachment::class);
    }


}
