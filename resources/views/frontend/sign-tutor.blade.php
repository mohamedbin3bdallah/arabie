@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.SignUpAsTutor'))

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
        <h1 class="title">{{ __('frontstaticword.SignUpAsTutor') }} </h1>
        <div class="row">
            <div class="col-sm-7 item">
                <form action="{{ route('register') }}" method="POST" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 fild">
                            <input class="form-control" name="email" value="{{ old('email') }}" type="text" placeholder="{{ __('frontstaticword.enter_your_email') }}" autocomplete="off" autofocus required>
                            <label class="floating-label">{{ __('frontstaticword.Email') }}</label>

                            @error('email')
                            <div class="error">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
						
						<?php $countries = \App\Allcountry::all();?>
                            <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                                <select class="form-control select2" name="country" autocomplete="off" autofocus required>
                                    <option> </option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" @if(old('country') == $country->id) {{ 'selected' }} @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                                <label class="floating-label">{{ __('frontstaticword.CountryOfResidence') }}</label>
								@if($errors->has('country'))
                                    <span class="error">
										<strong>{{ $errors->first('country') }}</strong>
									</span>
                                @endif
                            </div>

                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" name="mobile"
                                   placeholder="{{ __('frontstaticword.enter_your_mobile') }}"
                                   autocomplete="off" value="{{ old('mobile') }}" required >
                            <label class="floating-label"> {{ __('frontstaticword.Mobile') }}</label>

                            @if($errors->has('mobile'))
                                <span class="error">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                            @endif


                        </div>
                        <div class="col-sm-12 fild"><i class="fas fa-eye-slash icon-pass"></i><i class="fas fa-eye icon-pass"></i>
                            <input class="form-control pass" name="password"  value="{{ old('password') }}" type="password" placeholder="{{ __('frontstaticword.enter_a_password') }}" autocomplete="off" autofocus required>
                            <label class="floating-label">{{ __('frontstaticword.Password') }}</label>
                            @if($errors->has('password'))
                                <span class="error">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
                            @endif
                        </div>
                        <input hidden class="form-control pass" name="type" value="tutor" type="text" placeholder="" autocomplete="off" autofocus>

                        <div class="col-sm-12 fild">
                            <p class="text">{{ __('frontstaticword.policyStatement') }}
                                <a href="/privacy_policy" target="_blank">{{ __('frontstaticword.PrivacyPolicy') }}.</a> {{ __('frontstaticword.and') }}
                                <a href="/terms_condition" target="_blank">{{ __('frontstaticword.Terms&Condition') }}.</a>
                            </p>
                        </div>
                        <div class="col-sm-12 fild text-center">
                            <button class="bottom" type="submit">{{ __('frontstaticword.Signup') }}</button>
                            <p class="text">{{ __('frontstaticword.or_login_sing') }}</p>
                            <nav class="social">
                                @if($gsetting->fb_login_enable == 1)
                                    <a href="{{ url('/auth/facebook/instructor') }}" title="Facebook"><img src="/frontAssets/images/facebook.png" alt="" title=""></a>
                                @endif
                                @if($gsetting->google_login_enable == 1)
                                    <a href="{{ url('/auth/google/instructor') }}" title="google">  <img src="/frontAssets/images/google.png" alt="" title=""></a>
                            </nav>
                                @endif
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 item offset-sm-1"><img src="/frontAssets/images/tutor.png" alt="Arabia" title="Arabia">
                <div class="fild text-center">
                    <p class="text ithave"><a href="#">{{ __('frontstaticword.alreadyHaveAccount') }} </a> </p><a class="bottom" href="/login">{{ __('frontstaticword.Login') }}</a>
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
<!--<script>
  $("form").submit(function(){
	  $(".waiting").text("{{ __('frontstaticword.pleasewaituntilregister') }}");
	  $(".bottom").prop('disabled',true);
  });
</script>-->
	
@endsection
