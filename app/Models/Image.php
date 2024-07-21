<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_id',
        'file_name',
        'file_path',
    ];

    public function gallery(): HasOne
    {
        return $this->hasOne(Gallery::class);
    }
}
