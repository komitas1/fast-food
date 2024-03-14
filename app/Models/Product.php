<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    public const IMAGE_COLLECTION_NAME = 'images';
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'description',
        'sort',
    ];
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
