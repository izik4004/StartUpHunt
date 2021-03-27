<?php

namespace App\Models;

use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Commentable;


class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use Commentable;
    use CanBeLiked;
    

    protected $fillable = [
    'title',
     'slug',
     'description',
     'category',
     'tag',
     'image_path',
     'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
            ];
    }
}
