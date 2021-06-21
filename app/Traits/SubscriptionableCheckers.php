<?php

namespace App\Traits;

trait SubscriptionableCheckers
{
    /**
    * Check if user has expired subscriptions.
    */
    public function hasExpiredSubscriptions(): bool
    {
        // TODO

        return true;
    }

    /**
    * Check if user can create client on active subscribed plan.
    */
    public function canCreateClient(): bool
    {
        // TODO

        return true;
    }

    /**
    * Check if active subscription is expired.
    */
    public function activeSubscriptionIsExpired(): bool
    {
        // TODO

        return true;
    }
}
