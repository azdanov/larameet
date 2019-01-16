<?php

declare(strict_types=1);

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Carbon;
use function explode;
use function implode;
use function in_array;
use function strtolower;
use function ucfirst;

/**
 * App\Event.
 *
 * @property int $id
 * @property string $name
 * @property string $venue
 * @property string $city
 * @property string|null $description
 * @property int $enabled
 * @property string $slug
 * @property int $published
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $start_at
 * @property int $max_attendees
 * @property string|null $deleted_at
 * @method static EloquentBuilder|Event newModelQuery()
 * @method static EloquentBuilder|Event newQuery()
 * @method static EloquentBuilder|Event query()
 * @method static EloquentBuilder|Event whereCity($value)
 * @method static EloquentBuilder|Event whereCreatedAt($value)
 * @method static EloquentBuilder|Event whereDescription($value)
 * @method static EloquentBuilder|Event whereEnabled($value)
 * @method static EloquentBuilder|Event whereId($value)
 * @method static EloquentBuilder|Event whereName($value)
 * @method static EloquentBuilder|Event whereUpdatedAt($value)
 * @method static EloquentBuilder|Event whereVenue($value)
 * @method static EloquentBuilder|Event findSimilarSlugs($attribute, $config, $slug)
 * @method static EloquentBuilder|Event wherePublished($value)
 * @method static EloquentBuilder|Event whereSlug($value)
 * @method static bool|null forceDelete()
 * @method static QueryBuilder|Event onlyTrashed()
 * @method static bool|null restore()
 * @method static EloquentBuilder|Event whereDeletedAt($value)
 * @method static EloquentBuilder|Event whereMaxAttendees($value)
 * @method static EloquentBuilder|Event whereStartAt($value)
 * @method static QueryBuilder|Event withTrashed()
 * @method static QueryBuilder|Event withoutTrashed()
 * @mixin Eloquent
 */
final class Event extends Model
{
    use Sluggable;
    use SoftDeletes;

    /** @var string[] */
    protected $fillable = ['name', 'venue', 'description', 'max_attendees'];

    /** @var string[] */
    protected $dates = ['created_at', 'updated_at', 'start_at', 'deleted_at'];

    /** @return mixed[] */
    public function sluggable(): array
    {
        return ['slug' => ['source' => 'name']];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public static function boot(): void
    {
        parent::boot();
        static::addGlobalScope('published', static function (EloquentBuilder $builder): void {
            $builder->where('published', '=', 1);
        });
    }

    public function getNameAttribute(string $name): string
    {
        $ignored = [
            'a',
            'an',
            'and',
            'at',
            'but',
            'by',
            'for',
            'from',
            'in',
            'nor',
            'on',
            'or',
            'the',
            'to',
            'with',
        ];

        $newName = [];

        foreach (explode(' ', $name) as $word) {
            $word = strtolower($word);

            if (in_array($word, $ignored, true)) {
                $newName[] = $word;
            } else {
                $newName[] = ucfirst($word);
            }
        }

        return implode(' ', $newName);
    }
}
