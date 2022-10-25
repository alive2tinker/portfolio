<div class="py-12 px-4">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="col-span-2">
            <h1 class="text-4xl sm:text-5xl font-bold dark:text-zinc-300">{{ $user->meta['articles_header'][app()->getLocale()] }}</h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ $user->meta['articles_subheader'][app()->getLocale()] }}</p>
            <div class="py-7">
            @forelse($articles as $article)
            <article class="sm:grid sm:grid-cols-4 sm:items-baseline">
                <div class="md:col-span-3 group relative flex flex-col items-start">
                    <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                        <div class="absolute -inset-y-6 -inset-x-4 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl"></div><a href="/articles/crafting-a-design-system-for-a-multiplanetary-future"><span class="absolute -inset-y-6 -inset-x-4 z-20 sm:-inset-x-6 sm:rounded-2xl"></span><span class="relative z-10">{{ $article->title }}</span></a>
                    </h2><time class="md:hidden relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2022-09-05"><span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>{{ $article->publish_date->format('Y M d') }}</time>
                    <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">{{ strip_tags($article->content) }}</p>
                    <div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                            <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div>
                </div><time class="mt-1 hidden md:block relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500" datetime="2022-09-05">September 5, 2022</time>
            </article>
            @empty
            <h1 class="text-center text-3xl font-bold">{{ __('No Articles Yet') }}</h1>
            @endforelse
            </div>
        </div>
    </div>
</div>