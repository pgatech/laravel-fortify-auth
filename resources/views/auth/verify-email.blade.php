@extends('layouts.app', ['title' => 'Email Verfication'])

@section('content')
    <div class="container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Email Verfication</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            Link verifikasi email berhasil dikirim!
                        </div>
                    @endif
                    <div class="mb-3">
                        <p>
                            Untuk mengunjungi halaman ini, Anda harus melakukan verifikasi email. Jika belum menerima link konfirmasi, silahkan untuk kirim ulang.
                        </p>
                    </div>

                <form action="/email/verification-notification" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Resend Verification</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection