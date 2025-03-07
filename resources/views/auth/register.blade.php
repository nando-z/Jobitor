<x-layout>



    <x-forms.form method="POST" action="{{ route('register') }}">
        <x-forms.title>
            Register
        </x-forms.title>
        <x-forms.input name="name" label="Your Name" type="email" />
        <x-forms.input name="email" label="Email" />
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Password confirmation" type="password" />
        <x-forms.button>
            Create Account
        </x-forms.button>
    </x-forms.form>

</x-layout>
