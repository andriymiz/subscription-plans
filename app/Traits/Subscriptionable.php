<?php

namespace App\Traits;

use App\Interfaces\SubscriptionablePlanInterface;

trait Subscriptionable
{
    use SubscriptionableRelations;
    use SubscriptionableActions;
    use SubscriptionableCheckers;

    /**
    * Get active and not expired subscripted plan.
    */
    public function getActiveNotExpiredPlan(): SubscriptionablePlanInterface
    {
        // TODO

        return $this->plan()->notExpired()->get();
    }
}
