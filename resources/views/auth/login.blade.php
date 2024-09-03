<x-layout>
    <x-page-heading>
        {{ __('Log In') }}
    </x-page-heading>
    <x-forms.form
        method="POST"
        action="{{ route('login') }}"
    >
        <x-forms.input
            label="{{ __('Email') }}"
            name="email"
            type="email"
        />
        <x-forms.input
            label="{{ __('Password') }}"
            name="password"
            type="password"
        />

        <x-forms.button>
            {{ __('Log In') }}
        </x-forms.button>
    </x-forms.form>
</x-layout>