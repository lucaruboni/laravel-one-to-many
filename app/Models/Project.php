<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    
    protected $fillable = ['type_id','title', 'content', 'cover_image', 'slug'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
