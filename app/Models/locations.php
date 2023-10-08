<?php

namespace App\Models;

use App\Models\houses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'County',
        'Town',
    ];

    public function houses(){
        return $this->hasMany(houses::class);
    }
}
