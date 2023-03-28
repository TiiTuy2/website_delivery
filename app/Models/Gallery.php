<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
         'image'
    ];
    public function gallerys() {
        return $this->hasMany(Gallery::class,'image');
    }
    public function blogs() {
        return $this->hasMany(Blog::class,'title','content','image');
    }
    public function abouts() {
        return $this->hasMany(About::class,'title','content','image');
    }
}
