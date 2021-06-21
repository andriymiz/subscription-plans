<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Relations\Relation;

interface SubscriptionablePlanInterface
{
    // Relations

    /**
    * Get all of the subscriptions.
    */
    public function subscriptions(): Relation;

    // Checkers

    /**
    * Check if plan is available for subscribe.
    */
    public function canSubscribe(): bool;
}
