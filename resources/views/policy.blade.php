<x-filament-panels::layout.base :livewire="$livewire">
    <div class="px-4 py-8 grid auto-cols-fr gap-y-6">
        <div class="mx-auto my-4">
            <x-filament-panels::logo />
        </div>
        <x-filament::section class="max-w-5xl mx-auto">
            <article @class([
                'prose', 'dark:prose-invert' => \Filament\Facades\Filament::hasDarkMode()
            ])>
                <h1>{{ $title }}</h1>
                {!! $policy !!}
            </article>
        </x-filament::section>
        <footer class="mx-auto">
            <x-filament::link :href="url('/')">Back home</x-filament::link>
        </footer>
    </div>
</x-filament-panels::layout.base>
