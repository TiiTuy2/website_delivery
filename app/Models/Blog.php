<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'image'
    ];
    public function blogs() {
        return $this->hasMany(Blog::class,'title','content','image');
    }
}
