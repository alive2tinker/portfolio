<div>
    <h1 class="text-center text-2xl my-4 sm:text-5xl font-bold text-zinc-700 dark:text-zinc-300">
        {{ __('Project Calculator') }}</h1>
    <p class="dark:text-zinc-500 text-center max-w-2xl mx-auto">welcome to the project calculator where you can find the
        cost of developing a technical solution for you. this should help you expect the cost of developing the
        technical solution of your dreams. If you need further consultation, please don't heistate to contact us.</p>
    <div x-data="calculator">
        <div class="flex h-48">
            <div class="m-auto">
                <h3 class="prose-2xl dark:text-white text-4xl font-bold text-center">
                    <span x-text="cost"></span>
                    {{ __('Saudi Riyal') }}
                </h3>
            </div>
        </div>
        <div class="flex">
            <select x-model="" id="">
                <option x-for="(type, index) in types" :key="index" value="type" x-text="type" />
            </select>
        </div>
    </div>
    <script>
        function calculator() {
            return {
                cost: 0,
                type: '',
                types: ['ecommerce store','Mobile App', 'Blog', 'ERP','']
            }
        }
    </script>
</div>
