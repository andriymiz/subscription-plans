<?php

namespace App\Traits;

use App\Interfaces\SubscriptionablePlanInterface;

trait SubscriptionableActions
{
    /**
    * Subscribe to plan.
    * Use this for subscribe to new plan and for expired plan.
    */
    public function subscribePlan(SubscriptionablePlanInterface $plan): bool
    {
        // TODO

        return true;
    }

    /**
    * Unsubscribe from plan.
    * Delete subscription.
    */
    public function unsubscribePlan(SubscriptionablePlanInterface $plan): bool
    {
        // TODO

        return true;
    }

    /**
    * Change plan if they subscribed.
    * Set active plan.
    */
    public function switchToPlan(SubscriptionablePlanInterface $plan): bool
    {
        // TODO

        return true;
    }
}
