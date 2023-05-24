@extends('auth.guest')
@section('content')

    <section id="registersection">

        <form method="POST" action="{{ route('register') }}" class="px-3 py-3">
            @csrf
            <div id="inputs">
                <div style="background-color: white;" class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                    <i class="bi bi-person-circle" style="font-size: 115px;"></i>
                    <h1>Register</h1>
                </div>
                <main id="main1" class="px-2">
                    <div class="w-100 mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control ps-3" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" />
                        @if ($errors->get('name'))
                            <ul>
                                @foreach ((array) $errors->get('name') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="w-100 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control ps-3" type="email" name="email" value="{{old('email')}}" required autocomplete="username" />
                        @if ($errors->get('email'))
                            <ul>
                                @foreach ((array) $errors->get('email') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </main>

                <main id="main2" class="px-2">
                    <div class="w-100 mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input class="form-control ps-3" type="text" name="address" value="{{old('address')}}" required autocomplete="address"/>
                        @if ($errors->get('address'))
                            <ul>
                                @foreach ((array) $errors->get('address') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="w-100 mb-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input class="form-control ps-3" type="text" name="phone" value="{{old('phone')}}" required autocomplete="phone" />
                        @if ($errors->get('phone'))
                            <ul>
                                @foreach ((array) $errors->get('phone') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="w-100 mb-4">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" required autocomplete="new-password"/>
                        @if ($errors->get('password'))
                            <ul>
                                @foreach ((array) $errors->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
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
                </main>
                <div style="background-color: white;" class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                    <button class="btn btn-primary mb-3 w-50" type="submit">Log In</button>
                </div>
                <div style="background-color: white;" class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
                    <a href="{{ route('login') }}" class="mt-1">You already have an account ?</a>
                </div>
            </div>


        </form>
    </section>


@endsection















