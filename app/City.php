<?php

declare(strict_types=1);

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\State.
 *
 * @property int $id
 * @property string $name
 * @property string $country
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Event[] $events
 * @method static Builder|City whereCountry($value)
 * @method static Builder|City whereCreatedAt($value)
 * @method static Builder|City whereId($value)
 * @method static Builder|City whereName($value)
 * @method static Builder|City whereUpdatedAt($value)
 * @method static Builder|City newModelQuery()
 * @method static Builder|City newQuery()
 * @method static Builder|City query()
 * @mixin Eloquent
 */
final class City extends Model
{
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
