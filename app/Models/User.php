<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class User extends AbstractModel implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
