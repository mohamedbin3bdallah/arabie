@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.UserProfile'))

@section('pageContent')

<div class="menubab">
    <div class="container">
        <nav class="setting-menu">
            <a href="{{route('myLessons.show',Auth::User()->id)}}">{{ __('frontstaticword.MyLessons') }}</a>
            <a href="{{route('myTeachers.show',Auth::User()->id)}}">{{ __('frontstaticword.MyTutors') }}</a>
            <a class="active"
                href="{{route('profile.show',Auth::User()->id)}}">{{ __('frontstaticword.UserProfile') }}</a>
        </nav>
    </div>
</div>

<section class="step-sign">
    @include('admin.message')
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="item-1-tab" data-toggle="tab" href="#item-1" role="tab"
                    aria-controls="item-1" aria-selected="true">{{ __('frontstaticword.Account') }}</a></li>
            <li class="nav-item"><a class="nav-link" id="item-2-tab" data-toggle="tab" href="#item-2" role="tab"
                    aria-controls="item-2" aria-selected="false">{{ __('frontstaticword.Email') }}</a></li>
            <li class="nav-item"><a class="nav-link" id="item-3-tab" data-toggle="tab" href="#item-3" role="tab"
                    aria-controls="item-3" aria-selected="false">{{ __('frontstaticword.Password') }}</a></li>
            {{--                <li class="nav-item"><a class="nav-link" id="item-4-tab" data-toggle="tab" href="#item-4" role="tab" aria-controls="item-4" aria-selected="false">{{ __('paymentMethod') }}</a>
            </li>--}}
            <li class="nav-item"><a class="nav-link" id="item-5-tab" data-toggle="tab" href="#item-5" role="tab"
                    aria-controls="item-5" aria-selected="false">{{ __('frontstaticword.paymentHistory') }}</a></li>
            <li class="nav-item"><a class="nav-link" id="item-6-tab" data-toggle="tab" href="#item-6" role="tab"
                    aria-controls="item-6" aria-selected="false">{{ __('frontstaticword.autoConfirmation') }}</a></li>
            {{--                <li class="nav-item"><a class="nav-link" id="item-7-tab" data-toggle="tab" href="#item-7" role="tab" aria-controls="item-7" aria-selected="false">{{ __('calender') }}</a>
            </li>--}}
            <li class="nav-item"><a class="nav-link" id="item-8-tab" data-toggle="tab" href="#item-8" role="tab"
                    aria-controls="item-8" aria-selected="false">{{ __('frontstaticword.Notifications') }}</a></li>
        </ul>
        <form action="/edit/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="item-1" role="tabpanel" aria-labelledby="item-1-tab">


                    <div class="row">
                        <div class="col-sm-10 offset-sm-1 prin-item">
                            <h2 class="title">{{ __('frontstaticword.profileImage') }}</h2>
                            <div class="row">
                                <div class="col-sm-3 item-tab">
                                    <div class="imgcent">
                                        @if(Auth::User()->user_img != null || Auth::User()->user_img !='')

                                        <img class="img_prev"
                                            src="{{ url('/images/user_img/'.Auth::User()->user_img) }}" alt="" title="">

                                        @else

                                        <img class="img_prev" src="{{ asset('images/default/user.jpg')}}" alt=""
                                            title="">

                                        @endif
                                        <label class="file-bro">{{ __('frontstaticword.uploadPhoto') }}
                                            <input type="file" accept=".jpg,.png,.jpeg" name="user_img"
                                                onchange="readURL(this);" style="display: none;">
                                        </label>
                                        @if ($errors->has('user_img'))

                                        <span class="error">
                                            <strong>{{ $errors->first('user_img') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <p class="textsacand"><i class="fas fa-info-circle"></i>
                                        {{ __('frontstaticword.imageFormatCondition') }}</p>
                                </div>
                                <div class="col-sm-8 offset-sm-1 item-tab2">

                                    <div class="row">
                                        <div class="col-sm-6 fild">
                                            <input class="form-control" type="text"
                                                placeholder="{{ __('frontstaticword.enter_your_fname') }}"
                                                name="fname" autocomplete="off" value="{{ $orders->fname }}">
                                            <label class="floating-label">{{ __('frontstaticword.fname') }}</label>
                                            @if ($errors->has('fname'))

                                            <span class="error">
                                                <strong>{{ $errors->first('fname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 fild">
                                            <input class="form-control" type="text"
                                                placeholder="{{ __('frontstaticword.enter_your_lname') }}"
                                                name="lname" autocomplete="off" value="{{ $orders->lname }}">
                                            <label class="floating-label">{{ __('frontstaticword.lname') }}</label>
                                            @if ($errors->has('lname'))

                                            <span class="error">
                                                <strong>{{ $errors->first('lname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                                            <select class="form-control required" name="country_id" autocomplete="off" autofocus
                                                    required>
                                                <option> </option>
                                                @foreach($countries as $country)
                                                    @if(Auth::User()->country_id == $country->id))
                                                    <option selected value="{{$country->id}}">{{$country->name}}</option>
                                                    @endif
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                            <label class="floating-label">{{ __('frontstaticword.CountryOfOrigin') }}</label>
                                        </div>
                                        <div class="col-sm-12 fild">
                                            <input class="form-control mobile-number" type="text"
                                                placeholder="{{ __('frontstaticword.enter_your_mobile').' ('.__('frontstaticword.optional').')' }}" name="mobile" autocomplete="off"
                                                value="{{$orders->mobile}}"
                                                title="{{ __('frontstaticword.enter_your_mobile_title') }}">
                                        </div>
                                        @if ($errors->has('mobile'))

                                            <span class="error">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                            @endif
                                        <div class="col-sm-12 fild"> <i class="fas fa-chevron-down iconsel"></i>
                                            <select class="form-control " name="time_zone_id" autocomplete="off"
                                                autofocus>
                                                <option> </option>
                                                @foreach($timeZones as $timeZone)
                                                <option value="{{$timeZone->id}}" @if($orders->time_zone_id
                                                    ==$timeZone->id) selected @endif>{{ $timeZone->time_zone_name }}
                                                    ({{ $timeZone->time }})</option>
                                                @endforeach

                                            </select>
                                            <label class="floating-label">{{ __('frontstaticword.timeZone') }}</label>
                                            @if ($errors->has('time_zone_id'))

                                            <span class="error">
                                                <strong>{{ $errors->first('time_zone_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- <h3 class="title siza mt-5">Social Network</h3>
                                    <ul class="social">
                                        <li><span> <img src="/frontAssets/images/facebook.png" alt="" title="">
                                                @if(auth()->user()->facebook_id == null)
                                            </span>Not connected to Facebook account <a
                                                href="{{ url('/auth/facebook/user') }}">Connect </a>
                                            @else
                                            </span>Connected to Facebook account <a
                                                href="/facebookDisconnect/{{auth()->id()}}">Disconnect </a>
                                            @endif
                                        </li>
                                        @if(auth()->user()->google_id == null)
                                        <li> <span><img src="/frontAssets/images/google.png" alt="" title=""> </span>Not
                                            Connected to google account <a href="{{ url('/auth/google/user') }}">Connect
                                            </a></li>
                                        @else
                                        <li> <span><img src="/frontAssets/images/google.png" alt="" title="">
                                            </span>Connected <a href="/googleDisconnect/{{auth()->id()}}">Disconnect
                                            </a></li>
                                        @endif

                                    </ul> --}}
                                </div>
                            </div>
                            <div class="bot-all">
                                <button class="bottom" type="submit">{{ __('frontstaticword.saveSettings') }}</button>
                                {{--                                    <a class="bottom last-bot" href="#delete" data-toggle="modal">{{ __('frontstaticword.deleteMyAccount') }}</a>--}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="item-2" role="tabpanel" aria-labelledby="item-2-tab">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1 prin-item">
                            <h2 class="title">{{ __('frontstaticword.Email') }}</h2>
                            <div class="row">
                                <div class="col-sm-8 item-tab2">
                                    <div class="row">
                                        <div class="col-sm-12 fild">
                                            <input class="form-control" type="email" placeholder="example@gmail.com"
                                                name="email" autocomplete="off" value="{{ $orders->email }}" readonly>
                                            <label class="floating-label">{{ __('frontstaticword.Email') }}</label>
                                            @if ($errors->has('email'))

                                            <span class="error">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bot-all">
                                <button class="bottom" type="submit">{{ __('frontstaticword.saveSettings') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="item-3" role="tabpanel" aria-labelledby="item-3-tab">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1 prin-item">
                            <h2 class="title">{{ __('frontstaticword.changePassword') }}</h2>
                            <div class="row">
                                <div class="col-sm-8 item-tab2">
                                    <div class="row">
                                        <div class="col-sm-12 fild">
                                            <input class="form-control" type="password"
                                                placeholder="{{ __('frontstaticword.enter_your_password') }}" name="oldPassword" autocomplete="off"
                                                autofocus>
                                            <label class="floating-label">{{ __('frontstaticword.current') }}
                                                {{ __('frontstaticword.Password') }}</label><a class="forget"
                                                href="/password/reset">{{ __('frontstaticword.ForgotPassword') }}</a>
                                            @if ($errors->has('oldPassword'))

                                            <span class="error">
                                                <strong>{{ $errors->first('oldPassword') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 fild">
                                            <input class="form-control" type="password"
                                                placeholder="{{ __('frontstaticword.enter_a_password') }}"
                                                name="password" autocomplete="off" autofocus>
                                            <label class="floating-label">{{ __('frontstaticword.Password') }}</label>
                                            @if ($errors->has('password'))
                                            <span class="error">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 fild">
                                            <input class="form-control" type="password"
                                                placeholder="{{ __('frontstaticword.enter_confirm_password') }}"
                                                name="passwordConfirmation" autocomplete="off" autofocus>
                                            <label  class="floating-label">{{ __('frontstaticword.ConfirmPassword') }}</label>
                                            @if ($errors->has('passwordConfirmation'))
                                            <span class="error">
                                                <strong>{{ $errors->first('passwordConfirmation') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bot-all">
                                <button class="bottom" type="submit">{{ __('frontstaticword.saveSettings') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="tab-pane fade" id="item-4" role="tabpanel" aria-labelledby="item-4-tab">--}}
                {{--<form action="#">--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-10 offset-sm-1 prin-item">--}}
                {{--<h2 class="title">Payment Methods</h2>--}}
                {{--<h3 class="title siza mt-5">Save a card</h3>--}}
                {{--<p class="textsacand"><i class="fas fa-info-circle"></i>  Make fast and easy payments. Save a card to use refills and keep weekly lessons reserved automatically.<br/>Payment info is encrypted and stored securely by Braintree, a PayPal service.</p>--}}
                {{--<ul class="pay-card">--}}
                {{--<li><img src="assets/images/pay-2.jpg" alt="" title=""></li>--}}
                {{--<li><img src="assets/images/pay-1.jpg" alt="" title=""></li>--}}
                {{--</ul>--}}
                {{--<div class="bot-all">--}}
                {{--<button class="bottom" href="#payment" data-toggle="modal" type="submit">Save a card</button>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<!--div.row--}}
                {{--div.col-sm-10.offset-sm-1.prin-item--}}
                {{--h2.title Payment Card--}}
                {{--p.textsacand.mt-4 <i class="fas fa-info-circle"></i>  Make fast and easy payments. Save a card to use refills and keep weekly lessons reserved automatically.<br/>Payment info is encrypted and stored securely by Braintree, a PayPal service.--}}
                {{--div.card-img <img src="assets/images/card-img.png" alt="" title="">--}}
                {{--div.bot-all.mb-2--}}
                {{--button(class="bottom" type="submit") Change Card--}}
                {{--a(class="bottom last-bot" href="#delete2" data-toggle="modal") Delete Card--}}
                {{--h3.title.mt-5 Refils--}}
                {{--h4.title.siza Keep your weekly lessons reserved--}}
                {{--p.textsacand.mt-4 <i class="fas fa-info-circle"></i>  Make fast and easy payments. Save a card to use refills and keep weekly lessons reserved automatically.<br/>Payment info is encrypted and stored securely by Braintree, a PayPal service.--}}

                {{--div.sec-tutor--}}
                {{--div.tutor--}}
                {{--div.row--}}
                {{--div.col-sm-7.item-tutor--}}
                {{--h5.title.siza Tutor--}}
                {{--div.tutor-img--}}
                {{--img(src='assets/images/profile-1.png' alt="" title="")--}}
                {{--div.comtent-tutor--}}
                {{--h5.title Marwan Ahmed--}}
                {{--span Refill Off--}}
                {{--div.col-sm-5.item-tutor--}}
                {{--h5.title.siza Refil--}}
                {{--div.row--}}
                {{--div.col-sm-12.fild--}}
                {{--i(class="fas fa-chevron-down iconsel")--}}
                {{--select(class="form-control " name="zone" autocomplete="off" autofocus )--}}
                {{--option--}}
                {{--option Refill Off--}}
                {{--option Refill Off--}}
                {{--option Refill Off--}}
                {{--label.floating-label Refill--}}
                {{--div.tutor--}}
                {{--div.row--}}
                {{--div.col-sm-7.item-tutor--}}
                {{--div.tutor-img--}}
                {{--img(src='assets/images/profile-1.png' alt="" title="")--}}
                {{--div.comtent-tutor--}}
                {{--h5.title Marwan Ahmed--}}
                {{--span Refill Off--}}
                {{--div.col-sm-5.item-tutor--}}
                {{--div.row--}}
                {{--div.col-sm-12.fild--}}
                {{--i(class="fas fa-chevron-down iconsel")--}}
                {{--select(class="form-control " name="zone" autocomplete="off" autofocus )--}}
                {{--option--}}
                {{--option Refill Off--}}
                {{--option Refill Off--}}
                {{--option Refill Off--}}
                {{--label.floating-label Refill--}}
                {{---->--}}
                {{--</form>--}}
                {{--</div>--}}
                <div class="tab-pane fade" id="item-5" role="tabpanel" aria-labelledby="item-5-tab">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1 prin-item">
                            <h2 class="title">{{ __('frontstaticword.paymentHistory') }}
                                {{--<a class="biling" href="#biling" data-toggle="modal">Update biling info </a>--}}
                            </h2>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th> {{ __('frontstaticword.date_and_time') }} </th>
                                        <th> {{ __('frontstaticword.hours') }}</th>
                                        <th> {{ __('frontstaticword.tutor') }}</th>
                                        <th> <a href="#">{{ __('frontstaticword.download_all') }}</a></th>
                                    </tr>
                                    {{--<tr>--}}
                                    {{--<td> 11/05/2020 9:00 AM</td>--}}
                                    {{--<td> 5</td>--}}
                                    {{--<td> Marwan Ahmed</td>--}}
                                    {{--<td> <a href="#">Get Receipt</a></td>--}}
                                    {{--</tr>--}}

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="item-6" role="tabpanel" aria-labelledby="item-6-tab">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1 prin-item">
                            <h2 class="title">{{ __('frontstaticword.lesson_autoconfirmation') }}</h2>
                            <div class="row">
                                <div class="col-sm-8 item-tab2">
                                    <p class="textsacand mt-4"><i class="fas fa-info-circle"></i> 
										{{ __('frontstaticword.student_myprofile_text_1') }}
                                        <br /><br />
										{{ __('frontstaticword.student_myprofile_text_2') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="tab-pane fade" id="item-7" role="tabpanel" aria-labelledby="item-7-tab">--}}
                {{--<form action="#"></form>--}}
                {{--<!--div.row--}}
                {{--div.col-sm-10.offset-sm-1.prin-item--}}
                {{--h2.title Google Calendar--}}
                {{--div.row--}}
                {{--div.col-sm-8.item-tab2--}}
                {{--ul.social-item--}}
                {{--li--}}
                {{--span <img src="assets/images/google.png" alt="" title="">--}}
                {{--| Connect your Google Calendar and synchronize all your Preply lessons with your personal schedule--}}
                {{--div.bot-all--}}
                {{--button(class="bottom" type="submit") Connect Google Calendar--}}
                {{---->--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-10 offset-sm-1 prin-item">--}}
                {{--<h2 class="title">Google Calendar</h2>--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-12 item-tab2">--}}
                {{--<ul class="social-item">--}}
                {{--<li> <span><img src="assets/images/google.png" alt="" title=""> </span> Currently connected account<br/>menna22magdy@gmail.com  </li>--}}
                {{--</ul>--}}
                {{--<div class="bot-all">--}}
                {{--<button class="bottom calen" type="submit">Disconnect Google Calendar</button>--}}
                {{--</div>--}}
                {{--<div class="tutor calendar">--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-6 item-tutor">--}}
                {{--<h5 class="title siza">Add lessons to calendar</h5>--}}
                {{--<p class="textsacand"><i class="fas fa-info-circle"></i>  Use this setting to automatically add lessons to your connected calendar.</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 fild offset-sm-2"> <i class="fas fa-chevron-down iconsel"></i>--}}
                {{--<select class="form-control " name="zone" autocomplete="off" autofocus >--}}
                {{--<option> </option>--}}
                {{--<option>mennamagdy@gmail.com</option>--}}
                {{--<option>mennamagdy@gmail.com</option>--}}
                {{--<option>mennamagdy@gmail.com</option>--}}
                {{--</select>--}}
                {{--<label class="floating-label">Email </label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="tutor calendar">--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-6 item-tutor">--}}
                {{--<h5 class="title siza">Check calendars for conflict</h5>--}}
                {{--<p class="textsacand"><i class="fas fa-info-circle"></i>  Use this setting to automatically add lessons to your connected calendar.</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 fild offset-sm-2">--}}
                {{--<label class="che-box">--}}
                {{--<input type="checkbox" name="checkbox"><span class="label-text">mennamagdy@gmail.com</span>--}}
                {{--</label>--}}
                {{--<label class="che-box">--}}
                {{--<input type="checkbox" name="checkbox"><span class="label-text">Contacts</span>--}}
                {{--</label>--}}
                {{--<label class="che-box">--}}
                {{--<input type="checkbox" name="checkbox"><span class="label-text">Holidays in Egypt</span>--}}
                {{--</label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="tutor calendar">--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-6 item-tutor">--}}
                {{--<h5 class="title siza">Remind me before a lesson</h5>--}}
                {{--<p class="textsacand"><i class="fas fa-info-circle"></i>  Use this setting to automatically add lessons to your connected calendar.</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 fild offset-sm-2">--}}
                {{--<label class="che-box">--}}
                {{--<input type="radio" name="radio"><span class="label-text">No notification</span>--}}
                {{--</label>--}}
                {{--<label class="che-box">--}}
                {{--<input type="radio" name="radio"><span class="label-text">15 min before a lesson</span>--}}
                {{--</label>--}}
                {{--<label class="che-box">--}}
                {{--<input type="radio" name="radio"><span class="label-text">60 min before a lesson</span>--}}
                {{--</label>--}}
                {{--<label class="che-box">--}}
                {{--<input type="radio" name="radio"><span class="label-text">24 hours before a lesson</span>--}}
                {{--</label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="bot-all">--}}
                {{--<button class="bottom" type="submit">Save Settings</button>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="tab-pane fade" id="item-8" role="tabpanel" aria-labelledby="item-8-tab">
                    <div class="row">
                        <div class="col-sm-12 prin-item">
                            <h2 class="title">{{ __('frontstaticword.notification_center') }}</h2>
                            <div class="check-notif">
                                <h3 class="title siza">{{ __('frontstaticword.email_notifications') }}</h3>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 1, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[0]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[0]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[0]->name.'_text') }}</small>
                                </label>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 2, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[1]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[1]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[1]->name.'_text') }}</small>
                                </label>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 3, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[2]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[2]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[2]->name.'_text') }}</small>
                                </label>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 4, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[3]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[3]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[3]->name.'_text') }}</small>
                                </label>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 5, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[4]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[4]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[4]->name.'_text') }}</small>
                                </label>
                            </div>
                            <div class="check-notif">
                                <h3 class="title siza">{{ __('frontstaticword.sms_notifications') }}</h3>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 6, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[5]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[5]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[5]->name.'_text') }}</small>
                                </label>
                            </div>
                            <div class="check-notif">
                                <h3 class="title siza">{{ __('frontstaticword.arabi_insights') }}</h3>
                                <label class="che-box">
                                    <input type="checkbox" @foreach($studentNotificationsSettings as
                                        $studentNotificationsSetting)@if(in_array($studentNotificationsSetting->type_id
                                    == 7, array($studentNotificationsSetting))) checked @endif @endforeach
                                    name="notification[]" value="{{$notificationTypes[6]->id}}"><span
                                        class="label-text">{{ __('frontstaticword.'.$notificationTypes[6]->name)}}</span><small>{{ __('frontstaticword.'.$notificationTypes[6]->name.'_text') }}</small>
                                </label>
                            </div>
                            <div class="bot-all">
                                <button class="bottom" type="submit">{{ __('frontstaticword.saveSettings') }}</button>
                                <a class="bottom last-bot" href="/student/Unsubscribe">{{ __('frontstaticword.unsubscribe_them_all') }} </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>
<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deleting">
            <div class="pop-det">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#000"></path>
                    </svg>
                </button>
                <h3 class="title">{{ __('frontstaticword.delete_account') }}</h3>
                <p class="mar-text">{{ __('frontstaticword.delete_account_warning') }} </p>
                <form action="#">
                    <div class="row">
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="email" placeholder="{{ __('frontstaticword.enter_your_email') }}" name="Email"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.Email') }}</label>
                        </div>
                    </div>
                    <div class="fild bot-de">
                        <button class="bottom" type="submit">{{ __('frontstaticword.Delete') }}</button><a class="bottom" href="#"
                            data-dismiss="modal">{{ __('frontstaticword.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="payment" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deleting">
            <div class="pop-det">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#000"></path>
                    </svg>
                </button>
                <h3 class="title">{{ __('frontstaticword.save_a_payment_card') }}</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="number" placeholder="Enter card number" name="number"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.card_number') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="date" placeholder="date" name="date" autocomplete="off"
                                autofocus>
                            <label class="floating-label">{{ __('frontstaticword.expiration_date') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="date" placeholder="date" name="date" autocomplete="off"
                                autofocus>
                            <label class="floating-label">{{ __('frontstaticword.cvv') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <p class="textmap linbox m-0"><i class="fas fa-unlock-alt"></i> {{ __('frontstaticword.save_a_payment_card_text') }}</p>
                        </div>
                    </div>
                    <div class="fild bot-de bot-card">
                        <button class="bottom" type="submit">{{ __('frontstaticword.save_a_card') }}</button><a class="bottom" href="#"
                            data-dismiss="modal">{{ __('frontstaticword.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deleting">
            <div class="pop-det">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#000"></path>
                    </svg>
                </button>
                <h3 class="title">{{ __('frontstaticword.remove_card') }}</h3>
                <p class="textsacand mt-5 mb-5"><i class="fas fa-info-circle"></i> {{ __('frontstaticword.remove_card_text') }}</p>
                <form action="#">
                    <div class="fild bot-de bot-card">
                        <button class="bottom" type="submit">{{ __('frontstaticword.cancel') }}</button><a class="bottom" href="#">{{ __('frontstaticword.remove_card') }} </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="biling" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deleting">
            <div class="pop-det">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#000"></path>
                    </svg>
                </button>
                <h3 class="title">{{ __('frontstaticword.update_billing_info') }}</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" placeholder="Enter Name" name="Name"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.student_name') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" placeholder="Enter Company Name" name="CompanyName"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.company_name') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="number" placeholder="Number" name="VatNumber"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.vat_number') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" placeholder="Address" name="Address"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.address_line').' 1' }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" placeholder="Address" name="Address"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.address_line').' 2' }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" placeholder="Address" name="Address"
                                autocomplete="off" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.address_line').' 3' }}</label>
                        </div>
                    </div>
                    <div class="fild bot-de bot-card">
                        <button class="bottom" type="submit">{{ __('frontstaticword.update') }}</button><a class="bottom" href="#"
                            data-dismiss="modal">{{ __('frontstaticword.cancel') }} </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
