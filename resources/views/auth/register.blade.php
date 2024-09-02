<x-layout>
    <x-page-heading>
        {{ __('Register') }}
    </x-page-heading>
    <x-forms.form
        method="POST"
        action="{{ route('user-register') }}"
        enctype="multipart/form-data"
    >
        <x-forms.input
            label="{{ __('Name') }}"
            name="name"
        />
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
        <x-forms.input
            label="{{ __('Password Confirmation') }}"
            name="password_confirmation"
            type="password"
        />

        <x-forms.divider/>

        <x-forms.input
            label="{{ __('Employer Name') }}"
            name="employer"
        />
        <x-forms.input
            label="{{ __('Employer Logo') }}"
            name="logo"
            type="file"
        />

        <x-forms.button>
            {{ __('Create Account') }}
        </x-forms.button>
    </x-forms.form>
</x-layout>