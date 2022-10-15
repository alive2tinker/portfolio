<div>
    <hr>
    <div class="max-w-7xl mx-auto sm:flex py-7 px-4 sm:justify-between">
        <div class="flex flex-1 justify-center">
            <div class="flex gap-6 text-sm font-medium text-zinc-800 dark:text-zinc-200">
                @foreach($links as $link)
                    <a class="transition hover:text-teal-500 dark:hover:text-teal-400" href="{{ $link->link }}">{{ $link->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="flex flex-1 justify-center">
            <p class="text-sm text-zinc-400 dark:text-zinc-500">© <!-- -->{{ date('Y') }}<!-- --> {{ $user->meta['rights'][app()->getLocale()] }}</p>
        </div>
    </div>
</div>
