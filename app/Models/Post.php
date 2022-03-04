<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class)->using(PostTag::class);;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function pics(){
        return $this->hasMany(PostPic::class);
    }

    public function bookmarks(){
        
        return $this->belongsToMany(Bookmark::class);
    }

    public function vote_from_posts(){

        return $this->hasMany(Vote::class);
    }
}
