<x-layout>
    <x-page-heading>

        Create New Job
    </x-page-heading>

    {{-- Form --}}

    <x-forms.form method="POST" action='/jobs'>
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90.000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Djbuti , Djbuti" />
        <x-forms.select label="Schedule" name="schedule">
            <option> Part Time</option>
            <option> Full Time</option>
        </x-forms.select>
        {{-- Links and Tags --}}
        <x-forms.input label="URL" name="url" placeholder="https://jobitor.com" />
        <x-forms.checkbox label="Featured (Cost Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="back-end, front-end , UX " />
        <x-forms.button>
            Publish
        </x-forms.button>
    </x-forms.form>

</x-layout>
