@extends('auth.guest')
@section('content')


<section id="verify_email" class="w-100 d-flex flex-row justify-content-center">



    <div id="forms" class="w-75 py-5 px-4">
        @if (session('status') == 'verification-link-sent')
            <div class="w-100">
                <p>A new verification link has been sent to the email address you provided during registration.</p>
            </div>
        @endif
        <div class="w-100">
            <form method="POST" action="{{ route('verification.send') }}" >
                @csrf

                <button class="btn btn-primary mb-3 w-100" type="submit">Resend Verification Email</button>
            </form>

            <form method="POST" action="{{ route('logout') }}" >
                @csrf

                <button class="btn btn-danger mb-3 w-100" type="submit">Log Out</button>
            </form>
        </div>
    </div>
</section>

@endsection

