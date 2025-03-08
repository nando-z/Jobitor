<x-layout>
    <x-page-heading>
        Result
    </x-page-heading>

    <div class="mt-6 space-y-7">
        @foreach ($jobs as $job)
        <x-job-card :$job />
        @endforeach
    </div>
</x-layout>
