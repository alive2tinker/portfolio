<div id="contact-form">
    <form wire.prevent:submit="SubmitContactRequest" method="post">
        <div class="space-y-3 py-3">
            <div>
                <div class="mt-1">
                    <input type="text" wire:model="name" id="name"
                           class="dark:bg-zinc-700 dark:text-white dark:border-teal-600 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="{{ __('Full Name') }}">
                </div>
            </div>
            <div>
                <div class="mt-1">
                    <input type="email" wire:model="email" id="email"
                           class="dark:bg-zinc-700 bg-teal-700 dark:text-white dark:border-teal-600 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="{{ __('Your Email') }}">
                </div>
            </div>
            <div>
                <div class="mt-1">
                    <input type="email" wire:model="subject" id="subject"
                           class="dark:bg-zinc-700 dark:text-white dark:border-teal-600 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="{{ __('Subject') }}">
                </div>
            </div>
            <div>
                <div class="mt-1"><textarea wire:model="message"
                                            class="dark:bg-zinc-700 dark:text-white dark:border-teal-600 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="message" cols="30" rows="10"
                                            placeholder="{{ __('Your Message') }}"></textarea></div>
            </div>
        </div>
        <button type="submit"
                class="dark:bg-zinc-700 dark:text-white inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full">{{ __('Submit') }}
        </button>
    </form>
</div>
