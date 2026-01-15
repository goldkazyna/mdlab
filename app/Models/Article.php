<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'is_active',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }

    public function getImageUrlAttribute()
    {
        return $this->image 
            ? '/uploads/articles/' . $this->image 
            : '/assets/img/logo.png';
    }
}