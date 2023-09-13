<?php

namespace Desilva\FilamentPolicies;

use Desilva\FilamentPolicies\Http\PolicyPage;

class FilamentPolicies
{
    public static function boot(): void
    {
        $policyFiles = self::policyFiles();

        $router = app('router');
        foreach ($policyFiles as $policy) {
            $router->get($policy, function () use ($policy) {
                return (new PolicyPage($policy))->render();
            });
        }
    }

    public static function policyFiles(): array
    {
        return collect(glob(resource_path('markdown/policies/*.md')))
            ->map(fn ($policy) => basename($policy, '.md'))
            ->toArray();
    }
}
