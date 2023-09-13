<?php

namespace Desilva\FilamentPolicies\Http;

use Illuminate\Support\Str;

class PolicyController
{
    public function show(string $policy): \Illuminate\View\View
    {
        $file = resource_path('markdown/policies/'.basename($policy).'.md');

        if (! file_exists($file)) {
            abort(404);
        }

        return view('filament-policies::policy', [
            'policy' => Str::markdown(file_get_contents($file))
        ]);
    }
}
