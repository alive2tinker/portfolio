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
                    @if($project->image)
                    <li class="splide__slide max-w-xl sm:max-w-3xl mx-auto px-4">
                        <img class="rounded-lg w-screen max-h-96" src="{{ asset('storage/' . $project->image) }}" alt="">
                    </li>
                    @endif
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
            function projectsCarousel() {
                return {
                    currentIndex: 0,
                    projectsCarousel: null,
                    pages: 0,
                    init() {
                        this.projectsCarousel = new Splide('.splide', {
                            perPage: 1,
                            gap: '4em',
                            arrows: false,
                            pagination: true,
                            autoplay: true,
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
                    isCurrent(i) {
                        return this.currentIndex === i;
                    }
                }
            }
        </script>
    </div>
    <div class="max-w-5xl mx-auto py-7">
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 px-5 py-7">
            <div class="col-span-2">
                <h2 class="text-2xl font-bold tracking-tight text-zinc-500 py-4 dark:text-zinc-100 sm:text-3xl">{{ __('Experience')}}</h2>
                @foreach($experiences as $experience)
                <x-experience :experience="$experience" />
                @endforeach
            </div>
            <div class="col-span-2">
                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                            <path d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                        </svg>
                        <span class="ml-3">{{ __('Skills') }}</span>
                    </h2>
                    <ol class="mt-6 space-y-4">
                        @foreach($user->skills as $skill)
                        <li class="flex gap-4">
                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                {{-- <img alt="" src="/_next/static/media/planetaria.ecd81ade.svg" width="32" height="32"--}}
                                {{-- decoding="async" data-nimg="future" class="h-7 w-7" loading="lazy"--}}
                                {{-- style="color: transparent;">--}}
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
                    <div x-data="{modalOpen: false}" class="cv-component">
                        <button @click="modalOpen = true" class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full">{{ __('Download CV') }}</button>
                        <div class="relative z-10" style="z-index:9999 !important;" x-cloak x-show="modalOpen" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                            <div class="fixed inset-0 z-50 overflow-y-auto" style="z-index:9999 !important;">
                                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                    <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
                                    <div class="relative transform z-50 overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                                        <div>
                                            <div class="mt-3 text-center sm:mt-5">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                    <div>
                                                    <div class="flex justify-center">
                                                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64px" height="64px">
                                                            <path d="M 35.136719 2.386719 C 34.917969 2.378906 34.699219 2.390625 34.480469 2.429688 L 5.304688 7.578125 C 3.390625 7.917969 2 9.574219 2 11.515625 L 2 50.484375 C 2 52.429688 3.390625 54.085938 5.304688 54.421875 L 34.480469 59.570313 C 34.652344 59.601563 34.828125 59.613281 35 59.613281 C 35.703125 59.613281 36.382813 59.371094 36.925781 58.914063 C 37.609375 58.34375 38 57.503906 38 56.613281 L 38 52 L 57 52 C 58.652344 52 60 50.652344 60 49 L 60 13 C 60 11.347656 58.652344 10 57 10 L 38 10 L 38 5.382813 C 38 4.496094 37.609375 3.65625 36.925781 3.085938 C 36.417969 2.65625 35.789063 2.414063 35.136719 2.386719 Z M 35.105469 4.390625 C 35.359375 4.414063 35.542969 4.535156 35.640625 4.617188 C 35.777344 4.730469 36 4.980469 36 5.382813 L 36 56.613281 C 36 57.019531 35.777344 57.269531 35.640625 57.382813 C 35.507813 57.496094 35.230469 57.671875 34.828125 57.601563 L 5.652344 52.453125 C 4.695313 52.285156 4 51.457031 4 50.484375 L 4 11.515625 C 4 10.542969 4.695313 9.714844 5.652344 9.546875 L 34.824219 4.398438 C 34.925781 4.382813 35.019531 4.378906 35.105469 4.390625 Z M 38 12 L 57 12 C 57.550781 12 58 12.449219 58 13 L 58 49 C 58 49.550781 57.550781 50 57 50 L 38 50 L 38 44 L 51 44 C 51.550781 44 52 43.554688 52 43 C 52 42.445313 51.550781 42 51 42 L 38 42 L 38 38 L 43.375 38 C 43.925781 38 44.375 37.554688 44.375 37 C 44.375 36.445313 43.925781 36 43.375 36 L 38 36 L 38 32 L 51 32 C 51.550781 32 52 31.554688 52 31 C 52 30.445313 51.550781 30 51 30 L 38 30 L 38 26 L 51 26 C 51.550781 26 52 25.554688 52 25 C 52 24.445313 51.550781 24 51 24 L 38 24 L 38 20 L 51 20 C 51.550781 20 52 19.554688 52 19 C 52 18.445313 51.550781 18 51 18 L 38 18 Z M 10.15625 20.011719 C 10.027344 19.992188 9.890625 19.996094 9.757813 20.03125 C 9.222656 20.164063 8.894531 20.707031 9.03125 21.242188 L 14.03125 41.242188 C 14.140625 41.683594 14.53125 41.992188 14.984375 42 C 15.4375 41.984375 15.839844 41.703125 15.964844 41.265625 L 20 26.734375 L 24.035156 41.265625 C 24.15625 41.703125 24.550781 42 25 42 L 25.015625 42 C 25.46875 41.992188 25.859375 41.683594 25.96875 41.242188 L 30.96875 21.242188 C 31.105469 20.707031 30.777344 20.164063 30.242188 20.03125 C 29.710938 19.894531 29.164063 20.21875 29.03125 20.757813 L 24.949219 37.078125 L 20.964844 22.734375 C 20.84375 22.300781 20.449219 22 20 22 C 19.550781 22 19.15625 22.300781 19.035156 22.734375 L 15.050781 37.078125 L 10.96875 20.757813 C 10.871094 20.355469 10.539063 20.070313 10.15625 20.011719 Z M 47 36 C 46.449219 36 46 36.445313 46 37 C 46 37.554688 46.449219 38 47 38 L 51 38 C 51.550781 38 52 37.554688 52 37 C 52 36.445313 51.550781 36 51 36 Z" />
                                                        </svg>
                                                        </div>
                                                        <div class="mt-5 sm:mt-6">
                                                            <a href="{{ route('fetchCV', ['user' => 1, 'type' => 'word']) }}" class="inline-flex w-full justify-center rounded-md border border-transparent bg-teal-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-sm">{{ __('Word') }}</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="flex justify-center">
                                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="">
                                                        </div>
                                                        <div class="mt-5 sm:mt-6">
                                                            <a href="{{ route('fetchCV', ['user' => 1, 'type' => 'pdf']) }}" class="inline-flex w-full justify-center rounded-md border border-transparent bg-teal-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-sm">{{ __('PDF') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button @click="modalOpen = false;" class="text-center z-50 text-zinc-500 pt-4">{{ __('Close') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4" id="contact-form">
        <div class="px-5 col-span-2">
            <h3 class="text-2xl mt-0.5 font-bold tracking-tight text-zinc-500 dark:text-zinc-100 sm:text-3xl">{{ __('Get In Touch')}}</h3>
            <div class="py-7">
                <ul class="space-y-4">
                    @foreach($contact_methods as $contact_method)
                    <li class="flex space-x-3">
                        <x-contact_icon :method="$contact_method->key" />
                        <p class="text-base text-zinc-600 dark:text-zinc-400">{{ $contact_method->value }}</p>
                    </li>
                    @endforeach
                    <li>{{ __('views: :views', ['views' => $views ])}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
