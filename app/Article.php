<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
  // Mass assigned
  protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show', 'meta-title', 'meta-description', 'meta-keyword', 'published', 'created_up', 'modified_by'];
  // Mutators
  public function setSlugAttribute($value) {
    $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
  }

  // Polymorphic relation with categories
  public function categories()
  {
    return $this->morphToMany('App\Category', 'categoryable');
  }
}
