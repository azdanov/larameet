<?php

declare(strict_types=1);

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
 * @method static Builder|Event newModelQuery()
 * @method static Builder|Event newQuery()
 * @method static Builder|Event query()
 * @method static Builder|Event whereCity($value)
 * @method static Builder|Event whereCreatedAt($value)
 * @method static Builder|Event whereDescription($value)
 * @method static Builder|Event whereEnabled($value)
 * @method static Builder|Event whereId($value)
 * @method static Builder|Event whereName($value)
 * @method static Builder|Event whereUpdatedAt($value)
 * @method static Builder|Event whereVenue($value)
 * @method static Builder|Event findSimilarSlugs($attribute, $config, $slug)
 * @method static Builder|Event wherePublished($value)
 * @method static Builder|Event whereSlug($value)
 * @mixin Eloquent
 */
final class Event extends Model
{
    use Sluggable;

    /** @var string[] */
    protected $dates = ['created_at', 'updated_at', 'started_at'];

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
        static::addGlobalScope('published', static function (Builder $builder): void {
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
