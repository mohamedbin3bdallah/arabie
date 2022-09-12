@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.forget_password'))

@section('pageContent')
    <section class="sign-up">
        <div class="container">
            <h1 class="title">{{ __('frontstaticword.forget_your_password') }}</h1>
            <div class="row">
                <div class="col-sm-7 item">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 fild">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  type="text"  placeholder="{{ __('frontstaticword.enter_your_email') }}" autocomplete="off" autofocus required>
                                <label class="floating-label">{{ __('frontstaticword.Email') }}</label>
                                @if($errors->has('email'))
                                    <span class="error">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-12 fild text-center">
                                <button class="bottom" type="submit">{{ __('frontstaticword.Submit') }}</button>
                            </div>
                        </div>
                    </form>

                    @if (session('status'))
                        <h2 class="title sacand">{{ session('status') }}</h2>
                        <p class="textsacand"><i class="fas fa-info-circle"></i> {{ __('passwords.sentDetails') }} <a href='/password/reset'>{{ __('passwords.ResendRequest') }}</a></p>

                    @endif



                </div>
                <div class="col-sm-4 item offset-sm-1"><img src="/frontAssets/images/tutor.png" alt="Arabia" title="Arabia"></div>
            </div>
        </div>
    </section>
@endsection
