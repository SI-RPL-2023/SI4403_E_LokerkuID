@extends('user.navbarfooter')
@section('body')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="container w-75 mt-5 p-5">
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="LokerkuID" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="company@lokerku.id" autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="1" autocomplete="level" hidden>

                @error('level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="desc" class="col-md-4 col-form-label text-md-end">{{ __('Company Description') }}</label>

            <div class="col-md-6">
                <textarea id="desc" type="textarea" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" placeholder="You can write something to describe your company" autofocus></textarea>

                @error('desc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </div>
</form>

@endsection
