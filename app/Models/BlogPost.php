<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['author_id','title','content','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    public function author() {
        return $this->belongsTo(Author::class,'author_id','id');
    }

    public function comments() {
        return $this->hasMany(Comment::class,'post_id','id');
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function(BlogPost $post) {
            $post->comments()->delete();
        });
        static::restoring(function (BlogPost $post){
            $post->comments()->restore();
        });
    }
}
