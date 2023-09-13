<x-filament-panels::layout.base :livewire="$livewire">
    <div class="px-4 py-8">
        <x-filament::section class="max-w-5xl mx-auto">
            <article class="prose">
                <h1>{{ $title }}</h1>
                {!! $policy !!}
            </article>
        </x-filament::section>
    </div>
</x-filament-panels::layout.base>
