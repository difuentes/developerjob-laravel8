@extends('layouts.app')

@section('content')
<main class="container mt-5 pl-10 ">
    <div class="flex flex-wrap   justify-center">
        <div class="w-1/3 order-2 md:order-1 ">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-teal-700 text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" novalidate method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="border-gray-600 form-input w-full py-2 @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 border-red-500 p-2  border-l-4 margin-border-2 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full border-gray-600 py-2 @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}"  autocomplete="email">

                        @error('email')
                        <p class="text-red-500 border-red-500 p-2  border-l-4 margin-border-2 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input  border-gray-600 py-2 w-full @error('password') border-red-500 @enderror" name="password"
                             autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 border-red-500 p-2  border-l-4 margin-border-2 text-xs italic mt-4">
                                    {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input border-gray-600 py-2 w-full border-gray-600"
                            name="password_confirmation"  autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-white bg-teal-800 hover:bg-teal-300 sm:py-4">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
        <div class="w-1/3 order-1 md:order-2 pl-2 bg-teal-300 rounded-md text-center">
               <h1 class="text-teal-800 font-extrabold text-3xl mt-20">¿ERES RECLUTADOR ?<h2>
            <p class="text-xl mt-5 p-2 leading-7  text-white">Crear una cuenta gratis y comienza a publicar hasta 10 bacantes</p>
        </div>
    </div>
</main>
@endsection
