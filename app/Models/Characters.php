<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    public function items()
    {
        return $this->belongsToMany(Items::class)->withPivot('quantity')->withTimestamps();
    }
}
