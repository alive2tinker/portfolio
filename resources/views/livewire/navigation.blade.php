<div>
    <div class="flex py-4" x-data="mobileMenu">
        <div class="flex-1 px-4 pt-1">
            <a href="{{ route('home-page') }}" class="logo text-2xl dark:text-zinc-500">malikthefullstack.com</a>
        </div>
        <div class="sm:flex-1 hidden sm:block">
            <div class="shadow-md dark:bg-zinc-800 rounded-full py-2">
                <ul class="flex justify-around">
                    @foreach ($links as $link)
                        @if (Route::has(strtolower($link->name)))
                            <li class="text-sm text-zinc dark:text-zinc-100"><a
                                    href="{{ route(strtolower($link->name)) }}"> {{ $link->name }} </a></li>
                        @else
                            <li class="text-sm text-zinc dark:text-zinc-100"><a href="{{ $link->link }}">
                                    {{ $link->name }} </a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sm:flex-1 hidden sm:block" x-cloak>
            <div class="flex justify-end space-x-3 mx-3">
                <div>
                    <button class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20" @click="toggleDarkMode" x-on:mouseenter="showIcon" x-on:mouseleave="showIcon">
                        <svg x-show="!dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                        <svg x-show="dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="h-6 w-6 fill-zinc-100 dark:fill-teal-500 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:flex dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </button>
                    <script>
                        document.addEventListener('alpine:init', () => {
                            Alpine.data('darkMode', () => ({
                                dark: Alpine.$persist(false),

                            }))
                        })
                    </script>
                </div>
                <div class="relative inline-block text-left" x-data="{ menuOpen: false }">
                    <div>
                        <button @click="menuOpen = !menuOpen"
                            class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="h-6 w-6 fill-zinc-100 dark:fill-teal-500 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                            </svg>
                        </button>
                    </div>
                    <div x-show="menuOpen"
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white dark:bg-zinc-900 shadow-lg ring-1 ring-black dark:ring-zinc-500 ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-cloak>
                        <div class="py-1" role="none">
                            <ul>
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a class="text-gray-700 dark:text-white block px-4 py-2 text-sm"
                                            id="menu-item-{{ $localeCode }}" role="menuitem" tabindex="-1"
                                            rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
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
        <div class="sm:hidden" x-cloak>
            <button @click="menuOpen = !menuOpen" type="button" class="mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="dark:text-zinc-300 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="w-screen h-screen bg-zinc-900 opacity-25 fixed top-0 bottom-0" x-cloak @click="menuOpen = !menuOpen"
            x-show="menuOpen"></div>
        <div class="bg-white h-screen fixed top-0 py-6 px-2 w-4/5 shadow-lg z-50 dark:bg-zinc-900"
            x-transition:enter="transition ease-out duration-300" x-show="menuOpen"
            x-transition:enter-start="ltr:-translate-x-48 rtl:translate-x-48"
            x-transition:enter-end="ltr:translate-x-0 rtl:-translate-x-0">
            <div class="flex justify-between">
                <svg @click="menuOpen = !menuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="dark:text-zinc-300 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div class="flex justify-around dark:text-zinc-300" @click="toggleDarkMode">
                    <button class="dark:text-zinc-300">
                        <svg class="dark:text-zinc-300" x-show="!dark" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 12C5 11.7348 4.89464 11.4804 4.70711 11.2929C4.51957 11.1054 4.26522 11 4 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H4C4.26522 13 4.51957 12.8946 4.70711 12.7071C4.89464 12.5196 5 12.2652 5 12ZM5.64 17L4.93 17.71C4.74375 17.8974 4.63921 18.1508 4.63921 18.415C4.63921 18.6792 4.74375 18.9326 4.93 19.12C5.11736 19.3063 5.37081 19.4108 5.635 19.4108C5.89919 19.4108 6.15264 19.3063 6.34 19.12L7.05 18.41C7.21383 18.2187 7.29943 17.9726 7.28971 17.7209C7.27999 17.4693 7.17566 17.2305 6.99756 17.0524C6.81947 16.8743 6.58073 16.77 6.32905 16.7603C6.07738 16.7506 5.8313 16.8362 5.64 17ZM12 5C12.2652 5 12.5196 4.89464 12.7071 4.70711C12.8946 4.51957 13 4.26522 13 4V3C13 2.73478 12.8946 2.48043 12.7071 2.29289C12.5196 2.10536 12.2652 2 12 2C11.7348 2 11.4804 2.10536 11.2929 2.29289C11.1054 2.48043 11 2.73478 11 3V4C11 4.26522 11.1054 4.51957 11.2929 4.70711C11.4804 4.89464 11.7348 5 12 5ZM17.66 7.34C17.9223 7.3389 18.1737 7.23474 18.36 7.05L19.07 6.34C19.1747 6.25035 19.2597 6.14004 19.3197 6.01597C19.3797 5.89191 19.4135 5.75677 19.4188 5.61905C19.4241 5.48133 19.4009 5.344 19.3506 5.21568C19.3004 5.08735 19.2241 4.9708 19.1266 4.87335C19.0292 4.77589 18.9126 4.69964 18.7843 4.64936C18.656 4.59909 18.5187 4.57588 18.3809 4.5812C18.2432 4.58652 18.1081 4.62025 17.984 4.68027C17.86 4.7403 17.7496 4.82532 17.66 4.93L17 5.64C16.8137 5.82736 16.7092 6.08081 16.7092 6.345C16.7092 6.60919 16.8137 6.86264 17 7.05C17.1763 7.22536 17.4116 7.32875 17.66 7.34ZM5.66 7.05C5.84626 7.23474 6.09766 7.3389 6.36 7.34C6.49161 7.34076 6.62207 7.31554 6.74391 7.26577C6.86574 7.21601 6.97656 7.14268 7.07 7.05C7.25625 6.86264 7.36079 6.60919 7.36079 6.345C7.36079 6.08081 7.25625 5.82736 7.07 5.64L6.36 4.93C6.26742 4.8361 6.15725 4.76136 6.03578 4.71005C5.91432 4.65873 5.78393 4.63184 5.65207 4.63091C5.52021 4.62998 5.38946 4.65503 5.26728 4.70463C5.14511 4.75424 5.0339 4.82742 4.94 4.92C4.8461 5.01258 4.77136 5.12275 4.72005 5.24422C4.66873 5.36568 4.64184 5.49607 4.64091 5.62793C4.63903 5.89423 4.74302 6.15037 4.93 6.34L5.66 7.05ZM21 11H20C19.7348 11 19.4804 11.1054 19.2929 11.2929C19.1054 11.4804 19 11.7348 19 12C19 12.2652 19.1054 12.5196 19.2929 12.7071C19.4804 12.8946 19.7348 13 20 13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11ZM18.36 17C18.17 16.8943 17.9508 16.8534 17.7355 16.8835C17.5202 16.9136 17.3205 17.0131 17.1668 17.1668C17.0131 17.3205 16.9136 17.5202 16.8835 17.7355C16.8534 17.9508 16.8943 18.17 17 18.36L17.71 19.07C17.8974 19.2563 18.1508 19.3608 18.415 19.3608C18.6792 19.3608 18.9326 19.2563 19.12 19.07C19.3063 18.8826 19.4108 18.6292 19.4108 18.365C19.4108 18.1008 19.3063 17.8474 19.12 17.66L18.36 17ZM12 6.5C10.9122 6.5 9.84883 6.82257 8.94436 7.42692C8.03989 8.03126 7.33494 8.89025 6.91866 9.89524C6.50238 10.9002 6.39346 12.0061 6.60568 13.073C6.8179 14.1399 7.34172 15.1199 8.11091 15.8891C8.8801 16.6583 9.86011 17.1821 10.927 17.3943C11.9939 17.6065 13.0998 17.4976 14.1048 17.0813C15.1098 16.6651 15.9687 15.9601 16.5731 15.0556C17.1774 14.1512 17.5 13.0878 17.5 12C17.4974 10.5421 16.917 9.14471 15.8862 8.11383C14.8553 7.08295 13.4579 6.50264 12 6.5ZM12 15.5C11.3078 15.5 10.6311 15.2947 10.0555 14.9101C9.47993 14.5256 9.03133 13.9789 8.76642 13.3394C8.50151 12.6999 8.4322 11.9961 8.56725 11.3172C8.7023 10.6383 9.03564 10.0146 9.52513 9.52513C10.0146 9.03564 10.6383 8.7023 11.3172 8.56725C11.9961 8.4322 12.6999 8.50151 13.3394 8.76642C13.9789 9.03133 14.5256 9.47993 14.9101 10.0555C15.2947 10.6311 15.5 11.3078 15.5 12C15.5 12.9283 15.1313 13.8185 14.4749 14.4749C13.8185 15.1313 12.9283 15.5 12 15.5ZM12 19C11.7348 19 11.4804 19.1054 11.2929 19.2929C11.1054 19.4804 11 19.7348 11 20V21C11 21.2652 11.1054 21.5196 11.2929 21.7071C11.4804 21.8946 11.7348 22 12 22C12.2652 22 12.5196 21.8946 12.7071 21.7071C12.8946 21.5196 13 21.2652 13 21V20C13 19.7348 12.8946 19.4804 12.7071 19.2929C12.5196 19.1054 12.2652 19 12 19Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="dark:text-zinc-300" x-show="dark" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.64 13C21.4957 12.8807 21.3207 12.8043 21.1351 12.7796C20.9494 12.7548 20.7606 12.7827 20.59 12.86C19.5326 13.3439 18.3829 13.593 17.22 13.59C15.0689 13.5874 13.006 12.7345 11.4812 11.2171C9.95632 9.69979 9.09321 7.64114 9.08001 5.49003C9.08457 4.81586 9.16848 4.14458 9.33001 3.49003C9.36429 3.31557 9.35143 3.13512 9.29277 2.96728C9.2341 2.79944 9.13175 2.65028 8.99626 2.53516C8.86076 2.42004 8.69702 2.34313 8.52191 2.31234C8.3468 2.28156 8.16665 2.29802 8.00001 2.36003C6.43234 3.06494 5.06958 4.15679 4.03977 5.53301C3.00996 6.90924 2.34689 8.52465 2.11286 10.2275C1.87883 11.9304 2.08152 13.6648 2.70188 15.2678C3.32225 16.8708 4.33993 18.2898 5.65931 19.3915C6.9787 20.4932 8.55649 21.2414 10.2445 21.5658C11.9324 21.8903 13.6752 21.7803 15.309 21.2463C16.9428 20.7122 18.414 19.7716 19.5844 18.5128C20.7548 17.254 21.5861 15.7183 22 14.05C22.0504 13.859 22.0431 13.6574 21.9791 13.4705C21.915 13.2836 21.797 13.1199 21.64 13ZM12.14 19.69C10.4618 19.6782 8.82821 19.1479 7.46301 18.1718C6.0978 17.1956 5.06768 15.8214 4.5137 14.2372C3.95971 12.6529 3.90895 10.9362 4.36835 9.32203C4.82776 7.70785 5.77487 6.27513 7.08001 5.22003V5.49003C7.08266 8.17851 8.15183 10.7561 10.0529 12.6572C11.9539 14.5582 14.5315 15.6274 17.22 15.63C17.9259 15.6326 18.63 15.5589 19.32 15.41C18.6299 16.7155 17.5965 17.8079 16.3312 18.5692C15.0659 19.3305 13.6167 19.7319 12.14 19.73V19.69Z"
                                fill="currentColor" />
                        </svg>
                    </button>

                </div>
            </div>
            <div class="flex h-screen">
                <div class="my-auto">
                    <ul class="m-4 space-y-4">
                        <li class="text-base text-zinc dark:text-zinc-100"><a href="/">
                                {{ __('Home') }}</a></li>
                        @foreach ($links as $link)
                            @if (Route::has(strtolower($link->name)))
                                <li class="text-base text-zinc dark:text-zinc-100"><a
                                        href="{{ route(strtolower($link->name)) }}">
                                        {{ $link->name }} </a></li>
                            @else
                                <li class="text-base text-zinc dark:text-zinc-100"><a href="{{ $link->link }}">
                                        {{ $link->name }} </a></li>
                            @endif
                        @endforeach
                        @if (app()->getLocale() == 'ar')
                            <li class="dark:text-zinc-300"><a
                                    href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>
                            </li>
                        @else
                            <li class="dark:text-zinc-300"><a
                                    href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="flex justify-around mt-10">
                        @foreach ($social_links as $social_link)
                            <li><a href="{{ $social_link->value }}">
                                    <x-social-icon :platform="$social_link->key"></x-social-icon>
                                </a></li>
                        @endforeach
                    </ul>

                    <p class="my-10 dark:text-zinc-300">{{ __('Copyright') }} © {!! Date('Y') !!}</p>
                </div>
            </div>
        </div>
        <script>
            function mobileMenu() {
                return {
                    menuOpen: false,
                    dark: Alpine.$persist(false),
                    init() {
                        if (this.dark) {
                            document.documentElement.classList.add('dark')
                        } else {
                            document.documentElement.classList.remove('dark')
                        }
                    },
                    toggleDarkMode() {
                        this.dark = !this.dark;
                        if (this.dark) {
                            document.documentElement.classList.add('dark')
                        } else {
                            document.documentElement.classList.remove('dark')
                        }
                    },
                    showIcon(e) {
                        if(this.dark && e.type == 'mouseenter'){
                            e.target.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden dark:fill-teal-50 dark:stroke-teal-500 dark:group-hover:fill-teal-50 dark:group-hover:stroke-teal-600"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>';
                        }// }else if(this.dark && e.type == 'mouseleave'){
                        //     e.target.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="relative text-white"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>';
                        // }
                    }
                }
            }
        </script>
    </div>
</div>
