<div>
    <div class="flex py-4">
        <div class="flex-1 px-4 pt-1">
            <a href="{{ route('home-page') }}" class="logo text-2xl dark:text-zinc-500">malikthefullstack.com</a>
        </div>
        <div class="sm:flex-1 hidden sm:block">
            <div class="shadow-md dark:bg-zinc-800 rounded-full py-2">
                <ul class="flex justify-around">
                    @foreach($links as $link)
                        @if(Route::has(strtolower($link->name)))
                        <li class="text-sm text-zinc dark:text-zinc-100"><a href="{{ route(strtolower($link->name)) }}"> {{ $link->name }} </a></li>
                        @else
                        <li class="text-sm text-zinc dark:text-zinc-100"><a href="{{ $link->link }}"> {{ $link->name }} </a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sm:flex-1 hidden sm:block">
            <div class="flex justify-end space-x-3 mx-3">
                <div x-data="darkMode">
                    <button @click="toggleDarkMode" class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                        <svg x-show="!dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                        <svg x-show="dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-zinc-100 dark:fill-teal-500 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:flex dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </button>
                    <script>
                        document.addEventListener('alpine:init', () => {
                            Alpine.data('darkMode', () => ({
                                dark: Alpine.$persist(false),
                                init(){
                                    if(this.dark){
                                        document.documentElement.classList.add('dark')
                                    }else{
                                        document.documentElement.classList.remove('dark')
                                    }
                                },
                                toggleDarkMode(){
                                    this.dark = !this.dark;
                                    if(this.dark){
                                        document.documentElement.classList.add('dark')
                                    }else{
                                        document.documentElement.classList.remove('dark')
                                    }
                                }
                            }) )
                        })
                    </script>
                </div>
                <div class="relative inline-block text-left" x-data="{menuOpen: false}">
                    <div>
                        <button @click="menuOpen = !menuOpen" class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-zinc-100 dark:fill-teal-500 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                            </svg>
                        </button>
                    </div>
                    <div x-show="menuOpen" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white dark:bg-zinc-900 shadow-lg ring-1 ring-black dark:ring-zinc-500 ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-cloak>
                        <div class="py-1" role="none">
                            <ul>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a class="text-gray-700 dark:text-white block px-4 py-2 text-sm" id="menu-item-{{$localeCode}}" role="menuitem" tabindex="-1" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
