<?php

namespace Desilva\FilamentPolicies\Http;

use Desilva\FilamentPolicies\FilamentPolicies;
use Filament\Pages\BasePage;
use Illuminate\Support\Str;

class PolicyPage extends BasePage
{
    protected static string $view = 'filament-policies::policy';

    protected string $policy;

    protected string $file;

    public function __construct(string $policy)
    {
        $this->policy = $policy;
        $this->file = resource_path('markdown/policies/' . basename($policy) . '.md');

        if (! file_exists($this->file)) {
            abort(404);
        }
    }

    protected function getViewData(): array
    {
        return [
            'policy' => Str::markdown(file_get_contents($this->file)),
            'title' => Str::headline($this->policy),
            'current' => $this->policy,
            'livewire' => $this,
            'pages' => FilamentPolicies::policyFiles(),
        ];
    }
}
