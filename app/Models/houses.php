<?php

namespace App\Models;

use App\Models\Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class houses extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_img',
        'house_name',
        'size',
        'bedrooms',
        'amenities',
    ];

    public function users(){
        return $this->belongsToMany(Users::class);
    }
}
