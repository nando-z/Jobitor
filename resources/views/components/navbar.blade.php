@props(['slot' => ''])

<nav class="px-4 sm:px-6 lg:px-8 py-4 border-b border-white/10">
    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="/" class="text-2xl font-bold ">
                {{ env("APP_NAME") }}
            </a>
        </div>

        <!-- Main Navigation -->
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-12 w-full md:w-auto">
            {{ $slot }}
        </div>

    </div>
</nav>
