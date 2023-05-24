<section>
    <header>
        <h1>Profile informations</h1>
        <p class="mt-1">
            Update your account's profile information and email address.
        </p>
    </header>


    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 w-100">
        @csrf
        @method('patch')


        <div class="w-100">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{old('name', $user->name)}}" required autofocus autocomplete="name" />
            @if ($errors->get('name'))
                <ul>
                    @foreach ((array) $errors->get('name') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
{{--
        <div class="w-100">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{old('email', $user->email)}}" required autocomplete="username" />
            @if ($errors->get('name'))
                <ul>
                    @foreach ((array) $errors->get('name') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        'Your email address is unverified.'

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            Click here to re-send the verification email.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2">
                            A new verification link has been sent to your email address
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{old('address', $user->address)}}" required autofocus autocomplete="adress"/>
            @if ($errors->get('address'))
                <ul>
                    @foreach ((array) $errors->get('address') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif

        </div>

        <div>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{old('phone', $user->phone)}}" required autofocus autocomplete="phone"/>
            @if ($errors->get('phone'))
                <ul>
                    @foreach ((array) $errors->get('phone') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif

        </div>

        <div class="flex items-center gap-4">
            <button type="submit">Save</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Saved.</p>
            @endif

        </div> --}}
    </form>

</section>
