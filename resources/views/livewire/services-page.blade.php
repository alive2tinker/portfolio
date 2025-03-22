<div>
    <div class="py-7 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="col-span-2">
                <h1 class="text-4xl sm:text-5xl tracking-tight sm:font-bold software dark:text-zinc-200">{{ $user->meta['services_header'][app()->getLocale()] }}</h1>
                <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ $user->meta['services_subheader'][app()->getLocale()] }}</p>
            </div>
        </div>
        <div class="grid py-7 sm:grid-cols-3 gap-4">
            @foreach($services as $service)
                <x-service-card :service="$service"/>
            @endforeach
        </div>
        <div class="flex justify-center">
            {{ $services->links() }}
        </div>
    </div>
</div>
