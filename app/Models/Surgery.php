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

    public function getStatus($status)
    {
        switch ($status) {
            case 0:
                return "<button class='btn btn-info btn-circle btn-sm'>
                لم يتم الرد
            </button>";
            case 1:
                return '<button class="btn btn-success btn-circle btn-sm">
                موافق
            </button>';
                break;
            default:
                break;
        }
    }
}
