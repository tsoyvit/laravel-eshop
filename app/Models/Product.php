<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int $category_id
 * @property string|null $excerpt
 * @property string $content
 * @property int $price
 * @property int $old_price
 * @property string|null $image
 * @property string|null $gallery
 * @property bool $is_hit
 * @property bool $is_new
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGallery($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereIsHit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'category_id', 'excerpt',
        'content', 'price', 'old_price', 'image', 'gallery', 'is_hit', 'is_new'
    ];
}
