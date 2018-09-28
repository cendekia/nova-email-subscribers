<?php

namespace Cendekia\EmailSubscribers\Resources;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;

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
            Text::make('Name'),
            Text::make('Email'),
            Text::make('Status'),
            Text::make('Provider'),
            DateTime::make('Last Updated', 'updated_at')->format('DD-MM-YYYY hh:mm:ss'),
        ];
    }

    /**
     * Get the cards available for the request.
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
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
