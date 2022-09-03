<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogPost;
class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['post_id','content','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    public function post() {
        return $this->belongsTo(BlogPost::class,'post_id','id');
    }
}
