<?php

namespace Cendekia\EmailSubscribers\Tests;

use Cendekia\EmailSubscribers\Http\Controllers\ToolController;
use Cendekia\EmailSubscribers\EmailSubscribers;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('nova-vendor/cendekia/email-subscribers/endpoint')
            ->assertSuccessful();
    }
}
