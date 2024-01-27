{{-- <!-- resources/views/register.blade.php --> --}}


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
<form method="post" action="{{ route('student.reg.post') }}">
    @csrf
    <div class="mb-3">
        <label for="regno" class="form-label">Regno</label>
        <input type="text" class="form-control" id="regno" name="regno" />
        @error('regno')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd" />
        @error('pwd')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>


@endsection
