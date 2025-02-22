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

<div class="">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="relative mt-12 -top-5" wire:submit.prevent="login">
        <div>
            <label for="username" class="block font-bold text-gray-800">Email</label>
            <input wire:model="form.email" type="text" placeholder="Enter your email" class="block w-full h-12 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-400 rounded-lg focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <div class="flex items-center justify-between">
                <label for="password" class="block font-bold text-gray-800">Password</label>
            </div>

            <input wire:model="form.password" type="password" placeholder="Enter your password" class="block w-full h-12 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-400 rounded-lg focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <div>
            <!-- Remember Me -->
            <div class="flex flex-wrap justify-between mt-6 text-sm gap-y-2 gap-x-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox" class="border-indigo-600 rounded shadow-sm focus:border-indigo-600 dark:focus:border-indigo-600 focus:ring-indigo-600 dark:focus:ring-indigo-600" name="remember">
                    <label for="remember" class="select-none relative top-[1px] ms-2 text-indigo-950">{{ __('Remember me') }}</label>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline rounded-md text-indigo-950 hover:text-indigo-900 dark:hover:text-indigo-900 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500 dark:focus:ring-offset-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full px-6 py-3 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Sign In
            </button>
        </div>
    </form>
    <div class="mt-4">
        @session('cart_message')
            <div class="text-center text-red-600">
                {{ session('cart_message') }}
            </div>
        @endsession

        @session('success')
            <div class="text-center text-green-600">
                {{ session('success') }}
            </div>
        @endsession
    </div>
    <p class="mt-6 font-light text-center text-gray-500"> Don't have an account? <a wire:navigate href="{{ route('register') }}" class="font-medium text-gray-700 hover:underline">Create One</a></p>
    <div class="mt-4 text-center">            
        <a wire:navigate href="{{ route('home_new') }}">
            <div class="flex items-center justify-center gap-2 font-medium text-gray-700 hover:opacity-70">
                <span>Back to home</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
        </a>
    </div>
</div>
