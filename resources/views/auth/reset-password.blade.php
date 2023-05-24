






@extends('auth.guest')
@section('content')


    <section id="reset_password" class="w-100">


        <form method="POST" action="{{ route('password.store') }}" class="px-3">
            @csrf

            <!-- Password Reset Token -->

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                <i class="bi bi-person-circle" style="font-size: 115px;"></i>
                <h1>Reset Password</h1>
            </div>

            <!-- Email Address -->

            <div class="w-100 mb-4">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control ps-3" type="email" name="email" value="{{old('email', $request->email)}}" required autofocus autocomplete="username"/>

                @if ($errors->get('email'))
                    <ul>
                        @foreach ((array) $errors->get('email') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

            <!-- Password -->

            <div class="w-100 mb-4">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password"/>
                @if ($errors->get('password'))
                    <ul>
                        @foreach ((array) $errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Confirm Password -->


            <div class="w-100 mb-4">
                <label for="password_confirmation" class="form-label">Confirm password</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                @if ($errors->get('password_confirmation'))
                    <ul>
                        @foreach ((array) $errors->get('password_confirmation') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>



            <div class="w-100 d-flex flex-row justify-content-center">
                <button class="btn btn-primary mb-3 w-50" type="submit">Reset Password</button>
            </div>

        </form>
    </section>


@endsection

