<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogPost;
class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password','phone','avatar','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    public function posts() {
        return $this->hasMany(BlogPost::class,'author_id','id');
    }
}
