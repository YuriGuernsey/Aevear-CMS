@extends('layouts.app')

@section('content')
@guest
<section class="relative flex flex-wrap lg:h-screen lg:items-center">
  <div class="w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24">
    <div class="max-w-lg mx-auto text-left">
      <h1 class="text-2xl font-bold sm:text-3xl">Happy <?= date('l'); ?></h1>
    </div>

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-8 mb-0 space-y-4" autocomplete="off">
    @csrf
      <div>
        <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>

        <div class="relative">
          <input
          id="email"
            type="email"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm form-control @error('email') is-invalid @enderror"
            placeholder="Enter email"
            name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus
          />
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="absolute inset-y-0 inline-flex items-center right-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
              />
            </svg>
          </span>
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">{{ __('Password') }}</label>
        <div class="relative">
          <input
          id="password"
            type="password"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm form-control @error('password') is-invalid @enderror"
            placeholder="Enter password"
            name="password" required autocomplete="current-password"
          />
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="absolute inset-y-0 inline-flex items-center right-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
              />
            </svg>
          </span>
        </div>
      </div>
      
      <div class="flex items-center justify-between">
        @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
        @endif

        <button
          type="submit"
          class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg"
        >
        {{ __('Login') }}
        </button>
      </div>
    </form>
  </div>

  <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-full">
    <img
      class="absolute inset-0 object-cover w-full h-full"
      src="https://source.unsplash.com/1600x900"
      alt=""
    />
  </div>
</section>
<footer style="font-size: 20px;position: fixed;bottom: 10px;left: 20px;color: rgb(0 0 0 / 65%);font-weight: bold;">Powered by <a href="https://aevear.com" style="color: #939393;">Aevear</a></footer>

@else
     <script>
         document.location.replace('/home');
     </script>                 
@endguest
@endsection
