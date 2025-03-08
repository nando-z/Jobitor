<x-auth-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Job') }}
        </h2>
    </x-slot>

    <x-jobs.form :action="route('jobs.store')" method="POST" :job="new App\Models\Job" />
</x-auth-layout>
