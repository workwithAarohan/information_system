<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information_desc extends Model
{
    use HasFactory;

    public function info()
    {
        return $this->belongsTo(Information::class, 'information_id');
    }
}
