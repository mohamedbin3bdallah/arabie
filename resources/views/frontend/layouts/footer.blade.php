<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 boxfot"> <img src="/frontAssets/images/logo-footer.png" alt="Arabia" title="Arabia">
                <p class="text"> {{ __('frontstaticword.footerText') }} </p>
                <nav class="social">
                    <a class="fab fa-facebook-f icon-facebook" href="https://www.facebook.com/Arabie-114238373695322"
                        target="_blank" title="Facebook"></a>
                    <a class="fab fa-twitter icon-twitter" href="https://twitter.com/ArabiePlatform" target="_blank"
                        title="Twitter"></a>
                    <a class="fab fa-instagram icon-instagram" href="https://instagram.com/arabieplatform?igshid=7lamdlyg2kf2"
                        target="_blank" title="Instagram"></a>
                    {{--<a class="fab fa-linkedin-in icon-linkedin" href="#" target="_blank" title="linkedin"></a>--}}
                    <a class="fab fa-youtube icon-youtube"
                        href="https://www.youtube.com/channel/UCKVoz6IAXIVE0dsMbzxy1sQ" target="_blank" title="YouTube">
                    </a>
                    {{--<a class="fab fa-google icon-gplus" href="#" target="_blank" title="google"></a>--}}
                </nav>
            </div>
            <div class="col-md-3 boxfot">
                <h6 class="title">{{ __('frontstaticword.services') }}</h6>
                <nav class="navmenu"> <a href="/register">{{ __('frontstaticword.SignUpAsStudent') }}</a></nav>
                <nav class="navmenu"> <a href="/registration">{{ __('frontstaticword.SignUpAsTutor') }}</a></nav>
                @if(!Auth::check())
                <nav class="navmenu"> <a href="/login">{{ __('frontstaticword.Login') }}</a></nav>
                @endif
                <nav class="navmenu"> <a href="/find/tutor">{{ __('frontstaticword.FindATutor') }}</a></nav>
                <nav class="navmenu"> <a href="/tutor-frequently-faq">{{ __('frontstaticword.tutor_faq') }}</a></nav>
            </div>
            <div class="col-md-3 boxfot">
                <h6 class="title">{{ __('frontstaticword.quick_inks') }}</h6>
                <nav class="navmenu"> <a href="/">{{ __('frontstaticword.home') }}</a></nav>
                <nav class="navmenu"> <a href="/terms_condition">{{ __('frontstaticword.Terms&Condition') }}</a></nav>
                <nav class="navmenu"> <a href="/privacy_policy">{{ __('frontstaticword.PrivacyPolicy') }}</a></nav>
                <nav class="navmenu"> <a href="/pages/cookie-policy">{{ __('frontstaticword.cookies_policy') }}</a></nav>
                <nav class="navmenu"> <a href="/pages/payment-policy">{{ __('frontstaticword.payment_policy') }}</a></nav>
            </div>
            <div class="col-md-3 boxfot">
                <h6 class="title">{{ __('frontstaticword.Contactus') }}</h6>
                <div class="textcontact">
                    <a href="mailto:">
                        <i class="fas fa-envelope">
                        </i>info@arabie.live</a>
                </div>
                {{--                <form class="sendemail" method="POST" action="#">--}}
                {{--                    <input class="form-control" type="text" name="" value="" placeholder="Your email address">--}}
                {{--                    <button class="fas fa-arrow-alt-circle-right" type="submit"></button>--}}
                {{--                </form>--}}
            </div>
        </div>
        <div class="copyright">
            <p>{{ __('frontstaticword.copyright') }}</p>
        </div>
    </div>
    {{--    <a class="scrollToTop bottom" href="#"><i class="fas fa-chevron-up"></i>           </a>--}}
</footer>
<!--End Footer-->

<script src="/frontAssets/js/jquery.js"></script>
<script src="/frontAssets/js/popper.min.js"></script>
<script src="/frontAssets/js/bootstrap.min.js"></script>
<script src="/frontAssets/js/jquery-steps.js"></script>
<script src="/frontAssets/js/jquery.validate.js"></script>
<script src="/frontAssets/js/intlTelInput.js"></script>
<script src="/frontAssets/js/imageuploadify.min.js"></script>
<script src="/frontAssets/js/chosen.proto.js"></script>
<script src="/frontAssets/js/jquery-price.js"></script>
<script src="/frontAssets/js/easySelect.js"></script>
<script src="/frontAssets/js/stickySidebar.js"></script>
<script src="/frontAssets/js/slick.js"></script>
<script src="/frontAssets/js/moment-with-locales.min.js"></script>
<script src="/frontAssets/js/jquery.touchSwipe.min.js"></script>
<script src="/frontAssets/js/jquery-calendar.min.js"></script>
<script src="/frontAssets/js/jquery.fancybox.min.js"></script>

<script src="/frontAssets/js/plugin.js"> </script>
<script src="/frontAssets/js/jquery-pseudo-ripple.js"></script>

<script src="/frontAssets/js/jquery-nao-calendar.js"></script>

@yield('footerAssets')


