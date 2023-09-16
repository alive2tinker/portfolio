<div>
    <div class="py-7 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="col-span-2">
                <h1 class="text-4xl sm:text-5xl tracking-tight sm:font-bold dark:text-zinc-200">{{ $user->meta['projects_header'][app()->getLocale()] }}</h1>
                <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ $user->meta['projects_subheader'][app()->getLocale()] }}</p>
            </div>
        </div>
        <div class="grid py-7 sm:grid-cols-3 gap-4">
            @foreach($user->projects as $project)
            <x-project-card :project="$project" />
            @endforeach
        </div>
    </div>
</div>