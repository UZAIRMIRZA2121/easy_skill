<x-guest-layout >btn-primary
    <x-authentication-card style="background-color: white !important;">
        <x-slot name="logo">
       <!--begin::Logo-->
       
                <a href="{{route('std.index')}}" class="py-9 mx-5">
                    <img alt="Logo" src="{{ asset('assets/images/logo.png')}}" style=" width: 320px; " />
                </a>
        <!--end::Logo-->
        </x-slot>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email address"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn custom-btn w-100 mb-5" style="background-color:#007bff">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
