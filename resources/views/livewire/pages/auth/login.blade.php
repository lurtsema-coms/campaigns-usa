<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();
        
        if (Auth::user()->isStudent()){
            $this->redirectIntended(default: RouteServiceProvider::STUDENT, navigate: true);
        }else{
            $this->redirectIntended(default: RouteServiceProvider::INSTRUCTOR, navigate: true);
        }
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">

        <div class="mb-6">
            <span class="font-bold text-md ">Doesn't have an account yet? <a wire:navigate href="/register" class="font-bold text-indigo-800 underline">Sign Up</a></span>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input wire:model="form.email" id="email" class="block w-full mt-1" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 ">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input wire:model="form.password" id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex flex-col mt-4 sm:flex-row gap-x-4">
            <label for="remember_me" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="border-indigo-600 rounded shadow-sm focus:border-indigo-600 dark:focus:border-indigo-600 focus:ring-indigo-600 dark:focus:ring-indigo-600" name="remember">
                <span class="text-sm ms-2 text-indigo-950">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm underline rounded-md text-indigo-950 hover:text-indigo-900 dark:hover:text-indigo-900 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500 dark:focus:ring-offset-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="flex items-center justify-center w-full">
                {{ __('LOGIN') }}
            </x-primary-button>
        </div>

        <div class="mt-4">            
            <a wire:navigate href="{{ route('home_new') }}">
                <div class="flex items-center gap-2 font-medium text-gray-700">
                    <span>Back to home</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
            </a>
        </div>
    </form>
</div>
