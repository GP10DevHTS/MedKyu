@extends('layouts.innerpage')

{{-- heading --}}
@section('heading', 'Student Registration')

{{-- more breadcrumbs --}}
@section('breadcrumbs')
    <li>MedKyu</li>
    <li>Register</li>
@endsection

{{-- main content --}}
@section('content')
<div class="d-flex flex-column min-vh-100">
   

    <div class="container mt-5 flex-grow-1">
        <div class="row d-flex justify-content-center align-items-center">
            
            <div class="login-box">
                <h2>Register</h2>
                <form method="post" action="{{ route('student.reg.post') }}">
                    @csrf
                    <div class="user-box">
                        <input type="text" id="regno" name="regno">
                        @error('regno')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="regno">Regno</label>
                    </div>
                    <div class="user-box">
                        <input type="password" id="pwd" name="pwd">
                        @error('pwd')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="pwd">Password</label>
                    </div>
                    {{-- <button type="submit" class="btn btn-primary bg-blue-500 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button> --}}
                    <button type="submit" class="btn btn-outline-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

    {{-- <footer class="footer mt-auto py-3 bg-light"> --}}
        <!-- Footer content -->
        
    {{-- </footer> --}}
</div>
@endsection
