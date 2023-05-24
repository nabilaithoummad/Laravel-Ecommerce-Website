




@extends('auth.guest')
@section('content')


<section id="forgot_password" class="w-100">


    <form method="POST" action="{{ route('password.email') }}" class="px-3">
        @csrf
        @if (session('status'))
            <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                {{session('status')}}
            </div>
        @endif
        <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
            <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        </div>


        <div class="w-100 mb-4">
            <label for="email" class="form-label">Email</label>
            <input  id="email" class="form-control" type="email" name="email" value='{{old('email')}}' required autofocus/>

            @if ($errors->get('email'))
                <ul>
                    @foreach ((array) $errors->get('email') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif

        </div>


        <div class="w-100 d-flex flex-row justify-content-center">
            <button class="btn btn-primary mb-3 w-50" type="submit">Email Password Reset Link</button>
        </div>


    </form>
</section>


@endsection



