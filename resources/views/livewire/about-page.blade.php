<div class="py-12 px-5" >
<div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
        <div class="lg:pl-20">
            <div class="max-w-xs px-2.5 lg:max-w-none">
                <img alt="" sizes="(min-width: 1024px) 32rem, 20rem" src="{{ asset('images/winter1443.png') }}" decoding="async" data-nimg="future" class="aspect-square rotate-3 rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800" loading="lazy" style="color: transparent;" width="800" height="800">
            </div>
        </div>
        <div class="lg:order-first lg:row-span-2">
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">{{ $page->title }}</h1>
            <article class="mt-6 space-y-7 text-base text-zinc-600 dark:text-zinc-400">
                {!! $page->content !!}
            </article>
        </div>
        <div class="lg:pl-20">
            <ul role="list">
               @foreach ($socialLinks as $socialLink)
               <li class="flex"><a class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="{{ $socialLink->value }}"><x-social-icon :platform="$socialLink->key"/><span class="ml-4">Follow on {{ $socialLink->key}}</span></a></li>
               @endforeach
            </ul>
        </div>
    </div>
</div>

