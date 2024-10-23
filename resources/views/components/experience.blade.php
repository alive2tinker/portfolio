<article class="border border-zinc-100 dark:border-zinc-600 rounded-lg my-3 p-2 hover:bg-zinc-100 p-2">
    <p class="text-xs text-zinc-400">{{ $experience->start_date->format('Y-m-d') }} - {{ $experience->end_date?->format('Y-m-d') ?? 'Present'}}</p>
    <p class="text-lg font-bold dark:text-zinc-300">{{ $experience->position }} {{ __('at') }} {{ $experience->organization_name }}</p>
    <p class="text-zinc-400">{{ $experience->duties }}</p>
    <a href="{{ $experience->organization_link }}" class="text-teal-500 text-sm">{{ __('More About Organization') }}</a>
</article>
