<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description"
            content="Arabie is a marketplace for arabic language for non natives, book online arabic courses with best arabic tutors worldwide and suitable price. Try It for free">
        <title>Arabie: @if(Request::is('/'))Online Arabic cources for non natives anytime anywhere @else @yield('title')
            @endif </title>
        <link rel="shortcut icon" href="{{ asset('images/logo/'.$gsetting->logo) }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logo/'.$gsetting->logo) }}">
        <!-- Styles -->

        <!-- Google Tag Manager head -->
        <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T79JS82');
        </script>
        <!-- End Google Tag Manager -->

        <style>
        .error {
            color: red;
        }

        .unread_notification {
            background: #f0ecec9a !important;
        }

        </style>
        <!-- include header file -->
        @include('frontend.layouts.head')
        @yield('headerAssets')
    
		<!-- Facebook Pixel Code -->
		<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '438607774183219');
fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=438607774183219&ev=PageView&noscript=1"/></noscript>
		<!-- End Facebook Pixel Code -->

        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=438607774183219&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
        
		<!-- Global site tag (gtag.js) - Google Ads: 437506638 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-437506638"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'AW-437506638');
		</script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-3TSMNYBXBV">
		<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date()); gtag('config', 'G-3TSMNYBXBV');
		</script>

        <!-- ManyChat -->
        <script src="//widget.manychat.com/114238373695322.js" async="async"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<link href="/frontAssets/css/checkbox.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
    </head>

    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    @if($gsetting->logo_type == 'L')
                    <a href="{{ url('/') }}" title="logo"><img src="{{ asset('images/logo/'.$gsetting->logo) }}"
                            alt="Arabie" title="Arabie"></a>
                    @else()
                    <a href="{{ url('/') }}"><b>
                            <div class="logotext">{{ $gsetting->project_title }}</div>
                        </b></a>
                    @endif
                </div>
                <div class="bottoms"><a href="/find/tutor"
                        style=" color: #af8b62">{{ __('frontstaticword.FindATutor') }}</a>
                </div>
                <!-- @if(auth()->check())
                @if(auth()->user()->role == "user")
                <div class="bottoms" style="margin-right: 40%"><a href="/findTutor"
                        style=" color: #af8b62">{{ __('frontstaticword.FindATutor') }}</a>
                </div>
                @endif
                @endif -->
                <!--Shimaa-->
                <form class="formsearch" action="#" method="">
                    {{--                    <input class="form-control" type="text" placeholder="Search for courses ?">--}}
                    {{--                    <button class="btn" type="submit">--}}
                    {{--                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
                    {{--                            width="25.427" height="27.094" viewBox="0 0 25.427 27.094">--}}
                    {{--                            <path--}}
                    {{--                                d="M403.084,301.3l-6.278-6.529a10.691,10.691,0,1,0-2.051,1.875l6.328,6.581a1.386,1.386,0,0,0,1.963.039,1.39,1.39,0,0,0,.038-1.965Zm-14.433-21.251a7.873,7.873,0,1,1-7.872,7.872,7.883,7.883,0,0,1,7.872-7.872Zm0,0"--}}
                    {{--                                --}}{{-- transform="translate(-378 -277.112)"></path>--}}
                    {{--                        </svg>--}}
                    {{--                    </button>--}}
                </form>
                <!--Shimaa-->
                <div class="detals">
                    <div class="icons"><span class="icon-search">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="25.427" height="27.094" viewBox="0 0 25.427 27.094">
                                <path
                                    d="M403.084,301.3l-6.278-6.529a10.691,10.691,0,1,0-2.051,1.875l6.328,6.581a1.386,1.386,0,0,0,1.963.039,1.39,1.39,0,0,0,.038-1.965Zm-14.433-21.251a7.873,7.873,0,1,1-7.872,7.872,7.883,7.883,0,0,1,7.872-7.872Zm0,0"
                                    transform="translate(-378 -277.112)"></path>
                            </svg></span><span class="cancel"></span></div>
                    <!--a(href="login.html" class="bottom") #[img(src='assets/images/user.png' alt="" title="")] Log in-->
                    <!--shimaa-->
                    @guest
                    <div class="icons-signup"><span class="icon-opne-signup"> sign up</span></div>
                    <span class="signup-btns">
                        @if (Route::has('register'))
                        <a href="/register"
                            style="color: #000;margin-right: 30px">{{ __('frontstaticword.SignUpAsStudent') }}</a>
                        @endif
                        @if (Route::has('registration'))
                        <a href="/registration"
                            style="color: #000;margin-right: 30px">{{ __('frontstaticword.SignUpAsTutor') }}</a>
                        @endif
                    </span>
                    <a class="bottom" href="/login"><img src="/frontAssets/images/user.png" alt=""
                            title="">{{ __('frontstaticword.Login') }}</a>
                    @else
                    <div class="icons-men"><span class="fas fa-bars icon-opne"></span><span class="icon-cancel"></span>
                    </div>						
                    
					@if(Auth::check() && Auth::user()->role == 'user')
					<a class="balance disbox" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.058" height="25.107"
                            viewBox="0 0 28.058 25.107">
                            <g id="wallet" transform="translate(-1.812 -5.513)">
                                <path id="Path_28715" data-name="Path 28715"
                                    d="M58.59,25.946a.474.474,0,0,1-.474-.474V19.532H53.379a.474.474,0,0,1,0-.947H58.59a.474.474,0,0,1,.474.474v6.415a.474.474,0,0,1-.474.473Z"
                                    transform="translate(-30.723 -7.86)" fill="#ba9a74"></path>
                                <path id="Path_28716" data-name="Path 28716"
                                    d="M27.867,34.55H5.839a4.031,4.031,0,0,1-4.027-4.027v-18a.474.474,0,0,1,.947,0v18a3.083,3.083,0,0,0,3.08,3.08H27.393V27.227a.474.474,0,0,1,.947,0v6.85a.474.474,0,0,1-.474.473Z"
                                    transform="translate(0 -3.93)" fill="#ba9a74"></path>
                                <path id="Path_28717" data-name="Path 28717"
                                    d="M55.472,41.306H49.28a3.316,3.316,0,0,1,0-6.632h6.192a.948.948,0,0,1,.947.947v4.737a.948.948,0,0,1-.947.947Zm0-5.685H49.28a2.369,2.369,0,1,0,0,4.737h6.192Z"
                                    transform="translate(-26.549 -17.535)" fill="#ba9a74"></path>
                                <path id="Path_28718" data-name="Path 28718"
                                    d="M22.656,11.671H4.891a3.079,3.079,0,0,1,0-6.158H22.18a.952.952,0,0,1,.949.952V11.2A.474.474,0,0,1,22.656,11.671ZM4.891,6.46a2.132,2.132,0,0,0,0,4.264H22.18V6.465Z"
                                    fill="#ba9a74"></path>
                                <path id="Path_28719" data-name="Path 28719"
                                    d="M29.687,13H13.979a.474.474,0,0,1,0-.947H29.687a.474.474,0,0,1,0,.947Z"
                                    transform="translate(-7.031 -3.93)" fill="#ba9a74" stroke="#ba9a74"
                                    stroke-width="1">
                                </path>
                                <path id="Path_28720" data-name="Path 28720"
                                    d="M52.941,41.882A1.583,1.583,0,1,1,54.524,40.3,1.583,1.583,0,0,1,52.941,41.882Zm0-2.33a.747.747,0,1,0,.746.748A.747.747,0,0,0,52.941,39.552Z"
                                    transform="translate(-29.792 -19.965)" fill="#ba9a74"></path>
                            </g>
                        </svg>
                        <p>{{ __('frontstaticword.balance') }} : <span>
							{{$user_balance->balance}}
						</span> {{ __('frontstaticword.hours') }}</p>
                    </a>
					@endif
                    <!-- <a class="bottom hours" href="#">Buy Hours</a>  -->
					
                    @endguest
                    @php
                    $languages = App\Language::all();
                    @endphp
					<!--
                                                                 <div class="dropdown"><a class="el-lang"><span> {{Session::has('changed_language') ? Session::get('changed_language') : 'en'}}</span>  
                                         <span> , USD</span>  
                                                                         <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7">  
                                                                             <path d="M4,0,8,7H0Z" transform="translate(8 7) rotate(180)"></path>  
                                                                         </svg></a>  
                                                                     <div class="language">  
                                                                         <div class="fild"> <i class="fas fa-chevron-down iconsel"></i>  
                                                                             <select class="form-control required" id="site_lang" name="language" autocomplete="off" autofocus required>  
                                                                                 @if (isset($languages) && count($languages) > 0)  
                                                                                     @foreach ($languages as $language)  
                                                                                         <option value="{{ $language->local }}" @if(session()->has('changed_language') && session('changed_language') == $language->local) {{ 'selected' }} @endif>{{$language->name}} ({{$language->local}})</option>  
                                                                                     @endforeach  
                                                                                 @endif  
                                                                             </select>  
                                                                             <label class="floating-label">language</label>  
                                                                         </div>  
                                                                         <div class="fild"> <i class="fas fa-chevron-down iconsel"></i>  
                                                                             <select class="form-control required" name="currency" autocomplete="off" autofocus required>  
                                                                                 <option> </option>  
                                                                                 <option>$</option>  
                                                                                 <option>EGP</option>  
                                                                                 <option>Currency</option>  
                                                                             </select>  
                                                                             <label class="floating-label">Currency</label>  
                                                                         </div>  
                                                                     </div>  
                                                                 </div>  
																 
					-->											 
                                           <?php         /*  <div class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span> {{Session::has('changed_language') ? Session::get('changed_language') : ''}}</span>  
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7">  
                                                     <path d="M4,0,8,7H0Z" transform="translate(8 7) rotate(180)"></path>  
                                                     </svg>  
                                                     </a>  
                                                     <div class="dropdown-menu">  
                                                     @if (isset($languages) && count($languages) > 0)  
                                                     @foreach ($languages as $language)  
                                                     <a class="dropdown-item" href="{{ route('languageSwitch', $language->local) }}">{{$language->name}}  
                                         ({{$language->local}}) </a>  
                                                     @endforeach  
                                                     @endif  
                                                     </div>  
                                                     </div> */?>
                    @guest
                    @else
                    <!--shimaa-->
                    <nav class="user-det"><a href="#" class="chat-btn" id="read_notifications">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.6" height="21.903"
                                viewBox="0 0 26.6 21.903">
                                <path id="Path_28712" data-name="Path 28712"
                                    d="M21.145.5H5.455A5.461,5.461,0,0,0,0,5.955V14.38a5.367,5.367,0,0,0,3.859,5.16l2.635,2.635a.779.779,0,0,0,1.1,0l2.417-2.417H21.145A5.461,5.461,0,0,0,26.6,14.3V5.955A5.461,5.461,0,0,0,21.145.5Zm3.9,13.8a3.9,3.9,0,0,1-3.9,3.9H9.69a.779.779,0,0,0-.551.228L7.045,20.522l-2.23-2.23a.778.778,0,0,0-.363-.205A3.811,3.811,0,0,1,1.559,14.38V5.955a3.9,3.9,0,0,1,3.9-3.9h15.69a3.9,3.9,0,0,1,3.9,3.9Zm0,0"
                                    fill="#ba9a74"></path>
                                <path id="Path_28713" data-name="Path 28713"
                                    d="M156.434,144.328h-9.9a.779.779,0,1,0,0,1.559h9.9a.779.779,0,1,0,0-1.559Zm0,0"
                                    transform="translate(-138.185 -136.356)" fill="#ba9a74"></path>
                                <path id="Path_28714" data-name="Path 28714"
                                    d="M156.434,197.352h-9.9a.779.779,0,1,0,0,1.559h9.9a.779.779,0,0,0,0-1.559Zm0,0"
                                    transform="translate(-138.185 -186.625)" fill="#ba9a74"></path>
                            </svg>
                            @if(Auth::user()->notifications->whereNull('read_at')->count()) <span class="alarm"
                                id="notifications_alarm">{{Auth::user()->notifications->whereNull('read_at')->count()}}</span>@endif
                        </a><a href="#">
                            {{-- <svg id="question" xmlns="http://www.w3.org/2000/svg" width="22.133" height="22.133"
                               viewBox="0 0 22.133 22.133">
                               <path id="Path_28710" data-name="Path 28710"
                                   d="M18.892,3.241A11.068,11.068,0,0,0,1.482,16.6L0,22.133l5.532-1.482a11.067,11.067,0,0,0,13.36-17.41Zm-7.825,17.6a9.748,9.748,0,0,1-5.1-1.435l-.238-.146L1.834,20.3l1.044-3.9-.146-.238a9.771,9.771,0,1,1,8.334,4.67Z"
                                   fill="#ba9a74"></path>
                               <rect id="Rectangle_35" data-name="Rectangle 35" width="1.297" height="1.297"
                                   transform="translate(10.418 15.281)" fill="#ba9a74"></rect>
                               <path id="Path_28711" data-name="Path 28711"
                                   d="M184.242,128.5A3.246,3.246,0,0,0,181,131.742h1.3a1.945,1.945,0,1,1,3.395,1.3l-2.1,2.346v1.545h1.3V135.88l1.768-1.977a3.242,3.242,0,0,0-2.416-5.4Z"
                                   transform="translate(-173.176 -122.945)" fill="#ba9a74"></path>
                           </svg> --}}
                        </a>
						
						@if(Auth::check() && Auth::user()->role == 'user')
						<?php $countFav = \App\Favourites::where('user_id', '=', auth()->id())->count()?>
						<a href="/user/favourites/{{auth()->id()}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.561" height="19.183"
                                viewBox="0 0 21.561 19.183">
                                <path id="heart_1_" data-name="heart (1)"
                                    d="M10.781,19.183a1.264,1.264,0,0,1-.834-.313c-.871-.762-1.711-1.477-2.452-2.109l0,0a45.6,45.6,0,0,1-5.353-5.024A8.025,8.025,0,0,1,0,6.48a6.739,6.739,0,0,1,1.71-4.6A5.8,5.8,0,0,1,6.023,0,5.423,5.423,0,0,1,9.411,1.169a6.931,6.931,0,0,1,1.37,1.43,6.932,6.932,0,0,1,1.37-1.43A5.423,5.423,0,0,1,15.538,0a5.8,5.8,0,0,1,4.313,1.877,6.739,6.739,0,0,1,1.71,4.6,8.024,8.024,0,0,1-2.138,5.253,45.591,45.591,0,0,1-5.353,5.024c-.742.632-1.583,1.349-2.456,2.113a1.265,1.265,0,0,1-.833.313ZM6.023,1.263a4.549,4.549,0,0,0-3.384,1.47A5.482,5.482,0,0,0,1.263,6.48a6.752,6.752,0,0,0,1.848,4.447,44.869,44.869,0,0,0,5.2,4.869l0,0c.744.634,1.587,1.352,2.464,2.12.883-.769,1.727-1.488,2.472-2.123a44.881,44.881,0,0,0,5.2-4.869A6.753,6.753,0,0,0,20.3,6.48a5.482,5.482,0,0,0-1.376-3.746,4.548,4.548,0,0,0-3.384-1.47,4.189,4.189,0,0,0-2.615.905,6.129,6.129,0,0,0-1.457,1.686.8.8,0,0,1-1.37,0A6.123,6.123,0,0,0,8.638,2.169a4.189,4.189,0,0,0-2.615-.905Zm0,0"
                                    transform="translate(0 0)" fill="#ba9a74"></path>
                            </svg>
                            @if($countFav != 0)<span class="alarm">{{$countFav}}</span> @endif
                        </a>
						@endif
						
                        <div class="dropdown not-box">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="18.181" height="25.8"--}}
                                {{--                                    viewBox="0 0 18.181 25.8">--}}
                                {{--                                    <path id="Path_28708" data-name="Path 28708"--}}
                                {{--                                        d="M93.62,21.557l-1.543-2.572a7.781,7.781,0,0,1-.832-3.508v-5.9a6.562,6.562,0,0,0-4.939-6.35,2.016,2.016,0,1,0-3.224,0,6.562,6.562,0,0,0-4.939,6.35v5.9a7.782,7.782,0,0,1-.832,3.507l-1.543,2.572a1.138,1.138,0,0,0,.976,1.724h4.969a3.023,3.023,0,0,0,5.961,0h4.969A1.138,1.138,0,0,0,93.62,21.557ZM84.694,1.008a1.008,1.008,0,1,1-1.008,1.008A1.009,1.009,0,0,1,84.694,1.008ZM79.152,15.477v-5.9a5.543,5.543,0,0,1,11.086,0v5.9a9.151,9.151,0,0,0,.835,3.772H78.316A9.151,9.151,0,0,0,79.152,15.477Zm5.543,9.315a2.024,2.024,0,0,1-1.952-1.517h3.9A2.024,2.024,0,0,1,84.694,24.792Zm7.95-2.52h-15.9a.13.13,0,0,1-.112-.2l1.091-1.818H91.665l1.091,1.819A.129.129,0,0,1,92.645,22.273Z"--}}
                                {{--                                        transform="translate(-75.604)" fill="#ba9a74"></path>--}}
                                {{--                                </svg></a>--}}
                                <div class="dropdown-menu"><a class="dropdown-item" href="#"> <img
                                            src="assets/images/profile-4.jpg" alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a><a class="dropdown-item" href="#"> <img src="assets/images/profile-4.jpg"
                                            alt="Arabia" title="Arabia">
                                        <div class="content-not">
                                            <h3 class="title">Ana Send you a message .</h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy</p>
                                        </div>
                                    </a>
                                </div>
                        </div><a class="bottom" href="#">Buy Hours </a><a class="balance" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28.058" height="25.107"
                                viewBox="0 0 28.058 25.107">
                                <path id="Path_28715" data-name="Path 28715"
                                    d="M58.59,25.946a.474.474,0,0,1-.474-.474V19.532H53.379a.474.474,0,0,1,0-.947H58.59a.474.474,0,0,1,.474.474v6.415a.474.474,0,0,1-.474.473Z"
                                    transform="translate(-30.723 -7.86)" fill="#ba9a74"></path>
                                <path id="Path_28716" data-name="Path 28716"
                                    d="M27.867,34.55H5.839a4.031,4.031,0,0,1-4.027-4.027v-18a.474.474,0,0,1,.947,0v18a3.083,3.083,0,0,0,3.08,3.08H27.393V27.227a.474.474,0,0,1,.947,0v6.85a.474.474,0,0,1-.474.473Z"
                                    transform="translate(0 -3.93)" fill="#ba9a74"></path>
                                <path id="Path_28717" data-name="Path 28717"
                                    d="M55.472,41.306H49.28a3.316,3.316,0,0,1,0-6.632h6.192a.948.948,0,0,1,.947.947v4.737a.948.948,0,0,1-.947.947Zm0-5.685H49.28a2.369,2.369,0,1,0,0,4.737h6.192Z"
                                    transform="translate(-26.549 -17.535)" fill="#ba9a74"></path>
                                <path id="Path_28718" data-name="Path 28718"
                                    d="M22.656,11.671H4.891a3.079,3.079,0,0,1,0-6.158H22.18a.952.952,0,0,1,.949.952V11.2A.474.474,0,0,1,22.656,11.671ZM4.891,6.46a2.132,2.132,0,0,0,0,4.264H22.18V6.465Z"
                                    fill="#ba9a74"></path>
                                <path id="Path_28719" data-name="Path 28719"
                                    d="M29.687,13H13.979a.474.474,0,0,1,0-.947H29.687a.474.474,0,0,1,0,.947Z"
                                    transform="translate(-7.031 -3.93)" fill="#ba9a74" stroke="#ba9a74"
                                    stroke-width="1">
                                </path>
                                <path id="Path_28720" data-name="Path 28720"
                                    d="M52.941,41.882A1.583,1.583,0,1,1,54.524,40.3,1.583,1.583,0,0,1,52.941,41.882Zm0-2.33a.747.747,0,1,0,.746.748A.747.747,0,0,0,52.941,39.552Z"
                                    transform="translate(-29.792 -19.965)" fill="#ba9a74"></path>
                            </svg>
                            <p>Balance : <span>0</span> hours</p>
                        </a>
                    </nav>
                    <div class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            @if(Auth::User()->user_img != null || Auth::User()->user_img !='')
                            <img src="{{ url('/images/user_img/'.Auth::User()->user_img) }}" alt="" title="">
                            @else
                            <img src="{{ asset('images/default/user.jpg')}}" alt="" title="">
                            @endif
                            <div class="dropdown-menu">
                                @if(Auth::User()->role == "user")
                                <a class="dropdown-item"
                                    href="{{route('profile.show',Auth::User()->id)}}">{{ __('frontstaticword.UserProfile') }}</a>
                                <a class="dropdown-item"
                                    href="{{route('myLessons.show',Auth::User()->id)}}">{{ __('frontstaticword.MyLessons') }}</a>
                                <a class="dropdown-item"
                                    href="{{route('myTeachers.show',Auth::User()->id)}}">{{ __('frontstaticword.MyTutors') }}</a>
                                <a class="dropdown-item"
                                    href="/user/favourites/{{auth()->id()}}">{{ __('frontstaticword.Favourites') }}</a>
                                @elseif(Auth::User()->role == "instructor")
                                <a class="dropdown-item"
                                    href="/tutor/profile">{{ __('frontstaticword.UserProfile') }}</a>
                                <a class="dropdown-item"
                                    href="/tutor/lessons/{{auth()->id()}}">{{ __('frontstaticword.MyLessons') }}</a>
                                <a class="dropdown-item"
                                    href="/myStudents/{{auth()->id()}}">{{ __('frontstaticword.MyStudents') }}</a>
                                <a class="dropdown-item"
                                    href="/myCalendar/{{auth()->id()}}">{{ __('frontstaticword.my_calender') }}</a>
                                @endif
                                {{--                                <a class="dropdown-item" href="{{ route('wishlist.show') }}">{{ __('frontstaticword.MyWishlist') }}
                        </a>--}}
                        {{--                                <a class="dropdown-item" href="{{ route('purchase.show') }}">{{ __('frontstaticword.PurchaseHistory') }}</a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('frontstaticword.Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                    <div class="show-itemchat" id="chat">
                        <div class="friends">
                            <div class="head">
                                <!--a(href="#" class="goback") <i class="fas fa-angle-right"></i>-->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="messages-tab" data-toggle="tab"
                                            href="#messages" role="tab" aria-controls="messages" aria-selected="true"><i
                                                class="fas fa-comments"></i>{{ __('frontstaticword.messages') }}</a></li>
                                    <li class="nav-item"><a class="nav-link" id="notes-tab" data-toggle="tab"
                                            href="#notes" role="tab" aria-controls="notes" aria-selected="false"><i
                                                class="fas fa-file-alt"></i> {{ __('frontstaticword.Notifications') }}</a></li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="messages" role="tabpanel"
                                    aria-labelledby="messages-tab">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="all-tab" data-toggle="tab"
                                                href="#all" role="tab" aria-controls="all" aria-selected="true">{{ __('frontstaticword.all') }}</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="unread-tab" data-toggle="tab"
                                                href="#unread" role="tab" aria-controls="unread"
                                                aria-selected="false">{{ __('frontstaticword.unread') }}</a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent" class="display:block">
                                        <div class="tab-pane fade show active" id="all" role="tabpanel"
                                            aria-labelledby="all-tab">
                                            {{-- <div class="formsearch">
                                            <input class="form-control filter-all" type="text"
                                                placeholder="Search..." />
                                        </div> --}}
                                            {{-- All messages  --}}
                                            <ul class="mylistall">
                                                @if(Auth::check())
                                                @foreach(Auth::user()->messages as $message)
                                                @if($message->user != null )
                                                <li class="{{ ($message->is_read == 0) ? "active" : "imgage" }}"><a
                                                        href="{{route('get.chat' , $message->user->id )}}">
                                                        <div class="imgage"><img
                                                                src="@if($message->user->user_img == null) /frontAssets/images/profile-1.png @else {{ url('/images/user_img/'.$message->user->user_img) }} @endif"
                                                                alt="Arabia" title="Arabia" />
                                                        </div>

                                                        <div class="content">
                                                            <h4 class="title">{{$message->user->fname}}
                                                                {{$message->user->lname}}<span class="">
                                                                    {{-- <small>Hover over
                                                                    me Hover
                                                                    over me Hover over me</small>  --}}
                                                                </span></h4>
                                                            <p class="text">{{$message->body}}</p>
                                                        </div><span
                                                            class="time">{{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</span>
                                                    </a>
                                                </li>
                                                @endif
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="unread" role="tabpanel"
                                            aria-labelledby="unread-tab">
                                            {{-- <div class="formsearch">
                                            <input class="form-control filter-unread" type="text"
                                                placeholder="Search..." />
                                        </div> --}}
                                            <ul class="mylistunread">
                                                @if(Auth::check())
                                                @foreach(Auth::user()->unReadMessages as $message)
                                                @if($message->user != null )
                                                <li class="{{ ($message->is_read == 0) ? "active" : "imgage" }}"><a
                                                        href="{{route('get.chat' , $message->user->id )}}">
                                                        <!--<div class="imgage"><img
                                                                src="@if($message->user->user_img == null) /frontAssets/images/profile-1.png @else {{ url('/images/user_img/'.$message->user->user_img) }} @endif"
                                                                alt="Arabia" title="Arabia" />
                                                        </div>-->

                                                        <div class="content">
                                                            <h4 class="title">{{$message->user->fname}}
                                                                {{$message->user->lname}}<span
                                                                    class="fas fa-question tooltiptext"><small>Hover
                                                                        over
                                                                        me Hover
                                                                        over me Hover over me</small> </span></h4>
                                                            <p class="text">{{$message->body}}</p>
                                                        </div><span
                                                            class="time">{{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</span>
                                                    </a>
                                                </li>
                                                @endif
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div style="display:none">
                                        <div class="files">
                                            <div class="imgage"><a class="fas fa-angle-left" href="#"> </a><img
                                                    src="/frontAssets/images/profile-1.png" alt="Arabia"
                                                    title="Arabia" />
                                                <div class="text-da">
                                                    <h4 class="title">mohamed </h4>
                                                </div>
                                            </div>
                                            <div class="ex-files"><a class="files-bot" href="#"><i
                                                        class="fas fa-folder-open"></i> files</a><a class="close"
                                                    href="#">
                                                    <svg width="10" height="10" viewBox="0 0 12 12" f="f"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                                                            fill="#000"></path>
                                                    </svg></a></div>
                                        </div>
                                        <div class="chat-text">
                                            <p class="text-dat">September 30,2020</p>
                                            <div class="userchat"><a class="photo" href="#"><img
                                                        src="/frontAssets/images/profile-1.png" alt=""></a>
                                                <div class="padcht">
                                                    <div class="text">
                                                        <p>Lessoon Hasn't Started Yet Lessoon Hasn't Started Yet Lessoon
                                                            Hasn't
                                                            Started Yet</p>
                                                        <div class="actions"><span class="time">3:16 PM</span>
                                                            <div class="dropdown"><a
                                                                    class="dropdown-toggle fas fa-ellipsis-h" href="#"
                                                                    data-toggle="dropdown"></a>
                                                                <div class="dropdown-menu"><a class="dropdown-item"
                                                                        href="#"><i class="fas fa-pen"></i>
                                                                        edit</a><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-exclamation-circle"></i>
                                                                        Report a
                                                                        Message</a><a class="dropdown-item"
                                                                        href="#delete-message" data-toggle="modal"><i
                                                                            class="far fa-times-circle"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attach">
                                                        <p>
                                                            <svg width="14" height="14" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.804705 13.9427L1.39068 14.5287C2.46361 15.6017 4.20314 15.6017 5.27606 14.5288C5.27606 14.5288 5.27606 14.5288 5.2761 14.5287L12.7642 7.04061C13.5229 6.28194 13.5229 5.05188 12.7642 4.29321L12.3736 3.90255C11.6008 3.17869 10.3989 3.17869 9.62617 3.90255L4.09742 9.4313C3.96501 9.55921 3.96135 9.77022 4.08923 9.90266C4.21714 10.0351 4.42814 10.0387 4.56058 9.91084C4.56336 9.90816 4.56608 9.90544 4.56877 9.90266L10.0975 4.3739C10.6053 3.8988 11.3945 3.8988 11.9022 4.3739L12.2929 4.76456C12.7912 5.26285 12.7913 6.07078 12.293 6.56913C12.293 6.56916 12.2929 6.56922 12.2929 6.56925L4.80478 14.0574C3.98082 14.8422 2.68599 14.8422 1.86207 14.0574L1.27606 13.4714C0.463761 12.6587 0.463761 11.3414 1.27606 10.5287L9.6262 2.17855C10.7532 1.05197 12.5799 1.05197 13.7069 2.17855L14.4883 2.95922C15.6149 4.08621 15.6149 5.91296 14.4883 7.03995L8.09749 13.4307C7.96508 13.5586 7.96139 13.7696 8.0893 13.9021C8.21721 14.0345 8.42821 14.0382 8.56065 13.9103C8.56344 13.9076 8.56615 13.9049 8.56884 13.9021L14.9596 7.51196C16.3468 6.12481 16.3468 3.87577 14.9596 2.48859C14.9596 2.48856 14.9596 2.48856 14.9596 2.48856L14.1783 1.7072C12.7911 0.320019 10.5421 0.319986 9.15488 1.70714C9.15488 1.70717 9.15485 1.70717 9.15485 1.7072L0.804705 10.0573C-0.268221 11.1302 -0.268251 12.8698 0.804705 13.9427C0.804673 13.9427 0.804673 13.9427 0.804705 13.9427Z">
                                                                </path>
                                                                <path
                                                                    d="M11.6669 0.666493C12.6095 0.664431 13.5139 1.03909 14.1789 1.70717L14.9596 2.48787C16.3468 3.87502 16.3468 6.12406 14.9596 7.51124L14.9596 7.51127L8.56881 13.9021C8.4409 14.0345 8.2299 14.0382 8.09746 13.9103C7.96505 13.7823 7.96136 13.5713 8.08927 13.4389C8.09196 13.4361 8.09468 13.4334 8.09746 13.4307L14.4882 7.04061C15.6148 5.91362 15.6148 4.08687 14.4882 2.95988L13.7069 2.17852C12.5799 1.05194 10.7532 1.05194 9.62617 2.17852L1.27603 10.5287C0.463738 11.3414 0.463738 12.6586 1.27603 13.4714L1.86204 14.0574C2.68599 14.8421 3.98083 14.8421 4.80475 14.0574L12.2929 6.56928C12.7913 6.07099 12.7913 5.26307 12.293 4.76472C12.293 4.76469 12.2929 4.76463 12.2929 4.7646L11.9022 4.37393C11.3945 3.89883 10.6053 3.89883 10.0976 4.37393L4.56881 9.90269C4.4409 10.0351 4.22989 10.0388 4.09745 9.91087C3.96505 9.78297 3.96139 9.57196 4.08927 9.43952C4.09195 9.43674 4.09467 9.43402 4.09745 9.43133L9.62617 3.90255C10.3989 3.17869 11.6008 3.17869 12.3736 3.90255L12.7642 4.29321C13.5229 5.05188 13.5229 6.28194 12.7642 7.04061L5.2761 14.5287C4.20317 15.6017 2.46365 15.6017 1.39072 14.5288C1.39072 14.5288 1.39072 14.5288 1.39069 14.5287L0.804682 13.9427C-0.268242 12.8698 -0.268242 11.1303 0.80465 10.0573C0.80465 10.0573 0.80465 10.0573 0.804682 10.0573L9.15482 1.70717C9.81983 1.03909 10.7242 0.664431 11.6669 0.666493Z">
                                                                </path>
                                                            </svg>Original textbooks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userchat tow"><a class="photo" href="#"><img
                                                        src="/frontAssets/images/profile-1.png" alt=""></a>
                                                <div class="padcht">
                                                    <div class="text">
                                                        <p>Lessoon Hasn't Started Yet Lessoon Hasn't Started Yet Lessoon
                                                            Hasn't
                                                            Started Yet</p>
                                                        <div class="actions"><span class="time">3:16 PM
                                                                <!--i(class="fas fa-check it-che")--><i
                                                                    class="fas fa-check-double it-che active"></i>
                                                            </span></div>
                                                    </div>
                                                    <div class="attach">
                                                        <p>
                                                            <svg width="14" height="14" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.804705 13.9427L1.39068 14.5287C2.46361 15.6017 4.20314 15.6017 5.27606 14.5288C5.27606 14.5288 5.27606 14.5288 5.2761 14.5287L12.7642 7.04061C13.5229 6.28194 13.5229 5.05188 12.7642 4.29321L12.3736 3.90255C11.6008 3.17869 10.3989 3.17869 9.62617 3.90255L4.09742 9.4313C3.96501 9.55921 3.96135 9.77022 4.08923 9.90266C4.21714 10.0351 4.42814 10.0387 4.56058 9.91084C4.56336 9.90816 4.56608 9.90544 4.56877 9.90266L10.0975 4.3739C10.6053 3.8988 11.3945 3.8988 11.9022 4.3739L12.2929 4.76456C12.7912 5.26285 12.7913 6.07078 12.293 6.56913C12.293 6.56916 12.2929 6.56922 12.2929 6.56925L4.80478 14.0574C3.98082 14.8422 2.68599 14.8422 1.86207 14.0574L1.27606 13.4714C0.463761 12.6587 0.463761 11.3414 1.27606 10.5287L9.6262 2.17855C10.7532 1.05197 12.5799 1.05197 13.7069 2.17855L14.4883 2.95922C15.6149 4.08621 15.6149 5.91296 14.4883 7.03995L8.09749 13.4307C7.96508 13.5586 7.96139 13.7696 8.0893 13.9021C8.21721 14.0345 8.42821 14.0382 8.56065 13.9103C8.56344 13.9076 8.56615 13.9049 8.56884 13.9021L14.9596 7.51196C16.3468 6.12481 16.3468 3.87577 14.9596 2.48859C14.9596 2.48856 14.9596 2.48856 14.9596 2.48856L14.1783 1.7072C12.7911 0.320019 10.5421 0.319986 9.15488 1.70714C9.15488 1.70717 9.15485 1.70717 9.15485 1.7072L0.804705 10.0573C-0.268221 11.1302 -0.268251 12.8698 0.804705 13.9427C0.804673 13.9427 0.804673 13.9427 0.804705 13.9427Z">
                                                                </path>
                                                                <path
                                                                    d="M11.6669 0.666493C12.6095 0.664431 13.5139 1.03909 14.1789 1.70717L14.9596 2.48787C16.3468 3.87502 16.3468 6.12406 14.9596 7.51124L14.9596 7.51127L8.56881 13.9021C8.4409 14.0345 8.2299 14.0382 8.09746 13.9103C7.96505 13.7823 7.96136 13.5713 8.08927 13.4389C8.09196 13.4361 8.09468 13.4334 8.09746 13.4307L14.4882 7.04061C15.6148 5.91362 15.6148 4.08687 14.4882 2.95988L13.7069 2.17852C12.5799 1.05194 10.7532 1.05194 9.62617 2.17852L1.27603 10.5287C0.463738 11.3414 0.463738 12.6586 1.27603 13.4714L1.86204 14.0574C2.68599 14.8421 3.98083 14.8421 4.80475 14.0574L12.2929 6.56928C12.7913 6.07099 12.7913 5.26307 12.293 4.76472C12.293 4.76469 12.2929 4.76463 12.2929 4.7646L11.9022 4.37393C11.3945 3.89883 10.6053 3.89883 10.0976 4.37393L4.56881 9.90269C4.4409 10.0351 4.22989 10.0388 4.09745 9.91087C3.96505 9.78297 3.96139 9.57196 4.08927 9.43952C4.09195 9.43674 4.09467 9.43402 4.09745 9.43133L9.62617 3.90255C10.3989 3.17869 11.6008 3.17869 12.3736 3.90255L12.7642 4.29321C13.5229 5.05188 13.5229 6.28194 12.7642 7.04061L5.2761 14.5287C4.20317 15.6017 2.46365 15.6017 1.39072 14.5288C1.39072 14.5288 1.39072 14.5288 1.39069 14.5287L0.804682 13.9427C-0.268242 12.8698 -0.268242 11.1303 0.80465 10.0573C0.80465 10.0573 0.80465 10.0573 0.804682 10.0573L9.15482 1.70717C9.81983 1.03909 10.7242 0.664431 11.6669 0.666493Z">
                                                                </path>
                                                            </svg>Original textbooks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-dat">September 30,2020 </p>
                                            <div class="userchat"><a class="photo" href="#"><img
                                                        src="/frontAssets/images/profile-1.png" alt=""></a>
                                                <div class="padcht">
                                                    <div class="text">
                                                        <p>Lessoon Hasn't Started Yet Lessoon Hasn't Started Yet Lessoon
                                                            Hasn't
                                                            Started Yet</p>
                                                        <div class="actions"><span class="time">3:16 PM</span>
                                                            <div class="dropdown"><a
                                                                    class="dropdown-toggle fas fa-ellipsis-h" href="#"
                                                                    data-toggle="dropdown"></a>
                                                                <div class="dropdown-menu"><a class="dropdown-item"
                                                                        href="#"><i class="fas fa-pen"></i>
                                                                        edit</a><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-exclamation-circle"></i>
                                                                        Report a
                                                                        Message</a><a class="dropdown-item"
                                                                        href="#delete-message" data-toggle="modal"><i
                                                                            class="far fa-times-circle"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attach">
                                                        <p>
                                                            <svg width="14" height="14" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.804705 13.9427L1.39068 14.5287C2.46361 15.6017 4.20314 15.6017 5.27606 14.5288C5.27606 14.5288 5.27606 14.5288 5.2761 14.5287L12.7642 7.04061C13.5229 6.28194 13.5229 5.05188 12.7642 4.29321L12.3736 3.90255C11.6008 3.17869 10.3989 3.17869 9.62617 3.90255L4.09742 9.4313C3.96501 9.55921 3.96135 9.77022 4.08923 9.90266C4.21714 10.0351 4.42814 10.0387 4.56058 9.91084C4.56336 9.90816 4.56608 9.90544 4.56877 9.90266L10.0975 4.3739C10.6053 3.8988 11.3945 3.8988 11.9022 4.3739L12.2929 4.76456C12.7912 5.26285 12.7913 6.07078 12.293 6.56913C12.293 6.56916 12.2929 6.56922 12.2929 6.56925L4.80478 14.0574C3.98082 14.8422 2.68599 14.8422 1.86207 14.0574L1.27606 13.4714C0.463761 12.6587 0.463761 11.3414 1.27606 10.5287L9.6262 2.17855C10.7532 1.05197 12.5799 1.05197 13.7069 2.17855L14.4883 2.95922C15.6149 4.08621 15.6149 5.91296 14.4883 7.03995L8.09749 13.4307C7.96508 13.5586 7.96139 13.7696 8.0893 13.9021C8.21721 14.0345 8.42821 14.0382 8.56065 13.9103C8.56344 13.9076 8.56615 13.9049 8.56884 13.9021L14.9596 7.51196C16.3468 6.12481 16.3468 3.87577 14.9596 2.48859C14.9596 2.48856 14.9596 2.48856 14.9596 2.48856L14.1783 1.7072C12.7911 0.320019 10.5421 0.319986 9.15488 1.70714C9.15488 1.70717 9.15485 1.70717 9.15485 1.7072L0.804705 10.0573C-0.268221 11.1302 -0.268251 12.8698 0.804705 13.9427C0.804673 13.9427 0.804673 13.9427 0.804705 13.9427Z">
                                                                </path>
                                                                <path
                                                                    d="M11.6669 0.666493C12.6095 0.664431 13.5139 1.03909 14.1789 1.70717L14.9596 2.48787C16.3468 3.87502 16.3468 6.12406 14.9596 7.51124L14.9596 7.51127L8.56881 13.9021C8.4409 14.0345 8.2299 14.0382 8.09746 13.9103C7.96505 13.7823 7.96136 13.5713 8.08927 13.4389C8.09196 13.4361 8.09468 13.4334 8.09746 13.4307L14.4882 7.04061C15.6148 5.91362 15.6148 4.08687 14.4882 2.95988L13.7069 2.17852C12.5799 1.05194 10.7532 1.05194 9.62617 2.17852L1.27603 10.5287C0.463738 11.3414 0.463738 12.6586 1.27603 13.4714L1.86204 14.0574C2.68599 14.8421 3.98083 14.8421 4.80475 14.0574L12.2929 6.56928C12.7913 6.07099 12.7913 5.26307 12.293 4.76472C12.293 4.76469 12.2929 4.76463 12.2929 4.7646L11.9022 4.37393C11.3945 3.89883 10.6053 3.89883 10.0976 4.37393L4.56881 9.90269C4.4409 10.0351 4.22989 10.0388 4.09745 9.91087C3.96505 9.78297 3.96139 9.57196 4.08927 9.43952C4.09195 9.43674 4.09467 9.43402 4.09745 9.43133L9.62617 3.90255C10.3989 3.17869 11.6008 3.17869 12.3736 3.90255L12.7642 4.29321C13.5229 5.05188 13.5229 6.28194 12.7642 7.04061L5.2761 14.5287C4.20317 15.6017 2.46365 15.6017 1.39072 14.5288C1.39072 14.5288 1.39072 14.5288 1.39069 14.5287L0.804682 13.9427C-0.268242 12.8698 -0.268242 11.1303 0.80465 10.0573C0.80465 10.0573 0.80465 10.0573 0.804682 10.0573L9.15482 1.70717C9.81983 1.03909 10.7242 0.664431 11.6669 0.666493Z">
                                                                </path>
                                                            </svg>Original textbooks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userchat tow"><a class="photo" href="#"><img
                                                        src="/frontAssets/images/profile-1.png" alt=""></a>
                                                <div class="padcht">
                                                    <div class="text">
                                                        <p>Lessoon Hasn't Started Yet Lessoon Hasn't Started Yet Lessoon
                                                            Hasn't
                                                            Started Yet</p>
                                                        <div class="actions"><span class="time">3:16 PM
                                                                <!--i(class="fas fa-check it-che")--><i
                                                                    class="fas fa-check-double it-che active"></i>
                                                            </span></div>
                                                    </div>
                                                    <div class="attach">
                                                        <p>
                                                            <svg width="14" height="14" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.804705 13.9427L1.39068 14.5287C2.46361 15.6017 4.20314 15.6017 5.27606 14.5288C5.27606 14.5288 5.27606 14.5288 5.2761 14.5287L12.7642 7.04061C13.5229 6.28194 13.5229 5.05188 12.7642 4.29321L12.3736 3.90255C11.6008 3.17869 10.3989 3.17869 9.62617 3.90255L4.09742 9.4313C3.96501 9.55921 3.96135 9.77022 4.08923 9.90266C4.21714 10.0351 4.42814 10.0387 4.56058 9.91084C4.56336 9.90816 4.56608 9.90544 4.56877 9.90266L10.0975 4.3739C10.6053 3.8988 11.3945 3.8988 11.9022 4.3739L12.2929 4.76456C12.7912 5.26285 12.7913 6.07078 12.293 6.56913C12.293 6.56916 12.2929 6.56922 12.2929 6.56925L4.80478 14.0574C3.98082 14.8422 2.68599 14.8422 1.86207 14.0574L1.27606 13.4714C0.463761 12.6587 0.463761 11.3414 1.27606 10.5287L9.6262 2.17855C10.7532 1.05197 12.5799 1.05197 13.7069 2.17855L14.4883 2.95922C15.6149 4.08621 15.6149 5.91296 14.4883 7.03995L8.09749 13.4307C7.96508 13.5586 7.96139 13.7696 8.0893 13.9021C8.21721 14.0345 8.42821 14.0382 8.56065 13.9103C8.56344 13.9076 8.56615 13.9049 8.56884 13.9021L14.9596 7.51196C16.3468 6.12481 16.3468 3.87577 14.9596 2.48859C14.9596 2.48856 14.9596 2.48856 14.9596 2.48856L14.1783 1.7072C12.7911 0.320019 10.5421 0.319986 9.15488 1.70714C9.15488 1.70717 9.15485 1.70717 9.15485 1.7072L0.804705 10.0573C-0.268221 11.1302 -0.268251 12.8698 0.804705 13.9427C0.804673 13.9427 0.804673 13.9427 0.804705 13.9427Z">
                                                                </path>
                                                                <path
                                                                    d="M11.6669 0.666493C12.6095 0.664431 13.5139 1.03909 14.1789 1.70717L14.9596 2.48787C16.3468 3.87502 16.3468 6.12406 14.9596 7.51124L14.9596 7.51127L8.56881 13.9021C8.4409 14.0345 8.2299 14.0382 8.09746 13.9103C7.96505 13.7823 7.96136 13.5713 8.08927 13.4389C8.09196 13.4361 8.09468 13.4334 8.09746 13.4307L14.4882 7.04061C15.6148 5.91362 15.6148 4.08687 14.4882 2.95988L13.7069 2.17852C12.5799 1.05194 10.7532 1.05194 9.62617 2.17852L1.27603 10.5287C0.463738 11.3414 0.463738 12.6586 1.27603 13.4714L1.86204 14.0574C2.68599 14.8421 3.98083 14.8421 4.80475 14.0574L12.2929 6.56928C12.7913 6.07099 12.7913 5.26307 12.293 4.76472C12.293 4.76469 12.2929 4.76463 12.2929 4.7646L11.9022 4.37393C11.3945 3.89883 10.6053 3.89883 10.0976 4.37393L4.56881 9.90269C4.4409 10.0351 4.22989 10.0388 4.09745 9.91087C3.96505 9.78297 3.96139 9.57196 4.08927 9.43952C4.09195 9.43674 4.09467 9.43402 4.09745 9.43133L9.62617 3.90255C10.3989 3.17869 11.6008 3.17869 12.3736 3.90255L12.7642 4.29321C13.5229 5.05188 13.5229 6.28194 12.7642 7.04061L5.2761 14.5287C4.20317 15.6017 2.46365 15.6017 1.39072 14.5288C1.39072 14.5288 1.39072 14.5288 1.39069 14.5287L0.804682 13.9427C-0.268242 12.8698 -0.268242 11.1303 0.80465 10.0573C0.80465 10.0573 0.80465 10.0573 0.804682 10.0573L9.15482 1.70717C9.81983 1.03909 10.7242 0.664431 11.6669 0.666493Z">
                                                                </path>
                                                            </svg>Original textbooks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-dat">September 30,2020 </p>
                                            <div class="userchat"><a class="photo" href="#"><img
                                                        src="/frontAssets/images/profile-1.png" alt=""></a>
                                                <div class="padcht">
                                                    <div class="text">
                                                        <p>Lessoon Hasn't Started Yet Lessoon Hasn't Started Yet Lessoon
                                                            Hasn't
                                                            Started Yet</p>
                                                        <div class="actions"><span class="time">3:16 PM</span>
                                                            <div class="dropdown"><a
                                                                    class="dropdown-toggle fas fa-ellipsis-h" href="#"
                                                                    data-toggle="dropdown"></a>
                                                                <div class="dropdown-menu"><a class="dropdown-item"
                                                                        href="#"><i class="fas fa-pen"></i>
                                                                        edit</a><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-exclamation-circle"></i>
                                                                        Report a
                                                                        Message</a><a class="dropdown-item"
                                                                        href="#delete-message" data-toggle="modal"><i
                                                                            class="far fa-times-circle"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attach">
                                                        <p>
                                                            <svg width="14" height="14" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.804705 13.9427L1.39068 14.5287C2.46361 15.6017 4.20314 15.6017 5.27606 14.5288C5.27606 14.5288 5.27606 14.5288 5.2761 14.5287L12.7642 7.04061C13.5229 6.28194 13.5229 5.05188 12.7642 4.29321L12.3736 3.90255C11.6008 3.17869 10.3989 3.17869 9.62617 3.90255L4.09742 9.4313C3.96501 9.55921 3.96135 9.77022 4.08923 9.90266C4.21714 10.0351 4.42814 10.0387 4.56058 9.91084C4.56336 9.90816 4.56608 9.90544 4.56877 9.90266L10.0975 4.3739C10.6053 3.8988 11.3945 3.8988 11.9022 4.3739L12.2929 4.76456C12.7912 5.26285 12.7913 6.07078 12.293 6.56913C12.293 6.56916 12.2929 6.56922 12.2929 6.56925L4.80478 14.0574C3.98082 14.8422 2.68599 14.8422 1.86207 14.0574L1.27606 13.4714C0.463761 12.6587 0.463761 11.3414 1.27606 10.5287L9.6262 2.17855C10.7532 1.05197 12.5799 1.05197 13.7069 2.17855L14.4883 2.95922C15.6149 4.08621 15.6149 5.91296 14.4883 7.03995L8.09749 13.4307C7.96508 13.5586 7.96139 13.7696 8.0893 13.9021C8.21721 14.0345 8.42821 14.0382 8.56065 13.9103C8.56344 13.9076 8.56615 13.9049 8.56884 13.9021L14.9596 7.51196C16.3468 6.12481 16.3468 3.87577 14.9596 2.48859C14.9596 2.48856 14.9596 2.48856 14.9596 2.48856L14.1783 1.7072C12.7911 0.320019 10.5421 0.319986 9.15488 1.70714C9.15488 1.70717 9.15485 1.70717 9.15485 1.7072L0.804705 10.0573C-0.268221 11.1302 -0.268251 12.8698 0.804705 13.9427C0.804673 13.9427 0.804673 13.9427 0.804705 13.9427Z">
                                                                </path>
                                                                <path
                                                                    d="M11.6669 0.666493C12.6095 0.664431 13.5139 1.03909 14.1789 1.70717L14.9596 2.48787C16.3468 3.87502 16.3468 6.12406 14.9596 7.51124L14.9596 7.51127L8.56881 13.9021C8.4409 14.0345 8.2299 14.0382 8.09746 13.9103C7.96505 13.7823 7.96136 13.5713 8.08927 13.4389C8.09196 13.4361 8.09468 13.4334 8.09746 13.4307L14.4882 7.04061C15.6148 5.91362 15.6148 4.08687 14.4882 2.95988L13.7069 2.17852C12.5799 1.05194 10.7532 1.05194 9.62617 2.17852L1.27603 10.5287C0.463738 11.3414 0.463738 12.6586 1.27603 13.4714L1.86204 14.0574C2.68599 14.8421 3.98083 14.8421 4.80475 14.0574L12.2929 6.56928C12.7913 6.07099 12.7913 5.26307 12.293 4.76472C12.293 4.76469 12.2929 4.76463 12.2929 4.7646L11.9022 4.37393C11.3945 3.89883 10.6053 3.89883 10.0976 4.37393L4.56881 9.90269C4.4409 10.0351 4.22989 10.0388 4.09745 9.91087C3.96505 9.78297 3.96139 9.57196 4.08927 9.43952C4.09195 9.43674 4.09467 9.43402 4.09745 9.43133L9.62617 3.90255C10.3989 3.17869 11.6008 3.17869 12.3736 3.90255L12.7642 4.29321C13.5229 5.05188 13.5229 6.28194 12.7642 7.04061L5.2761 14.5287C4.20317 15.6017 2.46365 15.6017 1.39072 14.5288C1.39072 14.5288 1.39072 14.5288 1.39069 14.5287L0.804682 13.9427C-0.268242 12.8698 -0.268242 11.1303 0.80465 10.0573C0.80465 10.0573 0.80465 10.0573 0.804682 10.0573L9.15482 1.70717C9.81983 1.03909 10.7242 0.664431 11.6669 0.666493Z">
                                                                </path>
                                                            </svg>Original textbooks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userchat tow"><a class="photo" href="#"><img
                                                        src="/frontAssets/images/profile-1.png" alt=""></a>
                                                <div class="padcht">
                                                    <div class="text">
                                                        <p>Lessoon Hasn't Started Yet Lessoon Hasn't Started Yet Lessoon
                                                            Hasn't
                                                            Started Yet</p>
                                                        <div class="actions"><span class="time">3:16 PM
                                                                <!--i(class="fas fa-check it-che")--><i
                                                                    class="fas fa-check-double it-che active"></i>
                                                            </span></div>
                                                    </div>
                                                    <div class="attach">
                                                        <p>
                                                            <svg width="14" height="14" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.804705 13.9427L1.39068 14.5287C2.46361 15.6017 4.20314 15.6017 5.27606 14.5288C5.27606 14.5288 5.27606 14.5288 5.2761 14.5287L12.7642 7.04061C13.5229 6.28194 13.5229 5.05188 12.7642 4.29321L12.3736 3.90255C11.6008 3.17869 10.3989 3.17869 9.62617 3.90255L4.09742 9.4313C3.96501 9.55921 3.96135 9.77022 4.08923 9.90266C4.21714 10.0351 4.42814 10.0387 4.56058 9.91084C4.56336 9.90816 4.56608 9.90544 4.56877 9.90266L10.0975 4.3739C10.6053 3.8988 11.3945 3.8988 11.9022 4.3739L12.2929 4.76456C12.7912 5.26285 12.7913 6.07078 12.293 6.56913C12.293 6.56916 12.2929 6.56922 12.2929 6.56925L4.80478 14.0574C3.98082 14.8422 2.68599 14.8422 1.86207 14.0574L1.27606 13.4714C0.463761 12.6587 0.463761 11.3414 1.27606 10.5287L9.6262 2.17855C10.7532 1.05197 12.5799 1.05197 13.7069 2.17855L14.4883 2.95922C15.6149 4.08621 15.6149 5.91296 14.4883 7.03995L8.09749 13.4307C7.96508 13.5586 7.96139 13.7696 8.0893 13.9021C8.21721 14.0345 8.42821 14.0382 8.56065 13.9103C8.56344 13.9076 8.56615 13.9049 8.56884 13.9021L14.9596 7.51196C16.3468 6.12481 16.3468 3.87577 14.9596 2.48859C14.9596 2.48856 14.9596 2.48856 14.9596 2.48856L14.1783 1.7072C12.7911 0.320019 10.5421 0.319986 9.15488 1.70714C9.15488 1.70717 9.15485 1.70717 9.15485 1.7072L0.804705 10.0573C-0.268221 11.1302 -0.268251 12.8698 0.804705 13.9427C0.804673 13.9427 0.804673 13.9427 0.804705 13.9427Z">
                                                                </path>
                                                                <path
                                                                    d="M11.6669 0.666493C12.6095 0.664431 13.5139 1.03909 14.1789 1.70717L14.9596 2.48787C16.3468 3.87502 16.3468 6.12406 14.9596 7.51124L14.9596 7.51127L8.56881 13.9021C8.4409 14.0345 8.2299 14.0382 8.09746 13.9103C7.96505 13.7823 7.96136 13.5713 8.08927 13.4389C8.09196 13.4361 8.09468 13.4334 8.09746 13.4307L14.4882 7.04061C15.6148 5.91362 15.6148 4.08687 14.4882 2.95988L13.7069 2.17852C12.5799 1.05194 10.7532 1.05194 9.62617 2.17852L1.27603 10.5287C0.463738 11.3414 0.463738 12.6586 1.27603 13.4714L1.86204 14.0574C2.68599 14.8421 3.98083 14.8421 4.80475 14.0574L12.2929 6.56928C12.7913 6.07099 12.7913 5.26307 12.293 4.76472C12.293 4.76469 12.2929 4.76463 12.2929 4.7646L11.9022 4.37393C11.3945 3.89883 10.6053 3.89883 10.0976 4.37393L4.56881 9.90269C4.4409 10.0351 4.22989 10.0388 4.09745 9.91087C3.96505 9.78297 3.96139 9.57196 4.08927 9.43952C4.09195 9.43674 4.09467 9.43402 4.09745 9.43133L9.62617 3.90255C10.3989 3.17869 11.6008 3.17869 12.3736 3.90255L12.7642 4.29321C13.5229 5.05188 13.5229 6.28194 12.7642 7.04061L5.2761 14.5287C4.20317 15.6017 2.46365 15.6017 1.39072 14.5288C1.39072 14.5288 1.39072 14.5288 1.39069 14.5287L0.804682 13.9427C-0.268242 12.8698 -0.268242 11.1303 0.80465 10.0573C0.80465 10.0573 0.80465 10.0573 0.804682 10.0573L9.15482 1.70717C9.81983 1.03909 10.7242 0.664431 11.6669 0.666493Z">
                                                                </path>
                                                            </svg>Original textbooks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="formchat" action="#" method="post"><a class="goback" href="#"><i
                                                    class="fas fa-plus"></i></a>
                                            <div class="input-text">
                                                <textarea type="text" placeholder="Write your message..."></textarea><i
                                                    class="far fa-smile"> </i>
                                            </div>
                                            <button class="send" type="submit"><i
                                                    class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                                    <div class="files">
                                        {{-- <div class="imgage"><a class="fas fa-angle-left" href="#"> </a><img
                                            src="/frontAssets/images/profile-1.png" alt="Arabia" title="Arabia" />
                                        <div class="text-da">
                                            <h4 class="title">mohamed</h4><span class="time">September 30,2020</span>
                                        </div>
                                    </div> --}}
                                        <!-- <div class="ex-files"><a class="files-bot" href="#"><i class="fas fa-folder-open"></i>
                                        files</a><a class="close" href="#">
                                        <svg width="10" height="10" viewBox="0 0 12 12" f="f"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                                                fill="#000"></path>
                                        </svg></a></div> -->
                                    </div>
                                    <form class="formnotes" action="#" method="post" style="display:none">
                                        <div class="row">
                                            <div class="col-sm-12 fild">
                                                <input class="form-control" type="text" placeholder="filled by tutor"
                                                    name="lessons" autocomplete="off" autofocus="autofocus"
                                                    required="required" />
                                                <label class="floating-label">lessons objective</label>
                                            </div>
                                            <div class="col-sm-12 fild">
                                                <input class="form-control" type="text" placeholder="filled by tutor"
                                                    name="vocabulary" autocomplete="off" autofocus="autofocus"
                                                    required="required" />
                                                <label class="floating-label">new vocabulary</label>
                                            </div>
                                            <div class="col-sm-12 fild">
                                                <input class="form-control" type="text" placeholder="filled by tutor"
                                                    name="correction" autocomplete="off" autofocus="autofocus"
                                                    required="required" />
                                                <label class="floating-label">error correction</label>
                                            </div>
                                            <div class="col-sm-12 fild">
                                                <input class="form-control" type="text" placeholder="filled by tutor"
                                                    name="objective" autocomplete="off" autofocus="autofocus"
                                                    required="required" />
                                                <label class="floating-label">text lesson objective</label>
                                            </div>
                                            <div class="col-sm-12 fild">
                                                <input class="form-control" type="text" placeholder="filled by tutor"
                                                    name="homework" autocomplete="off" autofocus="autofocus"
                                                    required="required" />
                                                <label class="floating-label">home work</label>
                                            </div>
                                            <div class="col-sm-12 fild">
                                                <input class="form-control" type="text" placeholder="filled by tutor"
                                                    name="material" autocomplete="off" autofocus="autofocus"
                                                    required="required" />
                                                <label class="floating-label">material</label>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="item-fridy">
                                        {{-- <form class="formnotes mt-3" action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-6 fild"><i class="fas fa-chevron-down iconsel"></i>
                                                <select class="form-control" name="hour" autocomplete="off"
                                                    required="required">
                                                    <option> </option>
                                                    <option>date</option>
                                                    <option>date</option>
                                                    <option>date</option>
                                                </select>
                                                <label class="floating-label">date </label>
                                            </div>
                                            <div class="col-sm-6 fild"><i class="fas fa-chevron-down iconsel"></i>
                                                <select class="form-control" name="hour" autocomplete="off"
                                                    required="required">
                                                    <option> </option>
                                                    <option>tutor</option>
                                                    <option>tutor</option>
                                                    <option>tutor</option>
                                                </select>
                                                <label class="floating-label">tutor </label>
                                            </div>
                                        </div>
                                    </form> --}}
                                        <nav class="items-box">
                                            @if(Auth::check())
                                            @foreach(Auth::user()->notifications as $notification)
                                            <a
                                                class=" @if($notification->read_at == null) unread_notification @endif ">
                                                {{-- <img src="/frontAssets/images/profile-1.png"
                                                    alt="Arabia" title="Arabia" /> --}}
                                                <div class="text-da">
                                                    <h4 class="title">{{$notification->data}}</h4><span
                                                        class="time">{{\Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</span>
                                                </div>
                                            </a>
                                            @endforeach
                                            @endif
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </header>
        <!--End Header-->
        @yield('pageContent')
        <!-- Scripts -->
		
		@if($gsetting->whatsapp_mobile) <a href="https://wa.me/{{ $gsetting->whatsapp_mobile }}" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a> @endif
		
        @include('frontend.layouts.footer')

        <!-- Hotjar Tracking Code for https://arabie.live/ -->
        <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2254007,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
        </script>
        <!-- this is to include custom js files -->

        <script type="text/javascript">
        var read_notifications_url = "{{route('mark.user.notifications.read')}}"
        // document.ready function
        (function($){
		$(function() {
            // selector has to be . for a class name and # for an ID
            $('#read_notifications').click(function(e) {
                e.preventDefault(); // prevent form from reloading page
                $.ajax({
                    'url': read_notifications_url,
                    'type': 'GET',
                    beforeSend: function() {},
                    error: function() {
                        alert('Error');
                    },
                    'success': function(data) {
                        if (data.success == "true") {
                            $("#notifications_alarm").hide();
                        }
                    }
                });
            });
			
			// Change Site Language
            $('#site_lang').on('change', function(e) {
				var site_lang = $(this).val(); // get selected lang
                if (site_lang) { // require a URL
					window.location = '/language-switch/'+site_lang; // redirect
				}
				return false;
            });
        });
		})(jQuery);
        </script>
		
<script>
(function($){
$('#makeFav').click(function() {
    var tutor_id = $("#makeFav").attr('tutor_id');
    $.ajax({
        url: "/api/makeFavouriteTutor",
        type: "POST",
        data: {
            tutor_id: tutor_id
        },
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            location.reload();
        }
    })
})
$('#removeFav').click(function() {
    var tutor_id = $("#removeFav").attr('tutor_id');
    $.ajax({
        url: "/api/removeFavourite",
        type: "POST",
        data: {
            tutor_id: tutor_id
        },
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            location.reload();
        }
    })
})
})(jQuery);
</script>

        {{-- sumo integration --}}
        {{-- <script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='bd1920672b8b1c68fe5a852443fe071cb643c70eb09ac4810a6c88dc32e263bc';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script> --}}

        <!-- Google Tag Manager body (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T79JS82" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

    </body>

</html>
