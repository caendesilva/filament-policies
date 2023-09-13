<?php

namespace Desilva\FilamentPolicies;

use Desilva\FilamentPolicies\Http\PolicyPage;

class FilamentPolicies
{
    public static function boot(): void
    {
        $policyFiles = glob(resource_path('markdown/policies/*.md'));

        $router = app('router');
        foreach ($policyFiles as $policy) {
            $policyName = basename($policy, '.md');
            $router->get($policyName, function () use ($policyName) {
                return (new PolicyPage($policyName))->render();
            });
        }
    }
}
