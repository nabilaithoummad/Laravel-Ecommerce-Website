@extends('auth.guest')
@section('content')


    <section id="loginsection" class="w-100">


        <form method="POST" action="{{ route('login') }}" class="px-3">
            @csrf
            @if (session('status'))
                <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                    {{session('status')}}
                </div>
            @endif
            <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                <i class="bi bi-person-circle" style="font-size: 115px;"></i>
                <h1>Log In</h1>
            </div>
            <div class="w-100 mb-4">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control ps-3" type="email" name="email" required autofocus autocomplete="username" value="{{old('email')}}"/>

                @if ($errors->get('email'))
                    <ul>
                        @foreach ((array) $errors->get('email') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
            <div class="w-100 mb-4">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"/>

                @if ($errors->get('password'))
                    <ul>
                        @foreach ((array) $errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

            <div class="w-100 mb-4">

                <label for="remember_me" >
                    <input id="remember_me" type="checkbox" class="rounded" name="remember">
                    <span class="ms-2">Remember me</span>
                </label>

            </div>

            <div class="w-100 d-flex flex-row justify-content-center">
                <button class="btn btn-primary mb-3 w-50" type="submit">Log In</button>
            </div>
            <div class="w-100 d-flex flex-row justify-content-center">
                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}" class="mt-1">Forget password ?</a>

                @endif
            </div>

        </form>
    </section>


@endsection

