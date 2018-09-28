<?php

namespace Cendekia\EmailSubscribers\Policies;

use Cendekia\EmailSubscribers\Models\Subscriber;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscriberPolicy
{
    use HandlesAuthorization;

    public function viewAny(): bool
    {
        return true;
    }
    public function view(): bool
    {
        return true;
    }
    public function create(): bool
    {
        return false;
    }
    public function update(): bool
    {
        return false;
    }
    public function delete(): bool
    {
        return true;
    }
    public function restore(): bool
    {
        return true;
    }
    public function forceDelete(): bool
    {
        return true;
    }
}
