@extends('layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" name="username" id="username" class="form-control @error('username') is-invalid @enderror" required>
                        @error('username')
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
                    <div class="form-group d-flex justify-content-between">
                        <div class="form-group-check">
                            <input type="checkbox" name="remember" id="remember">
                            <small>
                                <label for="remember">Remember me</label>
                            </small>
                        </div>
                        <div>
                            <small><a href="/forgot-password" style="text-decoration: none;">Forgot Password?</a></small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Login</button>
            </form>
            <div class="text-center mt-3">
                <small>
                    Don't have account? <a href="/register" style="text-decoration: none;">Register</a>
                </small>
            </div>
        </div>
    </div>
@endsection