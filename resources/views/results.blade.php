<x-layout>
    <x-page-heading>
        {{ __('Search Results') }}
    </x-page-heading>

    <div class="mt-8 space-y-7">
        @foreach ($jobs as $job)
            <x-job-card :$job />
        @endforeach

        @if ($jobs instanceof \Illuminate\Pagination\LengthAwarePaginator)
            {{ $jobs->links() }}
        @endif

    </div>

</x-layout>
