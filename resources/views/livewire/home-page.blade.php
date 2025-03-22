<div class="py-12">
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
        <div class="mx-5 col-span-3 flex">
            <div>
            <h1 class="text-4xl font-bold tracking-tight opacity-0 text-zinc-800 dark:text-zinc-100 sm:text-5xl main-description">
                {{ $user->meta['main_description'][app()->getLocale()] }}</h1>
            <p class="mt-6 secondary-description text-lg opacity-0 text-zinc-600 dark:text-zinc-400 secondary-description">
                {{ $user->meta['sub_description'][app()->getLocale()] }}</p>
            </div>
            <div>
            <img class="rounded-full w-48 my-7 ltr:ml-48 rtl:mr-20 personal-foto opacity-0" src="{{ asset('images/1652505616025.jpeg') }}" alt="personal photo">
            </div>
        </div>
    </div>
    <div class="mx-5 py-5 w-1/6">
        <ul class="flex justify-around">
            @foreach ($social_links as $social_link)
                <li class="social-link opacity-0 mt-12"><a href="{{ $social_link->value }}">
                        <x-social-icon :platform="$social_link->key"></x-social-icon>
                    </a></li>
            @endforeach
        </ul>
    </div>
    <div class="max-w-5xl mx-auto py-7">
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 px-5 py-7">
            <div class="col-span-2 experience-container opacity-0" style="transform: translateX(-100px)">
                <h2 class="text-2xl text-black dark:text-zinc-100 font-bold tracking-tight  py-4 sm:text-3xl">
                    {{ __('Experience') }}</h2>
                @foreach ($user->experiences as $experience)
                    <x-experience :experience="$experience"/>
                @endforeach
            </div>
            <div class="col-span-2 opacity-0" id="skills-container" style="transform:translateX(50px)">
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
                        <span class="ml-3">{{ __('Skills') }}</span>
                    </h2>
                    <ol class="mt-6 space-y-4">
                        @foreach ($user->skills as $skill)
                            <li class="flex gap-4">
                                <div
                                    class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                    <x-skill-icon :skill="$skill->translate('title', 'en')"></x-skill-icon>
                                </div>
                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                    <dt class="sr-only">Skill</dt>
                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                        {{ $skill->title }}
                                    </dd>
                                    <x-progress-bar :percentage="$skill->percentage"/>
                                </dl>
                            </li>
                        @endforeach
                    </ol>
                    <div x-data="{ modalOpen: false }" class="cv-component !z-50">
                        <button @click="modalOpen = true"
                                class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full">{{ __('Download CV') }}</button>
                        <div class="relative z-10" style="z-index:9999 !important;" x-cloak x-show="modalOpen"
                             aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                            <div class="fixed inset-0 z-50 overflow-y-auto" style="z-index:9999 !important;">
                                <div
                                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                    <div
                                        class="relative transform z-50 overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                                        <div>
                                            <div class="mt-3 text-center sm:mt-5">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                    <div>
                                                        <div class="flex justify-center">
                                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 64 64" width="64px" height="64px">
                                                                <path
                                                                    d="M 35.136719 2.386719 C 34.917969 2.378906 34.699219 2.390625 34.480469 2.429688 L 5.304688 7.578125 C 3.390625 7.917969 2 9.574219 2 11.515625 L 2 50.484375 C 2 52.429688 3.390625 54.085938 5.304688 54.421875 L 34.480469 59.570313 C 34.652344 59.601563 34.828125 59.613281 35 59.613281 C 35.703125 59.613281 36.382813 59.371094 36.925781 58.914063 C 37.609375 58.34375 38 57.503906 38 56.613281 L 38 52 L 57 52 C 58.652344 52 60 50.652344 60 49 L 60 13 C 60 11.347656 58.652344 10 57 10 L 38 10 L 38 5.382813 C 38 4.496094 37.609375 3.65625 36.925781 3.085938 C 36.417969 2.65625 35.789063 2.414063 35.136719 2.386719 Z M 35.105469 4.390625 C 35.359375 4.414063 35.542969 4.535156 35.640625 4.617188 C 35.777344 4.730469 36 4.980469 36 5.382813 L 36 56.613281 C 36 57.019531 35.777344 57.269531 35.640625 57.382813 C 35.507813 57.496094 35.230469 57.671875 34.828125 57.601563 L 5.652344 52.453125 C 4.695313 52.285156 4 51.457031 4 50.484375 L 4 11.515625 C 4 10.542969 4.695313 9.714844 5.652344 9.546875 L 34.824219 4.398438 C 34.925781 4.382813 35.019531 4.378906 35.105469 4.390625 Z M 38 12 L 57 12 C 57.550781 12 58 12.449219 58 13 L 58 49 C 58 49.550781 57.550781 50 57 50 L 38 50 L 38 44 L 51 44 C 51.550781 44 52 43.554688 52 43 C 52 42.445313 51.550781 42 51 42 L 38 42 L 38 38 L 43.375 38 C 43.925781 38 44.375 37.554688 44.375 37 C 44.375 36.445313 43.925781 36 43.375 36 L 38 36 L 38 32 L 51 32 C 51.550781 32 52 31.554688 52 31 C 52 30.445313 51.550781 30 51 30 L 38 30 L 38 26 L 51 26 C 51.550781 26 52 25.554688 52 25 C 52 24.445313 51.550781 24 51 24 L 38 24 L 38 20 L 51 20 C 51.550781 20 52 19.554688 52 19 C 52 18.445313 51.550781 18 51 18 L 38 18 Z M 10.15625 20.011719 C 10.027344 19.992188 9.890625 19.996094 9.757813 20.03125 C 9.222656 20.164063 8.894531 20.707031 9.03125 21.242188 L 14.03125 41.242188 C 14.140625 41.683594 14.53125 41.992188 14.984375 42 C 15.4375 41.984375 15.839844 41.703125 15.964844 41.265625 L 20 26.734375 L 24.035156 41.265625 C 24.15625 41.703125 24.550781 42 25 42 L 25.015625 42 C 25.46875 41.992188 25.859375 41.683594 25.96875 41.242188 L 30.96875 21.242188 C 31.105469 20.707031 30.777344 20.164063 30.242188 20.03125 C 29.710938 19.894531 29.164063 20.21875 29.03125 20.757813 L 24.949219 37.078125 L 20.964844 22.734375 C 20.84375 22.300781 20.449219 22 20 22 C 19.550781 22 19.15625 22.300781 19.035156 22.734375 L 15.050781 37.078125 L 10.96875 20.757813 C 10.871094 20.355469 10.539063 20.070313 10.15625 20.011719 Z M 47 36 C 46.449219 36 46 36.445313 46 37 C 46 37.554688 46.449219 38 47 38 L 51 38 C 51.550781 38 52 37.554688 52 37 C 52 36.445313 51.550781 36 51 36 Z"/>
                                                            </svg>
                                                        </div>
                                                        <div class="mt-5 sm:mt-6">
                                                            <a href="{{ route('fetchCV', ['user' => 1, 'type' => 'word']) }}"
                                                               class="inline-flex w-full justify-center rounded-md border border-transparent bg-teal-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-sm">{{ __('Word') }}</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="flex justify-center">
                                                            <img src="{{ asset('images/pdf-icon.png') }}"
                                                                 alt="cv in pdf format">
                                                        </div>
                                                        <div class="mt-5 sm:mt-6">
                                                            <a href="{{ route('fetchCV', ['user' => 1, 'type' => 'pdf']) }}"
                                                               class="inline-flex w-full justify-center rounded-md border border-transparent bg-teal-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-sm">{{ __('PDF') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button @click="modalOpen = false;"
                                                        class="text-center z-50 text-zinc-500 pt-4">{{ __('Close') }}</button>
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
        <!-- hardware section -->
        {{-- <h2 class="text-2xl font-bold tracking-tight text-zinc-500 py-4 dark:text-zinc-100 sm:text-3xl mx-4 py-4">
            {{ __('Hardware') }}</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 my-4">
            @foreach($user->hardware() as $hardware)
                <div class="text-center">
                    <div class="flex justify-center">
                        <img class="w-12 aspect-square rounded-full" src="{{ asset($hardware->logo) ?? $hardware->logo }}" alt="{{ $hardware->name }}">
                    </div>
                    <p class="dark:text-zinc-300">{{ $hardware->name }}</p>
                </div>
            @endforeach
        </div> --}}
        <!-- software section -->
        <h2 class="text-2xl font-bold tracking-tight text-black dark:text-zinc-100 opacity-0 software py-4 sm:text-3xl mx-4">
            {{ __('Software') }}</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 my-4">
            @foreach($user->software() as $software)
                <div class="text-center software opacity-0">
                    <div class="flex justify-center">
                        @if(env('APP_ENV') === 'local')
                            <img class="w-12 aspect-square rounded-full" src="{{ asset("images/logos/{$software->logo}") }}" alt="{{ $software->name }}">
                        @else
                            <img class="w-12 aspect-square rounded-full" src="{{ "storage/" . $software->logo }}" alt="{{ $software->name }}">
                        @endif
                    </div>
                    <p class="dark:text-zinc-300">{{ $software->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
        <div class="" id="contact-form-container">
            <h3 class="text-2xl mt-0.5 font-bold tracking-tight text-black dark:text-zinc-100 sm:text-3xl">
                {{ __('Get In Touch') }}</h3>
            <form wire:submit.prevent="getContact" class="my-4" method="post">

                <div>
                    <label for="first_name"
                           class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">{{ __('First Name') }}</label>
                    <div class="mt-2">
                        <input type="text" name="first_name" id="first_name" wire:model="first_name"
                               class="!bg-teal-50 dark:!bg-zinc-800 dark:text-zinc-400 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-500 sm:text-sm sm:leading-6">
                    </div>
                    @error('first_name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="last_name"
                           class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">{{ __('Last Name') }}</label>
                    <div class="mt-2">
                        <input type="text" name="last_name" id="last_name" wire:model="last_name"
                               class="!bg-teal-50 dark:!bg-zinc-800 dark:text-zinc-400 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-500 sm:text-sm sm:leading-6">
                    </div>
                    @error('last_name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="email"
                           class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">{{ __('Email') }}</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" wire:model="email"
                               class="!bg-teal-50 dark:!bg-zinc-800 dark:text-zinc-400 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-500 sm:text-sm sm:leading-6">
                    </div>
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="phone"
                           class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">{{ __('Phone') }}</label>
                    <div class="mt-2">
                        <input type="text" name="phone" id="p" wire:model="phone"
                               class="!bg-teal-50 dark:!bg-zinc-800 dark:text-zinc-400 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-500 sm:text-sm sm:leading-6">
                    </div>
                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>


                <div>
                    <label for="comment"
                           class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">{{ __('Message') }}</label>
                    <div class="mt-2">
                        <textarea rows="4" name="details" wire:model="message" id="comment"
                                  class=" resize-none !bg-teal-50 dark:!bg-zinc-800 dark:text-zinc-400 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-500 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="flex rounded-md bg-teal-500 px-3 py-2 my-2 text-sm font-semibold text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500" wire:loading.attr="disabled"
                >
                    <span class="px-2">{{ __("Send")}}</span>
                    <svg aria-hidden="true" wire:loading class="w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-teal-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                </button>
            </form>
        </div>
        <div id="collab-container">
            <!-- contact information -->
             <div class="border border-gray-600 px-3 mx-2 rounded-xl py-4 mt-1.5">
                <h3 class="text-2xl mt-0.5 font-bold tracking-tight text-black dark:text-zinc-100 sm:text-3xl">{{ __('Contact Information') }}</h3>
                <ul class="my-5 space-y-5">
                    <li class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 rounded-full bg-teal-50 hover:bg-teal-500 hover:text-white p-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <p class="mx-2 mt-2 dark:text-zinc-200">966548226392</p>
                    </li>
                    <li class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 rounded-full bg-teal-50 hover:bg-teal-500 hover:text-white p-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                        </svg>

                        <p class="mx-2 mt-2 dark:text-zinc-200">sufayran@gmail.com</p>
                    </li>
                </ul>
             </div>
             <!-- Collab -->
             <div class="border border-gray-600 px-3 mx-2 rounded-xl py-4 mt-1.5">
                <h3 class="text-2xl mt-0.5 font-bold tracking-tight text-black dark:text-zinc-100 sm:text-2xl">{{ __("Let's Create Something Amazing") }}</h3>
                <p class="mt-6 text-lg text-zinc-600 dark:text-zinc-400">{{ __("Whether you're looking to collaborate on a project or just want to say hello, I'd love to hear from you!") }}</p>
             </div>
        </div>
    </div>
</div>
