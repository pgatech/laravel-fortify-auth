@extends('layouts.auth', ['title' => 'Forgot Password'])

@section('content')
    <div class="card">
        <div class="card-header">Forgot Password</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/forgot-password" method="post">
                @csrf
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
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-primary">Get Link Reset Password</button>
                </div>
            </form>
        </div>
    </div>
@endsection