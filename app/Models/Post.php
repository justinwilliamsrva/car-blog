<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

protected $fillable = ['title','content','lead','author_id','topic_id'];

    public function topic(){

        return $this->belongsTo(Topic::class,'topic_id');
    }


    public function author(){

        return $this->belongsTo(User::class, 'author_id');
    }
}
