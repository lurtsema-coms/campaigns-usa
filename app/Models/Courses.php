<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'courses_id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('published', 0)->latest();
    }
}
