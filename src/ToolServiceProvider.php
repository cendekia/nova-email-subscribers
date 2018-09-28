<?php

namespace Cendekia\EmailSubscribers;

use Cendekia\EmailSubscribers\Http\Middleware\Authorize;
use Cendekia\EmailSubscribers\Models\Subscriber;
use Cendekia\EmailSubscribers\Policies\SubscriberPolicy;
use Cendekia\EmailSubscribers\Resources\Subscriber as SubscriberResource;
use Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'email-subscribers');

        $this->app->booted(function () {
            $this->routes();

            if (Schema::hasTable('email_subscribers')) {
                Gate::policy(Subscriber::class, SubscriberPolicy::class);

                Nova::resources([
                    SubscriberResource::class,
                ]);
            }
        });

        Nova::serving(function (ServingNova $event) {
            //
        });

        $filename = '2018_09_28_043606_create_email_subscribers_table.php';

        $this->publishes([
            __DIR__.'/../database/migrations/'.$filename => base_path('/database/migrations/'.$filename),
        ], 'email-subscribers');
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/email-subscribers')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nova-subscriber.php', 'nova-subscriber');
    }
}
