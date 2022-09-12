@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.home'))
@section('pageContent')
    @include('admin.message')
    <div class="menubab">
        <div class="container">
            <nav class="setting-menu">
                <a href="/">{{ __('frontstaticword.home') }}</a>
                {{-- <a href="/about">About Us</a> --}}
                <a href="/find/tutor">{{ __('frontstaticword.FindATutor') }}</a>
                @if(Auth::guest())<a href="/registration">{{ __('frontstaticword.BecomeATutor') }}</a>@endif
            </nav>
            <nav class="social">
                <a class="fab fa-facebook-f icon-facebook" href="https://www.facebook.com/Arabie-114238373695322"
                    target="_blank" title="Facebook"></a>
                <a class="fab fa-twitter icon-twitter" href="https://twitter.com/ArabiePlatform" target="_blank"
                    title="Twitter"></a>
                <a class="fab fa-instagram icon-instagram" href="https://instagram.com/arabieplatform?igshid=7lamdlyg2kf2"
                    target="_blank" title="Instagram"></a>
                {{-- <a class="fab fa-linkedin-in icon-linkedin" href="#" target="_blank" title="linkedin"></a> --}}
                <a class="fab fa-youtube icon-youtube" href="https://www.youtube.com/channel/UCKVoz6IAXIVE0dsMbzxy1sQ"
                    target="_blank" title="YouTube"> </a>
                {{-- <a class="fab fa-google icon-gplus" href="#" target="_blank" title="google"></a> --}}
            </nav>
        </div>
    </div>
    <section class="slider">
   
                <div class=" item">
                    <div class="prod-slider">
                        <div class="slider-item">
                                    <div class="slider-img"><img src="/frontAssets/images/slide.png" alt="Arabia" title="Arabia"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
    <div class="inner">
                                <!-- <p class="text-top">Arabie is your way to.. </p> -->
                        <h2 class="title">{{ __('frontstaticword.home_slider_1') }} <br />  {{ __('frontstaticword.home_slider_2') }}</h2>
                            <p class="text-bot">{{ __('frontstaticword.home_slider_3') }}<br /> {{ __('frontstaticword.home_slider_4') }}</p>
                            
                                <div class="bottoms"><a
                                        href="/registration">{{ __('frontstaticword.BecomeATutor') }}</a>
                                    <!--a(href="#") Contact Us-->
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
                        
                        <div class="slider-item">
                                    <div class="slider-img">            <img src="/frontAssets/images/slide2.png" alt="Arabia" title="Arabia">
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
    <div class="inner">
                                <!-- <p class="text-top">Arabie is your way to.. </p> -->
                        <h2 class="title">{{ __('frontstaticword.home_slider_5') }} <br />  {{ __('frontstaticword.home_slider_6') }}</h2>
                            <p class="text-bot">{{ __('frontstaticword.home_slider_7') }}<br /> {{ __('frontstaticword.home_slider_8') }}</p>
                            
                                <div class="bottoms"><a
                                        href="/register">{{ __('frontstaticword.SignUpAsStudent') }}</a>
                                    <!--a(href="#") Contact Us-->
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
                        
                   
                </div>
        </div>
    </section>
    <section class="consetetur">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 item"><i class="b-1"><img src="/frontAssets/images/b-1.png" alt="Arabia"
                            title="Arabia"></i><i class="b-2"><img src="/frontAssets/images/b-2.png" alt="Arabia"
                            title="Arabia"></i><i class="b-3"><img src="/frontAssets/images/b-3.png" alt="Arabia"
                            title="Arabia"></i><i class="b-4"><img src="/frontAssets/images/b-4.png" alt="Arabia"
                            title="Arabia"></i>
                    <div class="bg-img"><img src="/frontAssets/images/bg-img.png" alt="Arabia" title="Arabia"></div>
                    <!--<div class="bg-photo">-->
                    <div class="bg-photo" style="width:500px;">
                        <!--<img src="/frontAssets/images/bg-photo.png" alt="Arabia" title="Arabia">
                                        <a class="bla-2 cd-single-point" data-fancybox data-width="780" data-height="440"
                                            href="/frontAssets/images/arabie-s1-eng-vo.mp4"> <i class="cd-img-replace"> </i><i
                                                class="fa fa-play innerbc"> </i></a>-->
                        <video width="100%" style="padding-top:55px;" controls autoplay muted>
                            <source src="/frontAssets/images/arabie-s1-eng-vo.mp4" type="video/mp4">
                            {{ __('frontstaticword.home_about_1') }}
                        </video>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <h2 class="title">{{ __('frontstaticword.home_about_2') }} <br /> {{ __('frontstaticword.home_about_3') }} </h2>
                    <p class="text"> {{ __('frontstaticword.home_about_4') }}<br /><br /> {{ __('frontstaticword.home_about_5') }}</p>
                </div>
            </div>
        </div>
    </section>
      <section class="cons-tow">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 texitem">
                    <div>
                        <h2 class="title">{{ __('frontstaticword.home_about_6') }}<br /> {{ __('frontstaticword.home_about_7') }} <br /> {{ __('frontstaticword.home_about_8') }} </h2>
                        <p class="text"> {{ __('frontstaticword.home_about_9') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-sm-6 inner-bg">
                            <div class="in-text">
                                <div class="photo"><img src="/frontAssets/images/img-22.png" alt="Arabia"
                                        title="Arabia">
                                </div>
                                <h3 class="title-in">{{ __('frontstaticword.home_about_10') }}</h3>
                                <p class="text">{{ __('frontstaticword.home_about_11') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 inner-bg">
                            <div class="in-text">
                                <div class="photo"><img src="/frontAssets/images/img-33.png" alt="Arabia"
                                        title="Arabia">
                                </div>
                                <h3 class="title-in">{{ __('frontstaticword.home_about_12') }}</h3>
                                <p class="text">{{ __('frontstaticword.home_about_13') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 inner-bg">
                            <div class="in-text">
                                <div class="photo"><img src="/frontAssets/images/img-11.png" alt="Arabia"
                                        title="Arabia">
                                </div>
                                <h3 class="title-in">{{ __('frontstaticword.home_about_14') }}</h3>
                                <p class="text">{{ __('frontstaticword.home_about_15') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 inner-bg">
                            <div class="in-text">
                                <div class="photo"><img src="/frontAssets/images/img-44.png" alt="Arabia"
                                        title="Arabia">
                                </div>
                                <h3 class="title-in">{{ __('frontstaticword.home_about_16') }}</h3>
                                <p class="text">{{ __('frontstaticword.home_about_17') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--<section class="packages">
                        <div class="container">
                            <h2 class="title"><span></span> Our Ready to go packages</h2>
                            <p class="texttop"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <div class="row">
                                <div class="col-sm-4 item">
                                    <div class="inner-bg">
                                        <div class="photo"><img src="/frontAssets/images/bg4-photo.jpg" alt="Arabia" title="Arabia">
                                            <div class="feature">Featured</div>
                                            <a href="#" class="ico-status">
                                                <i></i>

                                            </a>
                                            <a href="#" class="ico-fav">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="25.7" height="24.665" viewBox="0 0 25.7 24.665">
                                                    <defs>
                                                        <filter id="Icon_ionic-md-heart" x="0" y="0" width="25.7" height="24.665"
                                                            filterUnits="userSpaceOnUse">
                                                            <feOffset dy="1" input="SourceAlpha" />
                                                            <feGaussianBlur stdDeviation="1.5" result="blur" />
                                                            <feFlood flood-opacity="0.161" />
                                                            <feComposite operator="in" in2="blur" />
                                                            <feComposite in="SourceGraphic" />
                                                        </filter>
                                                    </defs>
                                                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Icon_ionic-md-heart)">
                                                        <path id="Icon_ionic-md-heart-2" data-name="Icon ionic-md-heart"
                                                            d="M11.225,18.992l-1.138-1.027c-4.043-3.712-6.711-6.121-6.711-9.121A4.269,4.269,0,0,1,7.692,4.5a4.644,4.644,0,0,1,3.532,1.659A4.644,4.644,0,0,1,14.757,4.5a4.269,4.269,0,0,1,4.317,4.344c0,3-2.669,5.41-6.711,9.121Z"
                                                            transform="translate(1.63 -0.5)" fill="#d9dfe8" stroke="#fff"
                                                            stroke-width="1" />
                                                    </g>
                                                </svg>

                                            </a>
                                        </div>
                                        <div class="session-price">
                                            <h3>$ 500/<span>Session</span></h3>
                                        </div>
                                        <h4 class="name">Arabic for beginners </h4>
                                        <div class="name-inst"> with mr/ Ahmed Mahmoud </div>

                                        <p class="text"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
                                        <a href="#" class="btn-more"> More Details</a>
                                    </div>


                                </div>
                                <div class="col-sm-4 item">
                                    <div class="inner-bg">
                                        <div class="photo"><img src="/frontAssets/images/bg4-photo.jpg" alt="Arabia" title="Arabia">
                                            <div class="feature">Featured</div>
                                            <a href="#" class="ico-status">
                                                <i></i>

                                            </a>
                                            <a href="#" class="ico-fav">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="25.7" height="24.665" viewBox="0 0 25.7 24.665">
                                                    <defs>
                                                        <filter id="Icon_ionic-md-heart" x="0" y="0" width="25.7" height="24.665"
                                                            filterUnits="userSpaceOnUse">
                                                            <feOffset dy="1" input="SourceAlpha" />
                                                            <feGaussianBlur stdDeviation="1.5" result="blur" />
                                                            <feFlood flood-opacity="0.161" />
                                                            <feComposite operator="in" in2="blur" />
                                                            <feComposite in="SourceGraphic" />
                                                        </filter>
                                                    </defs>
                                                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Icon_ionic-md-heart)">
                                                        <path id="Icon_ionic-md-heart-2" data-name="Icon ionic-md-heart"
                                                            d="M11.225,18.992l-1.138-1.027c-4.043-3.712-6.711-6.121-6.711-9.121A4.269,4.269,0,0,1,7.692,4.5a4.644,4.644,0,0,1,3.532,1.659A4.644,4.644,0,0,1,14.757,4.5a4.269,4.269,0,0,1,4.317,4.344c0,3-2.669,5.41-6.711,9.121Z"
                                                            transform="translate(1.63 -0.5)" fill="#d9dfe8" stroke="#fff"
                                                            stroke-width="1" />
                                                    </g>
                                                </svg>

                                            </a>
                                        </div>
                                        <div class="session-price">
                                            <h3>$ 500/<span>Session</span></h3>
                                        </div>
                                        <h4 class="name">Arabic for beginners </h4>
                                        <div class="name-inst"> with mr/ Ahmed Mahmoud </div>

                                        <p class="text"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
                                        <a href="#" class="btn-more"> More Details</a>
                                    </div>


                                </div>
                                <div class="col-sm-4 item">
                                    <div class="inner-bg">
                                        <div class="photo"><img src="/frontAssets/images/bg4-photo.jpg" alt="Arabia" title="Arabia">
                                            <div class="feature">Featured</div>
                                            <a href="#" class="ico-status">
                                                <i></i>

                                            </a>
                                            <a href="#" class="ico-fav">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="25.7" height="24.665" viewBox="0 0 25.7 24.665">
                                                    <defs>
                                                        <filter id="Icon_ionic-md-heart" x="0" y="0" width="25.7" height="24.665"
                                                            filterUnits="userSpaceOnUse">
                                                            <feOffset dy="1" input="SourceAlpha" />
                                                            <feGaussianBlur stdDeviation="1.5" result="blur" />
                                                            <feFlood flood-opacity="0.161" />
                                                            <feComposite operator="in" in2="blur" />
                                                            <feComposite in="SourceGraphic" />
                                                        </filter>
                                                    </defs>
                                                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Icon_ionic-md-heart)">
                                                        <path id="Icon_ionic-md-heart-2" data-name="Icon ionic-md-heart"
                                                            d="M11.225,18.992l-1.138-1.027c-4.043-3.712-6.711-6.121-6.711-9.121A4.269,4.269,0,0,1,7.692,4.5a4.644,4.644,0,0,1,3.532,1.659A4.644,4.644,0,0,1,14.757,4.5a4.269,4.269,0,0,1,4.317,4.344c0,3-2.669,5.41-6.711,9.121Z"
                                                            transform="translate(1.63 -0.5)" fill="#d9dfe8" stroke="#fff"
                                                            stroke-width="1" />
                                                    </g>
                                                </svg>

                                            </a>
                                        </div>
                                        <div class="session-price">
                                            <h3>$ 500/<span>Session</span></h3>
                                        </div>
                                        <h4 class="name">Arabic for beginners </h4>
                                        <div class="name-inst"> with mr/ Ahmed Mahmoud </div>

                                        <p class="text"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
                                        <a href="#" class="btn-more"> More Details</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>-->
  
  
    <section class="register">
        <div class="container">
            <h3 class="title">{{ __('frontstaticword.home_signup_1') }}</h3>
            <h4 class="title-want">{{ __('frontstaticword.home_signup_2') }}</h4>
            <p class="text"> {{ __('frontstaticword.home_signup_3') }}</p><a
                class="bottom" href="/registration">{{ __('frontstaticword.Signup') }}</a>
        </div>
    </section>
    <section class="how-does">
        <div class="container">
            <h2 class="title"><span></span> {{ __('frontstaticword.home_how_1') }}</h2>
            <p class="texttop"> {{ __('frontstaticword.home_how_2') }}</p>
            <div class="se-items">
                <div class="row">
                    <div class="col-sm-6 it-text">
                        <div>
                            <h2 class="title-dos"><span>1</span> {{ __('frontstaticword.home_how_3') }}</h2>
                            <p class="text">{{ __('frontstaticword.home_how_4') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 item"><img src="/frontAssets/images/how-1.png" alt="Arabia" title="Arabia">
                    </div>
                </div>
            </div>
            <div class="se-items">
                <div class="row">
                    <div class="col-sm-6 item"><img src="/frontAssets/images/how-2.png" alt="Arabia" title="Arabia">
                    </div>
                    <div class="col-sm-6 it-text">
                        <div>
                            <h2 class="title-dos"><span>2</span> {{ __('frontstaticword.home_how_5') }}</h2>
                            <p class="text">{{ __('frontstaticword.home_how_6') }} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="se-items">
                <div class="row">
                    <div class="col-sm-6 it-text">
                        <div>
                            <h2 class="title-dos"><span>3</span> {{ __('frontstaticword.home_how_7') }} </h2>
                            <p class="text">{{ __('frontstaticword.home_how_8') }} </p>
                        </div>
                    </div>
                    <div class="col-sm-6 item"><img src="/frontAssets/images/how-3.png" alt="Arabia" title="Arabia">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="all-students">
        <div class="container">
            <h2 class="title"><span></span> {{ __('frontstaticword.home_learning_testimonial_1') }}</h2>
            <p class="texttop"> {{ __('frontstaticword.home_learning_testimonial_2') }}</p>
            <div class="row">
                <div class="col-sm-4 item"><a class="inner-bg" href="#">
                        <div class="icon-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ba9a74"></stop>
                                        <stop offset="1" stop-color="#877456"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="left-quote" transform="translate(0 -7.858)">
                                    <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                        <path id="Path_700" data-name="Path 700"
                                            d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                            transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                        <path id="Path_701" data-name="Path 701"
                                            d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                            transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="photo"><img src="/frontAssets/images/clip.png" alt="Arabia" title="Arabia">
                        </div>
                        <h4 class="name">Laila Omar</h4>
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <p class="text"> {{ __('frontstaticword.home_learning_testimonial_3') }} </p>
                    </a></div>
                <div class="col-sm-4 item"><a class="inner-bg" href="#">
                        <div class="icon-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ba9a74"></stop>
                                        <stop offset="1" stop-color="#877456"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="left-quote" transform="translate(0 -7.858)">
                                    <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                        <path id="Path_700" data-name="Path 700"
                                            d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                            transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                        <path id="Path_701" data-name="Path 701"
                                            d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                            transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="photo"><img src="/frontAssets/images/clip2.png" alt="Arabia" title="Arabia">
                        </div>
                        <h4 class="name">Jamal Mcfee</h4>
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <p class="text"> {{ __('frontstaticword.home_learning_testimonial_4') }}</p>
                    </a></div>
                <div class="col-sm-4 item"><a class="inner-bg" href="#">
                        <div class="icon-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ba9a74"></stop>
                                        <stop offset="1" stop-color="#877456"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="left-quote" transform="translate(0 -7.858)">
                                    <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                        <path id="Path_700" data-name="Path 700"
                                            d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                            transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                        <path id="Path_701" data-name="Path 701"
                                            d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                            transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="photo"><img src="/frontAssets/images/clip3.png" alt="Arabia" title="Arabia">
                        </div>
                        <h4 class="name">Farida osama</h4>
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <p class="text">{{ __('frontstaticword.home_learning_testimonial_5') }} </p>
                    </a></div>
            </div>
        </div>
    </section>
    <section class="instructors">
        <div class="container">
            <h2 class="title"><span></span> {{ __('frontstaticword.home_teaching_testimonial_1') }}</h2>
            <p class="texttop">{{ __('frontstaticword.home_teaching_testimonial_2') }}</p>
            <div class="instructors-slider">
                <div class="slider-item">
                    <div class="row">
                        <div class="col-sm-6 item"><i class="b-1"><img src="/frontAssets/images/b-1.png"
                                    alt="Arabia" title="Arabia"></i><i class="b-2"><img
                                    src="/frontAssets/images/b-2.png" alt="Arabia" title="Arabia"></i><i
                                class="b-3"><img src="/frontAssets/images/b-3.png" alt="Arabia"
                                    title="Arabia"></i><i class="b-4"><img src="/frontAssets/images/b-4.png"
                                    alt="Arabia" title="Arabia"></i>
                            <div class="bg-img"><img src="/frontAssets/images/bg-img.png" alt="Arabia"
                                    title="Arabia">
                            </div>
                            <div class="bg-photo"><img src="/frontAssets/images/bg3-photo.png" alt="Arabia"
                                    title="Arabia">
                            </div>
                        </div>
                        <div class="col-sm-6 item flex">
                            <div>
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ba9a74"></stop>
                                                <stop offset="1" stop-color="#877456"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="left-quote" transform="translate(0 -7.858)">
                                            <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                                <path id="Path_700" data-name="Path 700"
                                                    d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                                    transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_701" data-name="Path 701"
                                                    d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                                    transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="text"> {{ __('frontstaticword.home_teaching_testimonial_3') }}</p>
                                <div class="icon-svg s-rot">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ba9a74"></stop>
                                                <stop offset="1" stop-color="#877456"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="left-quote" transform="translate(0 -7.858)">
                                            <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                                <path id="Path_700" data-name="Path 700"
                                                    d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                                    transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_701" data-name="Path 701"
                                                    d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                                    transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="title">Marwa Mourad</h2><span class="pos">{{ __('frontstaticword.home_teaching_testimonial_4') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="row">
                        <div class="col-sm-6 item"><i class="b-1"><img src="/frontAssets/images/b-1.png"
                                    alt="Arabia" title="Arabia"></i><i class="b-2"><img
                                    src="/frontAssets/images/b-2.png" alt="Arabia" title="Arabia"></i><i
                                class="b-3"><img src="/frontAssets/images/b-3.png" alt="Arabia"
                                    title="Arabia"></i><i class="b-4"><img src="/frontAssets/images/b-4.png"
                                    alt="Arabia" title="Arabia"></i>
                            <div class="bg-img"><img src="/frontAssets/images/bg-img.png" alt="Arabia"
                                    title="Arabia">
                            </div>
                            <div class="bg-photo"><img src="/frontAssets/images/bg-photo1.png" alt="Arabia"
                                    title="Arabia">
                            </div>
                        </div>
                        <div class="col-sm-6 item flex">
                            <div>
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ba9a74"></stop>
                                                <stop offset="1" stop-color="#877456"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="left-quote" transform="translate(0 -7.858)">
                                            <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                                <path id="Path_700" data-name="Path 700"
                                                    d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                                    transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_701" data-name="Path 701"
                                                    d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                                    transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="text">{{ __('frontstaticword.home_teaching_testimonial_5') }}</p>
                                <div class="icon-svg s-rot">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ba9a74"></stop>
                                                <stop offset="1" stop-color="#877456"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="left-quote" transform="translate(0 -7.858)">
                                            <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                                <path id="Path_700" data-name="Path 700"
                                                    d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                                    transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_701" data-name="Path 701"
                                                    d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                                    transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="title">Samira Mahmoud</h2><span class="pos">{{ __('frontstaticword.home_teaching_testimonial_6') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="row">
                        <div class="col-sm-6 item"><i class="b-1"><img src="/frontAssets/images/b-1.png"
                                    alt="Arabia" title="Arabia"></i><i class="b-2"><img
                                    src="/frontAssets/images/b-2.png" alt="Arabia" title="Arabia"></i><i
                                class="b-3"><img src="/frontAssets/images/b-3.png" alt="Arabia"
                                    title="Arabia"></i><i class="b-4"><img src="/frontAssets/images/b-4.png"
                                    alt="Arabia" title="Arabia"></i>
                            <div class="bg-img"><img src="/frontAssets/images/bg-img.png" alt="Arabia"
                                    title="Arabia">
                            </div>
                            <div class="bg-photo"><img src="/frontAssets/images/bg4-photo.jpg" alt="Arabia"
                                    title="Arabia">
                            </div>
                        </div>
                        <div class="col-sm-6 item flex">
                            <div>
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ba9a74"></stop>
                                                <stop offset="1" stop-color="#877456"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="left-quote" transform="translate(0 -7.858)">
                                            <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                                <path id="Path_700" data-name="Path 700"
                                                    d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                                    transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_701" data-name="Path 701"
                                                    d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                                    transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="text">{{ __('frontstaticword.home_teaching_testimonial_7') }}</p>
                                <div class="icon-svg s-rot">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="44.977" height="37.562" viewBox="0 0 44.977 37.562">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ba9a74"></stop>
                                                <stop offset="1" stop-color="#877456"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="left-quote" transform="translate(0 -7.858)">
                                            <g id="Group_117" data-name="Group 117" transform="translate(0 7.858)">
                                                <path id="Path_700" data-name="Path 700"
                                                    d="M14.4,24.881A11.918,11.918,0,0,0,11.1,24.4a10.349,10.349,0,0,0-4.129.846c1.038-3.8,3.531-10.356,8.5-11.095a1.18,1.18,0,0,0,.962-.849L17.52,9.42a1.18,1.18,0,0,0-.976-1.486,8.245,8.245,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.358,15.133C-.387,28.219-.816,36.078,2.787,41.025a10.756,10.756,0,0,0,8.742,4.394h.046A10.464,10.464,0,0,0,14.4,24.881Z"
                                                    transform="translate(0 -7.858)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_701" data-name="Path 701"
                                                    d="M69.312,29.822a10.488,10.488,0,0,0-6.291-4.942,11.917,11.917,0,0,0-3.293-.481,10.351,10.351,0,0,0-4.13.846c1.038-3.8,3.531-10.356,8.5-11.095a1.181,1.181,0,0,0,.962-.849L66.146,9.42a1.18,1.18,0,0,0-.976-1.486,8.235,8.235,0,0,0-1.111-.075c-5.962,0-11.867,6.223-14.359,15.133-1.462,5.227-1.891,13.087,1.712,18.034a10.754,10.754,0,0,0,8.741,4.393H60.2a10.464,10.464,0,0,0,9.111-15.6Z"
                                                    transform="translate(-25.685 -7.858)" fill="url(#linear-gradient)">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="title">Ahmed El Tokhy</h2><span class="pos">{{ __('frontstaticword.home_teaching_testimonial_8') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="conslast">
        <div class="container">
            <div class="item-img"><img src="/frontAssets/images/conslast.png" alt="Arabia" title="Arabia"></div>
            <h2 class="title">{{ __('frontstaticword.home_satisfaction_1') }}</h2>
            <p class="text">{{ __('frontstaticword.home_satisfaction_2') }}</p>
        </div>
    </section>
@endsection
@section('footerAssets')
    <script src="/frontAssets/js/grt-youtube-popup.js"></script>
@endsection
