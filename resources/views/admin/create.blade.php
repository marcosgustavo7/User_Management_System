@extends('layouts.app')

@section('content')

<div class="container" align="center">
    <h1 class="mb-4">Create a New Administrator</h1>

    <form method="POST" action="{{ route('admin.users.store') }}" class="custom-form">
        @csrf

        <div class="field">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    @error('name')
            <div class="error-message">{{ $message }}</div>
    @enderror
        </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                    </div>

                        <div class="field">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required>

                        </div>

                        <div class="field">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required>
                        </div>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                <div>
                    <a href="{{ route('admin.dashboard') }}" class="button-return">Back to Dashboard</a>
                    <button type="submit"><span class="submit-button"> Create Administrator </span> </button>
                </div>

    </form>

  

            @if (session('success'))
                <div class="message">{{ session('success') }}</div>
            @endif
</div>

@endsection

@section('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection
