@extends('layouts.innerpage')

{{-- heading --}}
@section('heading', 'Student Registration')

{{-- more breadcrumbs --}}
@section('breadcrumbs')
    <li>MedKyu</li>
    <li>Log in </li>
@endsection

{{-- main content --}}
@section('content')
<div class="d-flex flex-column min-vh-100">
   

    <div class="container mt-5 flex-grow-1">
        <div class="row d-flex justify-content-center align-items-center">
            
            <div class="login-box">
                <h2>Login</h2>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="user-box">
                        <input type="text" id="email" name="email" >
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="email">Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" id="pwd" name="pwd">
                        @error('pwd')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="pwd">Password</label>
                    </div>

                    <div>
                        <label for="remember_me" class="flex items-center">
                            <input type="checkbox" id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                   
                    <div class="user-box">
                        <button type="submit" class="btn btn-outline-primary"> Login</button>
                    </div>
                    <div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <footer class="footer mt-auto py-3 bg-light"> --}}
        <!-- Footer content -->
        
    {{-- </footer> --}}
</div>
@endsection
