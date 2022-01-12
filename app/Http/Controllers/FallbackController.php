<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FallbackController
{
    public function __invoke(Request $request)
    {
        return Inertia::render('Error', ['status' => 404])
            ->toResponse($request)
            ->setStatusCode(404);
    }
}
