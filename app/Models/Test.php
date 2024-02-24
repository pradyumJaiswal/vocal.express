<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    use HasFactory;



    protected $fillable = [

        'TestType',
        'Description',
        'TotalMarks',
];

public function questions(): HasMany
    {
         return $this->hasMany(Question::class);
    }

}
