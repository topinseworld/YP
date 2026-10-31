<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'description', 'duration_minutes', 'realise_year', 'age_rating', 'trailer_url', 'seo_title', 'seo_description'])]

class Movie extends Model
{
    public function genres()
    {
        return $this -> belongsToMany(Genre::class);
    }
    
    public function images()
    {
        return $this -> hasMany(Movie_Images::class);
    }

    public function poster()
    {
        return $this -> hasOne(Movie_Images::class)->where('is_poster', true);
    }
    
    public function screenings()
    {
        return $this -> hasMany(Screening::class);
    }
    
    public function getEffectiveSeoTitle()
    {
        return $this ->seo_title ?: $this->title;
    }

    public function getEffectiveSeoDiscription()
    {
        return $this ->seo_description ?: Str::limit(strip_tags($this->descriptoin ?? ''), 160);
    }
}
