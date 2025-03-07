<x-auth-layout>

    <x-navbar>
        <x-slot:btn link='/'>
            Home
        </x-slot:btn>
    </x-navbar>

    <x-forms.form method="POST" action="{{ route('register') }}">
        <x-forms.title>
            Login
        </x-forms.title>

        <x-forms.input name="email" label="Login with Email " />
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Password confirmation" type="password" />
        <x-forms.divider>
        </x-forms.divider>
        <x-forms.button>
            Login Now
        </x-forms.button>
    </x-forms.form>


</x-auth-layout>
