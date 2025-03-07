<x-auth-layout>



    <x-forms.form method="POST" action="{{ route('register') }}">
        <x-forms.title>
            Register
        </x-forms.title>
        <x-forms.input name="email" label="Email" />
        <x-forms.input name="name" label="Your Name" />
        <x-forms.button>
            Login
        </x-forms.button>
    </x-forms.form>

</x-auth-layout>
