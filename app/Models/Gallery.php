<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title_np', 'title_en', 'file', 'type_id', 'is_active'];

    public function type()
    {
        return $this->belongsTo(GalleryType::class, 'type_id');
    }

    /**
     *
     * Accessor
     *
     * Change created_at data format
     */
    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }
}
