<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['message'];
    protected $with=['user'];

    function user(){
        return $this->belongsTo(User::class);
    }
}
