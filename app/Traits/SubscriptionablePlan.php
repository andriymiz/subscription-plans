<?php

namespace App\Traits;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Relations\Relation;

trait SubscriptionablePlan
{
    /**
    * Get all of the subscriptions. Relation.
    */
    public function subscriptions(): Relation
    {
        return $this->hasMany(Subscription::class);
    }

    public function canSubscribe(): bool
    {
        // TODO

        return $this->is_available;
    }
}
