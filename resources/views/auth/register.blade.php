@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.SignUpAsStudent'))

@section('pageContent')

<style>
    .select2-selection{
        height: 51px !important;
    }
    .select2-selection__rendered{
        padding: 9px;
    }
</style>

    <section class="sign-up">
        <div class="container">
            <h1 class="title"> {{ __('frontstaticword.SignUpAsStudent') }}</h1>
            <div class="row">
                <div class="col-sm-7 item">
                    <form action="{{ route('register') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 fild">
                                <input class="form-control" type="text" name="fname"
                                       placeholder="{{ __('frontstaticword.enter_your_fname') }}"
                                       autocomplete="off" value="{{ old('fname') }}" >
                                <label class="floating-label"> {{ __('frontstaticword.fname') }}</label>


                                @if ($errors->has('fname'))

                                    <span class="error">
                                         <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6 fild">
                                <input class="form-control" type="text" name="lname"
                                       placeholder="{{ __('frontstaticword.enter_your_lname') }}"
                                       autocomplete="off" value="{{ old('lname') }}" >
                                <label class="floating-label">{{ __('frontstaticword.lname') }}</label>

                                @if($errors->has('lname'))
                                    <span class="error">
                                         <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="col-sm-12 fild">
                                <input class="form-control" type="text" name="email"
                                       placeholder="{{ __('frontstaticword.enter_your_email') }}"
                                       autocomplete="off" value="{{ old('email') }}" >
                                <label class="floating-label"> {{ __('frontstaticword.Email') }}</label>

                                @if($errors->has('email'))
                                    <span class="error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif


                            </div>

                            <div class="col-sm-12 fild">
                                <input class="form-control" type="number" name="mobile"
                                       placeholder="{{ __('frontstaticword.enter_your_mobile') }}"
                                       autocomplete="off" value="{{ old('mobile') }}">
                                <label class="floating-label"> {{ __('frontstaticword.Mobile') }}</label>

                                @if($errors->has('mobile'))
                                    <span class="error">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                                @endif


                            </div>
                            <?php $countries = \App\Allcountry::all();?>
                            <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                                <select class="form-control required select2" name="country_id" autocomplete="off" autofocus>
                                    <option> </option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                <label class="floating-label">{{ __('frontstaticword.CountryOfOrigin') }}</label>
								@if($errors->has('country_id'))
                                    <span class="error">
										<strong>{{ $errors->first('country_id') }}</strong>
									</span>
                                @endif
                            </div>

                            <div class="col-sm-12 fild"><i class="fas fa-eye-slash icon-pass"></i><i
                                    class="fas fa-eye icon-pass"></i>
                                <input class="form-control pass" type="password" name="password"
                                       placeholder="{{ __('frontstaticword.enter_a_password') }}"
                                       autocomplete="off" autofocus >
                                <label class="floating-label"> {{ __('frontstaticword.Password') }}</label>

                                @if ($errors->has('password'))
                                    <span class="error">
                                <strong> Password Must atleast 6 characters
                              </strong>
                            </span>
                                @endif
                            </div>

                            <div class="col-sm-12 fild"><i class="fas fa-eye-slash icon-pass"></i><i
                                    class="fas fa-eye icon-pass"></i>
                                <input class="form-control pass" type="password" name="password_confirmation"
                                       placeholder="{{ __('frontstaticword.enter_confirm_password') }}"
                                       autocomplete="off" autofocus >
                                <label class="floating-label"> {{ __('frontstaticword.ConfirmPassword') }}</label>

                                @if ($errors->has('password_confirmation'))
                                    <span class="error">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                                @endif
                            </div>

                            <input hidden class="form-control pass" name="type" value="student" type="text" placeholder="" autocomplete="off" autofocus>


                            {{--<div class="col-sm-12 fild">--}}
                                {{--<label class="che-box">--}}
                                    {{--<input type="checkbox" name="checkbox"><span--}}
                                        {{--class="label-text">{{ __('frontstaticword.rememberMe') }}</span>--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            @if($gsetting->captcha_enable == 1)
                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    {!! app('captcha')->display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                                    @endif
                                </div>
                            @endif


                            <div class="col-sm-12 fild">
                                <p class="text">{{ __('frontstaticword.policyStatement') }}
                                    <a href="/privacy_policy" target="_blank">{{ __('frontstaticword.PrivacyPolicy') }}.</a> {{ __('frontstaticword.and') }}
                                    <a href="/terms_condition" target="_blank">{{ __('frontstaticword.Terms&Condition') }}.</a>
                                </p>
                            </div>
                            <div class="col-sm-12 fild text-center">
								<div class="waiting" style="color:red;"></div>
                                <button class="bottom" type="submit">{{ __('frontstaticword.Signup') }}</button>
                                <p class="text">{{ __('frontstaticword.or_login_sing') }}</p>
                                <nav class="social">

                                    @if($gsetting->fb_login_enable == 1)
                                            <a href="{{ url('/auth/facebook/user') }}" target="_blank" title="facebook"
                                               class="" title="Facebook"><img src="/frontAssets/images/facebook.png" alt=""  title="">
                                            </a>
                                    @endif

                                    @if($gsetting->google_login_enable == 1)
                                            <a href="{{ url('/auth/google/user') }}" target="_blank" title="google"
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
                <div class="col-sm-4 item offset-sm-1"><img src="/frontAssets/images/img-1.png" alt="Arabie"
                                                            title="Arabie">
                    <div class="fild text-center">
                        <p class="text ithave"><a href="/Login">{{ __('frontstaticword.alreadyHaveAccount') }}</a></p><a class="bottom" href="/login">{{ __('frontstaticword.Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
	(function($){
      $(".select2").select2();
	})(jQuery);
    </script>
	<script>
	(function($){
      $("form").submit(function(){
		  $(".waiting").text("{{ __('frontstaticword.pleasewaituntilregister') }}");
		  $(".bottom").prop('disabled',true);
	  });
	})(jQuery);
    </script>

@endsection
