<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'shortdesc',
        'body',
        'cover',
        'user_id',
        'category_id',
        'posted_at',
    ];

    protected $with = ['author','category'];



    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
