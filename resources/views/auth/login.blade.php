<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
 
 <style>
    form {
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
    }
    .css-1bg609n {
        margin-top: 10px;
        -webkit-box-align: baseline;
        align-items: baseline;
        border-width: 0px;
        border-radius: 3px;
        box-sizing: border-box;
        display: inline-flex;
        font-size: inherit;
        font-style: normal;
        font-family: inherit;
        max-width: 100%;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
        white-space: nowrap;
        cursor: pointer;
        padding: 0px 10px;
        vertical-align: middle;
        width: 100%;
        -webkit-box-pack: center;
        justify-content: center;
        font-weight: bold;
        color: rgb(66, 82, 110) !important;
        height: 40px !important;
        line-height: 40px !important;
        background: rgb(255, 255, 255) !important;
        box-shadow: rgb(0 0 0 / 20%) 1px 1px 5px 0px !important;
    }

    .css-19r5em7 {
        transition: opacity 0.3s ease 0s;
        opacity: 1;
        margin: 0px 2px;
        -webkit-box-flex: 1;
        flex-grow: 1;
        flex-shrink: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;

        font-weight: 400;

    }

    .css-1ujqpe8 {
        transition: opacity 0.3s ease 0s;
        opacity: 1;
        align-self: center;
        display: flex;
        -webkit-box-flex: 0;
        flex-grow: 0;
        flex-shrink: 0;
        line-height: 0;
        font-size: 0px;
        user-select: none;
        margin: 0px 2px;
    }
 </style>
        <x-jet-validation-errors class="mb-4" />
 
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
 
        <form method="POST" action="{{ route('login') }}">
            @csrf
 
            <div>
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
 
            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
 
            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
 
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
 
                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
            <br>
            <div>
                <a href="{{ url('auth/google') }}" class="ml-2 css-1bg609n">
                    <span class="css-1ujqpe8">
                        <img src="{{ asset('css/google-logo.svg') }}" style="width: 18px; height: 18px;">
                    </span>
                    <span class="css-19r5em7">
                        <span>Continue with Google</span>
                    </span>
                </a> 
                <a href="{{ url('auth/google') }}" class="ml-2 css-1bg609n">
                    <span class="css-1ujqpe8">
                        <img src="{{ asset('css/apple-logo.svg') }}" style="width: 18px; height: 18px;">
                    </span>
                    <span class="css-19r5em7">
                        <span>Continue with Apple</span>
                    </span>
                </a> 
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>