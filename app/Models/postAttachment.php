<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postAttachment extends Model
{
    use HasFactory;
    public $timestamps = false;
   
    protected $fillable = [
        
        'post_id',
        'name',
        'path',
        'mine',
        'size',
        'created_by'
];

}
