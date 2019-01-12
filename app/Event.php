<?php

declare(strict_types=1);

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Event.
 *
 * @property int $id
 * @property string $name
 * @property string $venue
 * @property string $city
 * @property string|null $description
 * @property int $enabled
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
 * @mixin Eloquent
 */
final class Event extends Model
{
}
