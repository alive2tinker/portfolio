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
            <div>
                    <div class="rounded-full w-16 h-16 shadow-md overflow-hidden p-4" >
                    <img class="" src="{{ asset('storage/' . $project->icon ) }}" alt="">
                    </div>
                    <h2 class="mt-6 text-xl font-bold text-zinc-800 dark:text-zinc-100">
                        {{ $project->title }} @if(!$project->live) <span class="rounded-full text-sm my-2 bg-red-100 border border-red-500 px-4 text-red-500 font-semibold">{{ __('Soon') }}</span> @endif
                    </h2>
                    <p class="text-zinc-800 dark:text-zinc-400">{{ Str::limit(strip_tags($project->excerpt), 100, '...') }}</p>
                    <div class="flex">
                    @foreach($project->technologies as $technology)
                        <span class="rounded-full text-sm my-2 bg-teal-100 px-4 text-teal-500 font-semibold">{{ $technology['name'] }}</span>
                        @endforeach
                    </div>
                    @if($project->link)
                    <div class="flex space-x-4 py-5">
                        <a class="text-zinc-800 dark:text-zinc-400" href="{{ $project->link }}">{{ $project->link }}</a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-zinc-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
</svg>
                    </div>
                    @endif

            </div>
            @endforeach
        </div>
    </div>
</div>