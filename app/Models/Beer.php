<?php

namespace App\Models;

use App\Models\Brewery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    public function breweries(){
        return $this->belongsToMany(Brewery::class, 'beer_brewery');
    }
}
