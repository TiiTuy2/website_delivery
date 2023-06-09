<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'phone_number', 'image'
    ];
    public function companies() {
        return $this->hasMany(Company::class,'name','phone_number','image');
    }
}
