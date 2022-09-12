@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.MyTutors'))

@section('pageContent')
    <div class="menubab">
        <div class="container">
            <nav class="setting-menu">
                <a href="{{route('myLessons.show',Auth::User()->id)}}">{{ __('frontstaticword.MyLessons') }}</a>
                <a class="active" href="{{route('myTeachers.show',Auth::User()->id)}}">{{ __('frontstaticword.MyTutors') }}</a>
                <a href="{{route('profile.show',Auth::User()->id)}}">{{ __('frontstaticword.UserProfile') }}</a>
            </nav>
        </div>
    </div>
<section class="my-teachers">
    <div class="container">
        <h2 class="title">{{ __('frontstaticword.MyTutors') }}</h2>
        <div class="row">
            <div class="col-sm-8 teach-item">
                <form action="/myteachers/{{auth()->id()}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 fild">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="current-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="true">{{ __('frontstaticword.current') }}</a></li>
                                <li class="nav-item"><a class="nav-link" id="favourites-tab" data-toggle="tab" href="#favourites" role="tab" aria-controls="favourites" aria-selected="false">{{ __('frontstaticword.favourites') }}</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 fild">
                            <div class="formsearch">
                                <input class="form-control" type="text" name="name" id="searchBox" placeholder="{{ __('frontstaticword.search_by_name') }}">
                                <button class="bottom" id="filterTutors" type="submit" hidden="hidden">filter</button>

                            </div>
                        </div>
                    </div>
                </form>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="current-tab">
                        @foreach($currentTutors as $currentTutor)
                                <div class="item-les">
                            <div class="sec-les">
                                <div class="img"><img src="{{ url('/images/user_img/'.$currentTutor->user->user_img) }}" alt="Arabia" title="Arabia"></div>
                            </div>
                            <div class="sec-les">
                                <div class="minhead">
                                    <a href="/tutor/page/{{$currentTutor->id}}"><h3 class="title">{{$currentTutor->user->fname}} {{$currentTutor->user->lname[0]}}.</h3></a>
                                    <div class="flag" title="{{$currentTutor->country_name}}">  {{country($currentTutor->iso)->getEmoji()}}</div>
                                    <div class="safy">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.436" height="19.301" viewBox="0 0 16.436 19.301">
                                            <defs>
                                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ba9a74"></stop>
                                                    <stop offset="1" stop-color="#877456"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="surface1" transform="translate(0 0.001)">
                                                <path id="Path_28769" data-name="Path 28769" d="M124.119,158.457a3.677,3.677,0,1,0,3.677,3.677A3.682,3.682,0,0,0,124.119,158.457Zm2.183,2.985-2.635,2.635a.566.566,0,0,1-.8,0l-1.007-1.007a.566.566,0,1,1,.8-.8l.606.606,2.234-2.234a.566.566,0,0,1,.8.8Zm0,0" transform="translate(-115.901 -152.485)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_28770" data-name="Path 28770" d="M16.417,5.236V5.221c-.008-.185-.014-.382-.017-.6a2.046,2.046,0,0,0-1.926-2A7.938,7.938,0,0,1,9.07.34L9.058.328a1.235,1.235,0,0,0-1.679,0L7.366.34a7.939,7.939,0,0,1-5.4,2.277,2.045,2.045,0,0,0-1.926,2c0,.217-.009.413-.017.6v.035a20.918,20.918,0,0,0,.845,7.635A9.72,9.72,0,0,0,3.2,16.523a12.2,12.2,0,0,0,4.563,2.7,1.413,1.413,0,0,0,.187.051,1.381,1.381,0,0,0,.543,0,1.418,1.418,0,0,0,.188-.051,12.206,12.206,0,0,0,4.558-2.7,9.733,9.733,0,0,0,2.332-3.633A20.949,20.949,0,0,0,16.417,5.236Zm-8.2,9.224a4.81,4.81,0,1,1,4.81-4.81A4.815,4.815,0,0,1,8.218,14.46Zm0,0" transform="translate(0)" fill="url(#linear-gradient)"></path>
                                            </g>
                                        </svg>
                                    </div>
									<div class="recommendation">
                                        @if($currentTutor->recommendation)
											<i class="fas fa-lg fa-user-check" title="{{ __('adminstaticword.recommended') }}"></i>
										@else
											<i class="fas fa-lg fa-user" title="{{ __('adminstaticword.notrecommended') }}"></i>
										@endif
									</div>
                                    <ul class="rating">
                                        <li class="fas fa-star active"></li>
                                        <li class="fas fa-star active"></li>
                                        <li class="fas fa-star active"></li>
                                        <li class="fas fa-star active"></li>
                                    </ul>
                                </div>
                                <p class="prepaid">{{ __('frontstaticword.prepaid') }}
{{--                                    <span class="fas fa-question tooltiptext"><small>Hover over me Hover over me  Hover over me</small></span>--}}
                                </p>
                                <div class="hour">
                                    <p>1 {{ __('frontstaticword.hour') }}</p><span>{{ __('frontstaticword.trial') }}</span>
                                </div>
                                <!--p.textsacand No prepaid lessons-->
                            </div>
                            <div class="sec-les"><a class="view-profile" href="/tutor/page/{{$currentTutor->id}}">{{ __('frontstaticword.view_profile') }}</a>
                                <p class="prepaid">{{ __('frontstaticword.price_per_hour') }}</p><span class="text-price">{{$currentTutor->PricePerHour}}</span>
                            </div>
                            <div class="sec-les">
                                <div class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{ __('frontstaticword.actions') }}<span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="5.751" viewBox="0 0 11.808 6.751">
                            <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M12.094,15.963l4.465-4.468a.84.84,0,0,1,1.192,0,.851.851,0,0,1,0,1.2l-5.059,5.062a.842.842,0,0,1-1.164.025L6.434,12.693a.844.844,0,1,1,1.192-1.2Z" transform="translate(-6.188 -11.246)" fill="#fff"></path>
                          </svg></span></a>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="/tutor/page/{{$currentTutor->id}}"><i class="far fa-calendar-alt"></i> {{ __('frontstaticword.schedule') }}</a><a class="dropdown-item" href="#buy-hours{{$currentTutor->id}}" data-toggle="modal"><i class="fas fa-clock"></i> {{ __('frontstaticword.buy_hours') }}</a>
                                        <a class="dropdown-item sendmessage" href="#" record_id="{{$currentTutor->id}}" tname="{{$currentTutor->user->fname}} {{$currentTutor->user->lname}}" headline="{{$currentTutor->headline}}" timage="{{$currentTutor->user->user_img}}"  data-toggle="modal"><i class="fas fa-comment-alt"></i>{{ __('frontstaticword.send_message') }}</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="favourites" role="tabpanel" aria-labelledby="favourites-tab">
                        @foreach($favouriteTutors as $favouriteTutor)
                        <div class="item-les">
                            <div class="sec-les">
                                <a href="/tutor/page/{{$favouriteTutor->id}}"><div class="img"><img src="{{ url('/images/user_img/'.$favouriteTutor->user->user_img) }}" alt="Arabia" title="Arabia"></div></a>
                            </div>
                            <div class="sec-les">
                                <div class="minhead">
                                    <a href="/tutor/page/{{$favouriteTutor->id}}">
                                        <h3 class="title">{{$favouriteTutor->user->fname}} {{$favouriteTutor->user->lname[0]}}.</h3>
                                    </a>
                                    <div class="flag" title="{{$favouriteTutor->country_name}}">  {{country($favouriteTutor->iso)->getEmoji()}}</div>
                                    <div class="safy">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.436" height="19.301" viewBox="0 0 16.436 19.301">
                                            <defs>
                                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ba9a74"></stop>
                                                    <stop offset="1" stop-color="#877456"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="surface1" transform="translate(0 0.001)">
                                                <path id="Path_28769" data-name="Path 28769" d="M124.119,158.457a3.677,3.677,0,1,0,3.677,3.677A3.682,3.682,0,0,0,124.119,158.457Zm2.183,2.985-2.635,2.635a.566.566,0,0,1-.8,0l-1.007-1.007a.566.566,0,1,1,.8-.8l.606.606,2.234-2.234a.566.566,0,0,1,.8.8Zm0,0" transform="translate(-115.901 -152.485)" fill="url(#linear-gradient)"></path>
                                                <path id="Path_28770" data-name="Path 28770" d="M16.417,5.236V5.221c-.008-.185-.014-.382-.017-.6a2.046,2.046,0,0,0-1.926-2A7.938,7.938,0,0,1,9.07.34L9.058.328a1.235,1.235,0,0,0-1.679,0L7.366.34a7.939,7.939,0,0,1-5.4,2.277,2.045,2.045,0,0,0-1.926,2c0,.217-.009.413-.017.6v.035a20.918,20.918,0,0,0,.845,7.635A9.72,9.72,0,0,0,3.2,16.523a12.2,12.2,0,0,0,4.563,2.7,1.413,1.413,0,0,0,.187.051,1.381,1.381,0,0,0,.543,0,1.418,1.418,0,0,0,.188-.051,12.206,12.206,0,0,0,4.558-2.7,9.733,9.733,0,0,0,2.332-3.633A20.949,20.949,0,0,0,16.417,5.236Zm-8.2,9.224a4.81,4.81,0,1,1,4.81-4.81A4.815,4.815,0,0,1,8.218,14.46Zm0,0" transform="translate(0)" fill="url(#linear-gradient)"></path>
                                            </g>
                                        </svg>
                                    </div>
									<div class="recommendation">
                                        @if($favouriteTutor->recommendation)
											<i class="fas fa-lg fa-user-check" title="{{ __('adminstaticword.recommended') }}"></i>
										@else
											<i class="fas fa-lg fa-user" title="{{ __('adminstaticword.notrecommended') }}"></i>
										@endif
									</div>
                                    <ul class="rating">
                                        <li class="fas fa-star active"></li>
                                        <li class="fas fa-star active"></li>
                                        <li class="fas fa-star active"></li>
                                        <li class="fas fa-star active"></li>
                                    </ul>
                                </div>
                                <p class="prepaid">{{ __('frontstaticword.prepaid') }}
{{--                                    <span class="fas fa-question tooltiptext"><small>Hover over me Hover over me  Hover over me</small></span>--}}
                                </p>
                                <div class="hour">
                                    <p>1 {{ __('frontstaticword.hour') }}</p><span>{{ __('frontstaticword.trial') }}</span>
                                </div>
                                <!--p.textsacand No prepaid lessons-->
                            </div>
                            <div class="sec-les"><a class="view-profile" href="/tutor/page/{{$favouriteTutor->id}}">{{ __('frontstaticword.view_profile') }}</a>
                                <p class="prepaid">{{ __('frontstaticword.price_per_hour') }}</p><span class="text-price">{{$favouriteTutor->PricePerHour}}</span>
                            </div>
                            <div class="sec-les">
                                <div class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{ __('frontstaticword.actions') }}<span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="5.751" viewBox="0 0 11.808 6.751">
                            <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M12.094,15.963l4.465-4.468a.84.84,0,0,1,1.192,0,.851.851,0,0,1,0,1.2l-5.059,5.062a.842.842,0,0,1-1.164.025L6.434,12.693a.844.844,0,1,1,1.192-1.2Z" transform="translate(-6.188 -11.246)" fill="#fff"></path>
                          </svg></span></a>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="/tutor/page/{{$favouriteTutor->id}}"><i class="far fa-calendar-alt"></i> {{ __('frontstaticword.schedule') }}</a><a class="dropdown-item" href="#buy-hours{{$favouriteTutor->id}}" data-toggle="modal"><i class="fas fa-clock"></i> {{ __('frontstaticword.buy_hours') }}</a>
                                        <a class="dropdown-item sendmessage" href="#" record_id="{{$favouriteTutor->id}}" tname="{{$favouriteTutor->user->fname}} {{$favouriteTutor->user->lname}}" headline="{{$favouriteTutor->headline}}" timage="{{$favouriteTutor->user->user_img}}"  data-toggle="modal"><i class="fas fa-comment-alt"></i>{{ __('frontstaticword.send_message') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-4 teach-item">
                <div class="item-datals">
                    <div class="mintitle">
                        <h4>{{ __('frontstaticword.tutors_list') }}</h4>
                        {{--<a href="#transfer-credit" data-toggle="modal"><i class="fas fa-exchange-alt"></i> Transfer Credit</a>--}}
                    </div>
                    <div class="images">
                        @foreach($randomTutors as $randomTutor)
                            <a style="color: #af8b62 !important;" href="/tutor/page/{{$randomTutor->id}}">
                        <img src="{{ url('/images/user_img/'.$randomTutor->user->user_img) }}" alt="Arabia" title="{{$randomTutor->user->fname}} {{$randomTutor->user->lname[0]}}.">
                            </a>
                        @endforeach
                    </div>
                    <div class="find-tutors"><a href="/find/tutor">{{ __('frontstaticword.find_more_tutors') }}</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="transfer-credit" role="dialog">
    <div class="modal-dialog popreview">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal">
                <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#000"></path>
                </svg>
            </button>
            <div class="text-center">
                <h3 class="title">Transfer credits</h3>
                <p class="mt-2">Your paid credit will be converted to lesson hours according to the new tutor’s price</p>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                        <select class="form-control" name="zone" autocomplete="off" required>
                            <option> </option>
                            <option>Choose tutuor</option>
                            <option>Choose tutuor</option>
                            <option>Choose tutuor</option>
                        </select>
                        <label class="floating-label">Transfer credit from </label>
                    </div>
                    <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                        <select class="form-control" name="zone" autocomplete="off" required>
                            <option> </option>
                            <option>Choose a TUtor</option>
                            <option>Choose a TUtor</option>
                            <option>Choose a TUtor</option>
                        </select>
                        <label class="floating-label">Add hours with</label>
                    </div>
                    <!--div.col-sm-12.fild
                    input(type="text" class="form-control" placeholder="Enter name" name="Tutorname"  autocomplete="off" autofocus required )
                    label.floating-label Tutor name
                    -->
                    <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                        <select class="form-control" name="Reson" autocomplete="off" required>
                            <option> </option>
                            <option>Choose</option>
                            <option>Choose</option>
                            <option>Choose</option>
                        </select>
                        <label class="floating-label">Reson</label>
                    </div>
                </div>
                <p class="textsacand mt-4"><i class="fas fa-info-circle"></i>  Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, </p>
                <div class="fild bot-de bot-card">
                    <button class="bottom" type="submit">Confirm</button><a class="bottom" href="#" data-dismiss="modal">Cancel </a>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="modal fade" id="sendmessage" role="dialog">
        <div class="modal-dialog popreview" style="margin-top: 100px;">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#000"></path>
                    </svg>
                </button>
                <div class="photo"> <img src="" alt="" title="" id="timage"></div>
                <div class="text-center mt-4">
                    <h3 class="title" id="tutorName"></h3>
                    <p class="mt-2" id="headline"></p>
                </div>
                <form action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6 fild" @if(isset(Auth::user()->fname) && Auth::user()->fname !='') hidden @endif>
                            <input class="form-control" type="text" placeholder="{{ __('frontstaticword.enter_your_fname') }}" name="fname" value="@if(isset(Auth::user()->id)){{ Auth::user()->fname }}@endif" autocomplete="off" autofocus required>
                            <label class="floating-label">{{ __('frontstaticword.fname') }}</label>
                        </div>

                        <div class="col-sm-6 fild" @if(isset(Auth::user()->lname) && Auth::user()->lname !='') hidden @endif>
                            <input class="form-control" type="text" placeholder="{{ __('frontstaticword.enter_your_lname') }}" name="lname" value="@if(isset(Auth::user()->id)){{ Auth::user()->lname }}@endif" autocomplete="off" autofocus required>
                            <label class="floating-label">{{ __('frontstaticword.lname') }}</label>
                        </div>
                        <div class="col-sm-12 fild" @if(isset(Auth::user()->email) && Auth::user()->email !='') hidden @endif>
                            <input class="form-control" type="email" placeholder="{{ __('frontstaticword.enter_your_email') }}" name="email" value="@if(isset(Auth::user()->id)){{ Auth::user()->email }}@endif" autocomplete="off" autofocus required>
                            <label class="floating-label">{{ __('frontstaticword.Email') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <textarea  maxlength="50" minlength="2" id="text"class="form-control" name="message" placeholder="{{ __('frontstaticword.writeYourMessage') }} …" autocomplete="off" autofocus="" required ></textarea>
                            <label class="floating-label">{{ __('frontstaticword.message') }}</label>
                        </div>

                        <input type="text" name="recipientId" id="recipientId"  readonly hidden>

                    </div>
                    <div class="fild bot-de bot-card">
                        <button class="bottom" type="submit" id="sendBottom">{{ __('frontstaticword.send') }}</button> <a class="bottom" href="#" data-dismiss="modal">{{ __('frontstaticword.cancel') }} </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach($currentTutors as $currentTutor)
    <div class="modal fade" id="buy-hours{{$currentTutor->id}}" role="dialog">
        <div class="modal-dialog buy-item">
            <div class="modal-content">
                <div class="pop-det">
                    <button class="close" type="button" data-dismiss="modal">
                        <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#000"></path>
                        </svg>
                    </button>
                    <div class="text-center">
                        <h3 class="title">{{ __('frontstaticword.myteachers_text_1') }} <br/>{{ __('frontstaticword.myteachers_text_2') }}</h3>
                    </div>
                    <div class="buyhours">
                        @foreach($packages as $package)
                            <form action="/student/package/cart/{{$currentTutor->id}}/{{$package->id}}" method="get">
                                @csrf
                                <input type="hidden" name="tutor_id" value="{{$currentTutor->id}}"/>
                                <input type="hidden" name="package_id" value="{{$package->id}}"/>

                                <div class="item-buyhours"><img src="/images/icons/{{$package->icon}}" alt="Arabia" title="Arabia">
                                    <h5 class="title">{{$package->name}}</h5>
                                    <div class="hours-text">
                                        <p>{{$package->numOfHours}}</p><span>{{ __('frontstaticword.hours') }}</span>
                                    </div>
                                    <p class="number">{{ ($currentTutor->PricePerHour - (($currentTutor->PricePerHour * $package->discountPercentage) / 100))}} $ {{ __('frontstaticword.per_hour') }}</p>
                                    <p class="green">{{ __('frontstaticword.you_save') }} {{ ($currentTutor->PricePerHour * $package->numOfHours) -(($currentTutor->PricePerHour - (($currentTutor->PricePerHour * $package->discountPercentage) / 100)) * $package->numOfHours)}} $</p>

                                    <button type="submit" class="bottom">{{ __('frontstaticword.choose') }} </button>
                                </div>
                            </form>
                        @endforeach
                    </div>
                    <div class="fild bot-de bot-card">
                        <p class="text-ho"><img src="/frontAssets/images/text-ho.png" alt="Arabia" title="Arabia"> {{ __('frontstaticword.myteachers_text_3') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @foreach($favouriteTutors as $favouriteTutor)
        <div class="modal fade" id="buy-hours{{$favouriteTutor->id}}" role="dialog">
            <div class="modal-dialog buy-item">
                <div class="modal-content">
                    <div class="pop-det">
                        <button class="close" type="button" data-dismiss="modal">
                            <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#000"></path>
                            </svg>
                        </button>
                        <div class="text-center">
                            <h3 class="title">{{ __('frontstaticword.myteachers_text_1') }} <br/>{{ __('frontstaticword.myteachers_text_2') }}</h3>
                        </div>
                        <div class="buyhours">
                            @foreach($packages as $package)
                                <form action="/student/package/cart/{{$favouriteTutor->id}}/{{$package->id}}" method="get">
                                    @csrf
                                    <input type="hidden" name="tutor_id" value="{{$favouriteTutor->id}}"/>
                                    <input type="hidden" name="package_id" value="{{$package->id}}"/>

                                    <div class="item-buyhours"><img src="/images/icons/{{$package->icon}}" alt="Arabia" title="Arabia">
                                        <h5 class="title">{{$package->name}}</h5>
                                        <div class="hours-text">
                                            <p>{{$package->numOfHours}}</p><span>{{ __('frontstaticword.hours') }}</span>
                                        </div>
                                        <p class="number">{{ ($favouriteTutor->PricePerHour - (($favouriteTutor->PricePerHour * $package->discountPercentage) / 100))}} $ {{ __('frontstaticword.per_hour') }}</p>
                                        <p class="green">{{ __('frontstaticword.you_save') }} {{ ($favouriteTutor->PricePerHour * $package->numOfHours) -(($favouriteTutor->PricePerHour - (($favouriteTutor->PricePerHour * $package->discountPercentage) / 100)) * $package->numOfHours)}} $</p>

                                        <button type="submit" class="bottom">{{ __('frontstaticword.choose') }} </button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <div class="fild bot-de bot-card">
                            <p class="text-ho"><img src="/frontAssets/images/text-ho.png" alt="Arabia" title="Arabia"> {{ __('frontstaticword.myteachers_text_3') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
@section('footerAssets')

<script>
(function($){
    $('#searchBox').on('change', function () {
        // alert('ssssssss')
        $("#filterTutors").click();

    })

    $('.sendmessage').on('click', function () {

        tutorName = $(this).attr('tname');
        headline = $(this).attr('headline');
        timage = $(this).attr('timage');
        record_id = $(this).attr('record_id');
        //alert(record_id);
        timage = "/images/user_img/" + timage;
        msg = ' ';
        $("#tutorName").html(tutorName);
        $("#headline").html(headline);
        $("#timage").attr("src",timage);
        $("#recipientId").val(record_id);
        $("#messageTextArea").val(msg);
        $('#sendmessage').modal('show');

    })
})(jQuery);
</script>

@endsection
