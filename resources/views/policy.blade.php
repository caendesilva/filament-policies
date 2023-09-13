<x-filament-panels::layout.base :livewire="$livewire">
    <div class="px-4 py-8 grid auto-cols-fr gap-y-6">
        <div class="mx-auto my-4">
            <x-filament-panels::logo />
        </div>
        <x-filament::section class="max-w-5xl mx-auto p-0">
            @if(count($pages) > 1)
                <nav class="border-b dark:border-grey-800 -mx-6 pb-6">
                    <ul class="flex justify-center">
                        @foreach($pages as $page)
                            <li>
                                @if($page === $current)
                                    <a href="{{ $page }}" aria-current="page" class="hover:underline">{{ Str::headline($page) }}</a>
                                @else
                                    <a href="{{ $page }}" class="hover:underline opacity-70">{{ Str::headline($page) }}</a>
                                @endif
                            </li>
                            @if(! $loop->last)
                                <span class="mx-3 opacity-70" role="none">|</span>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            @endif
            <article @class([
                'prose', 'dark:prose-invert' => \Filament\Facades\Filament::hasDarkMode(), 'mt-6' => count($pages) > 1
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
