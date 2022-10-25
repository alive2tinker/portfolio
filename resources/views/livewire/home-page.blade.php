<div class="py-12">
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
        <div class="mx-5 col-span-3">
            <img class="rounded-full w-24 my-7" src="{{ asset('images/1652505616025.jpeg') }}" alt="">
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">{{ $user->meta['main_description'][app()->getLocale()] }}</h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ $user->meta['sub_description'][app()->getLocale()] }}</p>
        </div>
    </div>
    <div class="mx-5 py-5 w-1/6">
        <ul class="flex justify-around">
            @foreach($social_links as $social_link)
                <li><a href="{{ $social_link->value }}">
                        <x-social-icon :platform="$social_link->key"></x-social-icon>
                    </a></li>
            @endforeach
        </ul>
    </div>
    <!-- projects carousel -->
    <div class="py-5" x-data="projectsCarousel" x-cloak>
        <div id="image-carousel" class="splide" aria-label="Beautiful Images" id="projects-carousel">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($user->projects as $project)
                    <li class="splide__slide max-w-xl sm:max-w-3xl mx-auto px-4">
                        <img class="rounded-lg w-screen max-h-96" src="{{ $project->image }}" alt="">
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex justify-center py-4">
                <div class="flex space-x-3">
                    <template x-cloak x-for="(page, index) in pages" :key="index">
                        <button :id="`pagination-${currentIndex}`" :class="{'w-2 bg-zinc-800 h-2 rounded':true, 'w-11':isCurrent(index)}">
                            
                        </button>
                    </template>
                </div>
            </div>
        </div>
        <script>
            function projectsCarousel(){
                return {
                    currentIndex:0,
                    projectsCarousel: null,
                    pages: 0,
                    init(){
                        this.projectsCarousel = new Splide('.splide', {
                            perPage:1,
                            gap: '4em',
                            arrows: false,
                            pagination: true,
                            direction: '{{ app()->getLocale() === "ar" ? "rtl" : "ltr"}}'
                        });

                        this.projectsCarousel.on('pagination:mounted', (data) => {
                                data.list.classList.add('hidden');
                            });
                            this.projectsCarousel.on('pagination:updated', (data, prev, curr) => {
                                this.currentIndex = curr.page;
                            });
                        this.projectsCarousel.mount();
                        this.pages = this.projectsCarousel.Components.Elements.slides.length
                    },
                    isCurrent(i){
                        return this.currentIndex === i;
                    }
                }
            }
        </script>
    </div>
    <div class="max-w-5xl mx-auto py-7">
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 px-5 py-7">
            <div class="col-span-2">
                <h1 class="text-2xl font-bold tracking-tight text-zinc-500 py-4 dark:text-zinc-100 sm:text-3xl">{{ __('Experience')}}</h1>
                @foreach($experiences as $experience)
                    <x-experience :experience="$experience"/>
                @endforeach
            </div>
            <div class="col-span-2">
                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
                             stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path
                                d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
                                class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                            <path
                                d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5"
                                class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                        </svg>
                        <span class="ml-3">{{ __('Skills') }}</span></h2>
                    <ol class="mt-6 space-y-4">
                        @foreach($user->skills as $skill)
                            <li class="flex gap-4">
                                <div
                                    class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
{{--                                    <img alt="" src="/_next/static/media/planetaria.ecd81ade.svg" width="32" height="32"--}}
{{--                                         decoding="async" data-nimg="future" class="h-7 w-7" loading="lazy"--}}
{{--                                         style="color: transparent;">--}}
                                    <x-skill-icon :skill="$skill->translate('title','en')"></x-skill-icon>
                                </div>
                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                    <dt class="sr-only">Skill</dt>
                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                        {{ $skill->title }}
                                    </dd>
                                    <x-progress-bar :percentage="$skill->percentage" />
                                </dl>
                            </li>
                        @endforeach
                    </ol>
                    <a class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full"
                       href="{{ route('fetchCV') }}">{{ __('Download CV') }}
                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
                             class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50">
                            <path d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a></div>
            </div>
        </div>
    </div>
    <!-- contact form -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
        <div class="px-5 col-span-2">
            <h1 class="text-2xl mt-0.5 font-bold tracking-tight text-zinc-500 dark:text-zinc-100 sm:text-3xl">{{ __('Get In Touch')}}</h1>
            <div class="py-7">
                <ul class="space-y-4">
                    @foreach($contact_methods as $contact_method)
                        <li class="flex space-x-3">
                            <x-contact_icon :method="$contact_method->key"/>
                            <p class="text-base text-zinc-600 dark:text-zinc-400">{{ $contact_method->value }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
