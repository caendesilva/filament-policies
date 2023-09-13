<?php

namespace Desilva\FilamentPolicies\Commands;

use Illuminate\Console\Command;

class FilamentPoliciesCommand extends Command
{
    public $signature = 'filament-policies';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
