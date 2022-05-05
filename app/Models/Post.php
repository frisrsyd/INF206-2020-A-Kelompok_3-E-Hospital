<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'tool_name',
        'link_location',
        'jumlah_alat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getImageAttribute($value)
    {
        return url("tool_images/$value");
    }
}
