<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function follow()
    {
        return $this->belongsTo(Follower::class);
    }
}
