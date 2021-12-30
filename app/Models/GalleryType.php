<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryType extends Model
{
    use HasFactory;

    protected $fillable = ['code','title'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class,'type_id');
    }
}
