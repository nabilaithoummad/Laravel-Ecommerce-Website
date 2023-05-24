@extends('auth.guest')
@section('content')


<section id="confirm_password" class="w-100">


    <form method="POST" action="{{ route('password.confirm') }}" class="px-3">
        @csrf
        <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-2">
            <p>This is a secure area of the application. Please confirm your password before continuing.</p>
        </div>


        <div class="w-100 mb-4">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password"/>

            @if ($errors->get('password'))
                <ul>
                    @foreach ((array) $messages as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif

        </div>


        <div class="w-100 d-flex flex-row justify-content-center">
            <button class="btn btn-primary mb-3 w-50" type="submit">Confirm</button>
        </div>


    </form>
</section>


@endsection


