<x-layout>

    <div class="hero  mt-20">
        <div class="hero-content text-center">
            <div class="max-w-md mx-auto">
                <!-- Centering the content -->
                <h1 class="text-5xl font-bold">Let's Find You A Great Job</h1>
                <div class=" mt-7">
                    <x-search-bar />
                </div>

            </div>
        </div>
    </div>

    {{-- Card --}}

    <div class="w-full  mt-20">
        <div class="p-4">
            <p class="font-bold text-2xl">Top Jobs</p>
            <div class="flex  flex-wrap sm:items-center justify-start mt-7 md:flex-row flex-col gap-4">
                @foreach ($jobs as $job)
                <x-dark-card />
                @endforeach
            </div>
        </div>
    </div>

    {{-- Tags --}}

    <div class="w-full  mt-7">
        <div class="p-4">
            <p class="font-bold text-2xl">Tags</p>
            <div class="flex items-center mt-5 flex-wrap sm:flex-row gap-2">
                @foreach ($tags as $tag)
                <x-tags :$tag />
                @endforeach

            </div>
        </div>
    </div>

    {{-- Find Jobs --}}

    <div class="w-full 00 mt-7">
        <div class="p-4">
            <p class="font-bold text-2xl">Find Jobs</p>
            <div class="flex w-full items-center mt-4 flex-wrap sm:flex-row gap-5">
                @foreach ($jobs as $job)
                <x-job-card />
                @endforeach

            </div>
        </div>

</x-layout>
