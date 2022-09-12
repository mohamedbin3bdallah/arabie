@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.Login'))

@section('pageContent')
    <section class="sign-up">
        @include('admin.message')

        <div class="container">
            <h1 class="title">{{ __('frontstaticword.Login') }}</h1>
            <div class="row">
                <div class="col-sm-7 item">
                    <form method="POST" class="signup-form" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12 fild">
                                <input class="form-control" type="text" name="email"
                                       placeholder="{{ __('frontstaticword.enter_your_email') }}"
                                       autocomplete="off" value="{{ old('email') }}" autocomplete="off" autofocus
                                       required>
                                <label class="floating-label">{{ __('frontstaticword.Email') }}</label>
                                @if($errors->has('email'))
                                    <span class="error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-12 fild"><i class="fas fa-eye-slash icon-pass"></i><i
                                    class="fas fa-eye icon-pass"></i>
                                <input class="form-control pass" type="password" name="password"
                                       placeholder="{{ __('frontstaticword.enter_your_password') }}"
                                       autocomplete="off" required>
                                <label class="floating-label">{{ __('frontstaticword.Password') }}</label>
                                @if ($errors->has('password'))
                                    <span class="error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-12 fild line-pass">
                                <label class="che-box">
                                    <input type="checkbox" name="checkbox"><span class="label-text">{{ __('frontstaticword.RememberMe') }}</span>
                                </label><a class="forget" href="{{ '/password/reset' }}">{{ __('frontstaticword.ForgotPassword') }} </a>
                            </div>
                            <div class="col-sm-12 fild text-center">
                                <button class="bottom" type="submit">{{ __('frontstaticword.Login') }}</button>
                                <p class="text">{{ __('frontstaticword.or_login_sing') }}</p>
                                <nav class="social">
                                    @if($gsetting->fb_login_enable == 1)
                                        <a href="{{ url('/auth/facebook/login') }}"  title="facebook"
                                           class="" title="Facebook"><img src="/frontAssets/images/facebook.png" alt=""  title="">
                                        </a>
                                    @endif

                                    @if($gsetting->google_login_enable == 1)
                                        <a href="{{ url('/auth/google/login') }}"  title="google"
                                           class="" title="google">
                                            <img src="/frontAssets/images/google.png" alt="" title="">
                                        </a>
                                    @endif

                                    {{--@if($gsetting->amazon_enable == 1)--}}
                                    {{--<div class="signin-link amazon-button">--}}
                                    {{--<a href="{{ url('/auth/amazon') }}" target="_blank" title="amazon"--}}
                                    {{--class="btn btn-info btm-10" title="Amazon"><i--}}
                                    {{--class="fab fa-amazon"></i>{{ __('frontstaticword.ContinuewithAmazon') }}--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    {{--@endif--}}

                                    {{--@if($gsetting->linkedin_enable == 1)--}}
                                    {{--<div class="signin-link linkedin-button">--}}
                                    {{--<a href="{{ url('/auth/linkedin') }}" target="_blank" title="linkedin"--}}
                                    {{--class="btn btn-info btm-10" title="Linkedin"><i--}}
                                    {{--class="fab fa-linkedin"></i>{{ __('frontstaticword.ContinuewithLinkedin') }}--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    {{--@endif--}}

                                    {{--@if($gsetting->twitter_enable == 1)--}}
                                    {{--<div class="signin-link twitter-button">--}}
                                    {{--<a href="{{ url('/auth/twitter') }}" target="_blank" title="twitter"--}}
                                    {{--class="btn btn-info btm-10" title="Twitter"><i--}}
                                    {{--class="fab fa-twitter"></i>{{ __('frontstaticword.ContinuewithTwitter') }}--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    {{--@endif--}}

                                    {{--@if($gsetting->gitlab_login_enable == 1)--}}
                                    {{--<div class="signin-link btm-10">--}}
                                    {{--<a href="{{ url('/auth/gitlab') }}" target="_blank" title="gitlab"--}}
                                    {{--class="btn btn-white" title="gitlab"><i--}}
                                    {{--class="fab fa-gitlab"></i>{{ __('frontstaticword.ContinuewithGitLab') }}--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    {{--@endif--}}



                                </nav>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 item offset-sm-1"><img src="/frontAssets/images/tutor.png" alt="Arabia"
                                                            title="Arabia">
{{--                    <div class="fild text-center">--}}
{{--                        <p class="text ithave"><a href="/register" style="text-decoration: underline">Signup as student </a> OR <a--}}
{{--                                href="/registration" style="text-decoration: underline">Signup as Tutor</a></p>--}}
{{--                        <a class="bottom" href="/login">{{ __('frontstaticword.Login') }}</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
