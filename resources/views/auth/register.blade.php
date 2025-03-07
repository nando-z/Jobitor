<x-auth-layout>


    {{-- Register --}}
    <x-forms.form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
        <x-forms.title>
            Register
        </x-forms.title>
        <x-forms.input name="name" label="Your Name" />
        <x-forms.input name="email" label="Email" type="email" />
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Password confirmation" type="password" />
        {{-- Employer Session --}}
        <x-forms.divider />
        <x-forms.input name="employer" label="Employer Name" />
        <x-forms.input name="logo" label="Employer Logo" type="file" />

        <x-forms.button>
            Create Account
        </x-forms.button>
    </x-forms.form>


</x-auth-layout>
