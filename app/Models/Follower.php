<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function sick()
    {
        return $this->belongsTo(User::class, 'sick_id');
    }

    public function surgery()
    {
        return $this->hasMany(Surgery::class);
    }

    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }



}
