<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    public mixed $article_id;
    protected $fillable = [
        'title',
        'content',
        'author_id',

        // Future additions might include:
        'published_at',
        'image_url',
        'status',
    ];
    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }//
}
