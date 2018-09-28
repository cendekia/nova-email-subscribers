<?php

namespace Cendekia\EmailSubscribers\Resources;

use App\Nova\Resource;
use Cendekia\EmailSubscribers\Metrics\ConfirmedSubscribers;
use Cendekia\EmailSubscribers\Metrics\TotalSubscribers;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Subscriber extends Resource {
    /**
     * The model the resource corresponds to.
     * @var string
     */
    public static $model = 'Cendekia\EmailSubscribers\Models\Subscriber';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'email';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = true;

    /**
     * Get the search result subtitle for the resource.
     *
     * @return string
     */
    public function subtitle()
    {
        return "Name: {$this->name}";
    }

    /**
     * Hide resource from Nova's standard menu.
     * @var bool
     */
    public static $displayInNavigation = false;

    /**
     * Get the searchable columns for the resource.
     * @return array
     */
    public static function searchableColumns()
    {
        return config('nova-subscriber.subscriber.search');
    }

    /**
     * Get the fields displayed by the resource.
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Text::make('Email')->sortable(),
            Text::make('Status')->resolveUsing(function ($status) {
                return ucwords($status);
            })->sortable(),
            Text::make('Provider')->resolveUsing(function ($provider) {
                return ucwords($provider);
            })->sortable(),
            DateTime::make('Last Updated', 'updated_at')->format('DD-MM-YYYY hh:mm:ss')->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new ConfirmedSubscribers,
            new TotalSubscribers,
        ];
    }

    /**
     * Get the filters available for the resource.
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
