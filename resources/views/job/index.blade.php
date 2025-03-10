<x-layout>

    <div class="hero mt-20">
        <div class="hero-content text-center">
            <div class="max-w-md mx-auto">
                <!-- Centering the content -->
                <h1 class="text-5xl font-bold">Let's Find You A Great Job</h1>
                <div class="mt-7">

                    <x-forms.form action="/search">
                        <x-forms.input :label='false' name="q" placeholder="Web Development..." />

                    </x-forms.form>
                </div>
            </div>
        </div>
    </div>

    {{-- Card Container --}}
    <x-panal>
        <x-slot name="title">
            Featured Jobs
        </x-slot>
        @foreach ($featuredJobs as $job)
            <x-card :job="$job" />
        @endforeach
    </x-panal>

    {{-- Tags --}}

    <x-panal>
        <x-slot name="title">
            Tags
        </x-slot>
        @foreach ($tags as $tag)
            <x-tags :tag="$tag" />
        @endforeach
    </x-panal>


    {{-- Find Jobs --}}

    <x-panal>
        <x-slot:title>
            Find Jobs
        </x-slot:title>
        @foreach ($jobs as $job)
            <x-job-card :job="$job" />
        @endforeach
    </x-panal>
    <div class="w-full mt-7">
        {{-- {{ $jobs->links() }} --}}
        <x-footer />
    </div>


</x-layout>
