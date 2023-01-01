<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogPost;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;


use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


//use Laravel\Sanctum\HasApiTokens;

class Author extends Authenticatable implements HasMedia
{
    use HasFactory, HasApiTokens, Notifiable, HasRoles , InteractsWithMedia ;

    protected $table = 'authors';
    protected $fillable = ['name', 'email', 'password', 'phone', 'avatar', 'locale','created_at', 'updated_at'];
    protected $hidden = ['password', 'created_at', 'updated_at'];
    public $timestamps = true;

    public const LOCALES = [
        'en' => 'English',
        'ar' => 'Arabic',
        'es' => 'Spanish',
        'de' => 'Deutsch'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone' => 'string',
        'created_at' => 'date:Y-m-d H:00',
        'updated_at' => 'date:Y-m-d H:00',
    ];

    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(BlogPost::class, 'author_id', 'id');
    }

    public function scopeMostActive($query)
    {
        return $query->withCount(['posts' => function ($query) {
            return $query->whereBetween(static::CREATED_AT, [now()->subMonths(3), now()]);
        }])->having('posts_count', '>=', 15)->orderBy('posts_count', 'desc');
    }

    public function image(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Images::class, 'imageable');
    }

//    public function scopeMostActiveLastMonth($query)
//    {
//        return $query->withCount(['posts' => function($query){
//            return $query->whereBetween(static::CREATED_AT,[now()->subMonths(2),now()]);
//        }])->having('posts_count','>=' , 2)
//        ->orderBy('posts_count','desc');
//    }

    public static function boot()
    {
        parent::boot();

        static::updating(function (Author $author) {
        });
    }


}
