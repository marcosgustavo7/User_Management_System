<x-guest-layout>
    <x-auth-card :title="'Email Recovery'"> 
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        Enter your email to request the account to be unlocked.
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('account.unlock.send') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-secondary-button>
                    <a href="{{ route('login') }}">
                        {{ __('Cancel') }}
                    </a>
                </x-secondary-button>

                <x-button class="ml-4">
                    {{ __('Submit Request') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
