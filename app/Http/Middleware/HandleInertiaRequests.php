<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function share(Request $request)
    {
        $locale = session('locale');

        return array_merge(parent::share($request), [
            'locale' => $locale,
            'translations' => function () use ($locale) {
                $path = resource_path("lang/{$locale}.json");

                // If we can't find the locale, just fall back to the default one.
                if (!file_exists($path)) {
                    $path = resource_path('lang/' . config('app.locale') . '.json');
                }

                return json_decode(file_get_contents($path), true);
            },
            'flash' => [
                'message' => fn() => session('message')
            ],
        ]);
    }
}
