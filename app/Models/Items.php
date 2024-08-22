<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Characters::class)->withPivot('quantity')->withTimestamps();
    }
}
