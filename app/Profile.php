<?php

declare(strict_types=1);

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Profile.
 *
 * @property int $id
 * @property int $user_id
 * @property string $url
 * @property string $telephone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Profile whereCreatedAt($value)
 * @method static Builder|Profile whereId($value)
 * @method static Builder|Profile whereTelephone($value)
 * @method static Builder|Profile whereUpdatedAt($value)
 * @method static Builder|Profile whereUrl($value)
 * @method static Builder|Profile whereUserId($value)
 * @method static Builder|Profile newModelQuery()
 * @method static Builder|Profile newQuery()
 * @method static Builder|Profile query()
 * @mixin Eloquent
 */
final class Profile extends Model
{
    /** @var string[] */
    protected $dates = ['created_at', 'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
