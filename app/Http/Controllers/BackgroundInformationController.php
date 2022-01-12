<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;

class BackgroundInformationController
{
    public function __invoke()
    {
        return Inertia::render('BackgroundInformation', [
            'title' => __('Background information'),
        ]);
    }
}
