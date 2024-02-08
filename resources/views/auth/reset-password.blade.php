@extends('layouts.auth', ['title' => 'Reset Passoword'])

@section('content')
    <div class="card">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            <form action="/reset-password" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ request()->route('token') }}">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection