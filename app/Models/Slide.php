<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'link', 'image'
    ];
    public function slides() {
        return $this->belongsTo(Slide::class);
    }
}
