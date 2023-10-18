<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class houses extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_img',
        'house_name',
        'town',
        'county',
        'size',
        'bedrooms',
        'amenities',
        'price',
        'user_code',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
