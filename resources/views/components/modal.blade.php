<div x-cloak>
    <div>
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="modalOpen"
            @click="modalOpen = !modalOpen">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75" x-transition:enter="transition-opacity ease-in duration-500" x-transition:enter-start="bg-opacity-0" x-transition:enter-end="bg-opacity-75" x-show="modalOpen"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                        @if ($project->image != '')
                            <img
                                src="{{ env('APP_ENV') === 'local' ? 'https://malikthefullstack.com/storage/' . $project->image : $project->image }}" />
                        @else
                            <img src="{{ asset('images/noImage.jpg') }}" />
                        @endif
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900 rtl:text-right"
                                    id="modal-title">
                                    {{ $project->title }}</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">{{ strip_tags($project->excerpt) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
