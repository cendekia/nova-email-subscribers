<?php

namespace Cendekia\EmailSubscribers\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model {
    protected $table = 'email_subscribers';

    protected $dates = ['created_at', 'updated_at'];
}
