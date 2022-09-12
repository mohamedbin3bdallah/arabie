@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.my_calender'))

@section('pageContent')
    @include('admin.message')
	
    <div class="menubab">
        <div class="container">
            <nav class="setting-menu">
                <a class="active" href="/myCalendar/{{auth()->id()}}">{{ __('frontstaticword.my_calender') }}</a>
                <a href="/tutor/lessons/{{auth()->id()}}">{{ __('frontstaticword.MyLessons') }}</a>
                <a href="{{route('myStudents.show',Auth::User()->id)}}">{{ __('frontstaticword.MyStudents') }}</a>
                <a href="/statistics/{{auth()->id()}}">{{ __('frontstaticword.Statistics') }}</a>
                <a href="/tutor/profile">{{ __('frontstaticword.UserProfile') }}</a>
            </nav>
        </div>
    </div>
    <section class="calendar-teach">
        <div class="row">
            <div class="col-sm-3 leftbox">
                <div class="fild bot-de bot-card"><!--<a class="bottom" href="#cancel-lesson" data-toggle="modal">{{ __('frontstaticword.schedule_new_lesson') }}</a>--><a class="bottom" href="#add-time" data-toggle="modal">{{ __('frontstaticword.add_time_off') }}</a><a class="bottom" href="/availabilityTime/{{auth()->id()}}">{{ __('frontstaticword.set_up_availability') }}</a></div>
                <form class="formsearch" action="#" method="">
                    <input class="form-control" type="text" placeholder="{{ __('frontstaticword.search').' '.__('frontstaticword.Students') }}">
                </form>
                <div class="myCalendar"></div>
                <div class="tags-color">
                    <h4 class="title"> {{ __('frontstaticword.tags') }}</h4>
                    <ul class="all-color">
                        <li> <i class="icon green"></i>{{ __('frontstaticword.first_lesson') }}</li>
                        <li> <i class="icon shades"></i>{{ __('frontstaticword.single_lesson') }}</li>
                        <li> <i class="icon mov"></i>{{ __('frontstaticword.weekly_lesson') }}</li>
                        <li> <i class="icon orange"></i>{{ __('frontstaticword.time_off') }}</li>
                        {{-- <li> <i class="icon conve"> </i>{{ __('frontstaticword.google_calendar') }}</li> --}}
                        <li> <i class="icon planting"></i>{{ __('frontstaticword.confirmed_by_student') }}</li>
                        <li> <i class="icon silver"></i>{{ __('frontstaticword.not_confirmed_by_student') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9 rightbox">
                <div id="calendar"></div>
            </div>
        </div>
    </section>
    <script src="/frontAssets/js/jquery-pseudo-ripple.js"></script>
    <script src="/frontAssets/js/jquery-nao-calendar.js" select="js_file" lang="{{$current_lang}}"></script>
    <div class="modal fade" id="cancel-lesson" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content schedule-esson">
                <form method="post" enctype="multipart/form-data" action="/scheduleNewLesson/{{auth()->id()}}">
                    @csrf
                <div class="pop-det">
                    <button class="close" type="button" data-dismiss="modal">
                        <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#000"></path>
                        </svg>
                    </button>
                    <h3 class="title">{{ __('frontstaticword.schedule_new_lesson') }}</h3>
                    <ul class="nav-lesson"><a class="active" href="#">{{ __('frontstaticword.lesson') }}</a></ul>
                    <div class="timeall">
                        <div class="day">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.3" height="22.3" viewBox="0 0 22.3 22.3">
                                <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-2 -2)">
                                    <path id="Path_31784" data-name="Path 31784" d="M23.3,13.15A10.15,10.15,0,1,1,13.15,3,10.15,10.15,0,0,1,23.3,13.15Z" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    <path id="Path_31785" data-name="Path 31785" d="M18,9v6.09l4.06,2.03" transform="translate(-4.85 -1.94)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </g>
                            </svg>
{{--                            <p>Monday</p>--}}
                            <!--span October 8-->
                            <input class="form-control" type="date" value="October 8" placeholder="" name="date">
                        </div>
                        <div class="daytime">
                            <div class="flexinput">
                                <select class="form-control" name="from" required>
                                    <option>00:00</option>
                                    <option>01:00</option>
                                    <option>02:00</option>
                                    <option>03:00</option>
                                    <option>04:00</option>
                                    <option>05:00</option>
                                    <option>06:00</option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                    <option>21:00</option>
                                    <option>22:00</option>
                                    <option>23:00</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.329" height="10.568" viewBox="0 0 12.329 10.568">
                                    <path id="Icon_metro-arrow-right" data-name="Icon metro-arrow-right" d="M12.167,16.094l4.4-4.4a.881.881,0,0,0,0-1.245l-4.4-4.4a.881.881,0,1,0-1.245,1.245l2.9,2.9H5.379a.881.881,0,1,0,0,1.761h8.442l-2.9,2.9a.881.881,0,1,0,1.245,1.245Z" transform="translate(-4.499 -5.784)" fill="#747f92"></path>
                                </svg>
                                <select class="form-control" name="to" required>
                                    <option>00:00</option>
                                    <option>01:00</option>
                                    <option>02:00</option>
                                    <option>03:00</option>
                                    <option>04:00</option>
                                    <option>05:00</option>
                                    <option>06:00</option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                    <option>21:00</option>
                                    <option>22:00</option>
                                    <option>23:00</option>
                                </select>
                            </div>
{{--                            <span>Half an hour</span>--}}
                        </div>
                    </div>
                    <div class="timeall">
                        <div class="status">
                            <!--Shimaa-->
                           <svg id="refresh" xmlns="http://www.w3.org/2000/svg" width="17.6" height="17.6" viewBox="0 0 17.6 17.6">--}}
                               <g id="Group_6360" data-name="Group 6360" transform="translate(0.971)">
                                    <g id="Group_6359" data-name="Group 6359">
                                        <path id="Path_31787" data-name="Path 31787" d="M44.242,2.428a.687.687,0,0,0-.747.622l-.091,1a8.678,8.678,0,0,0-15.091.724.687.687,0,0,0,1.225.625,7.309,7.309,0,0,1,12.715-.606l-.98-.7a.687.687,0,1,0-.8,1.119l2.973,2.123a.688.688,0,0,0,1.084-.5l.334-3.662A.687.687,0,0,0,44.242,2.428Z" transform="translate(-28.237)" fill="#ba9a74"></path>
                                    </g>
                                </g>
                                <g id="Group_6362" data-name="Group 6362" transform="translate(0 10.138)">
                                    <g id="Group_6361" data-name="Group 6361">
                                        <path id="Path_31788" data-name="Path 31788" d="M16.255,296.677a.688.688,0,0,0-.925.3,7.309,7.309,0,0,1-12.715.606l.98.7a.688.688,0,0,0,.8-1.119l-2.973-2.123a.688.688,0,0,0-1.084.5L0,299.2a.687.687,0,1,0,1.369.125l.091-1a8.678,8.678,0,0,0,15.091-.724A.687.687,0,0,0,16.255,296.677Z" transform="translate(-0.001 -294.913)" fill="#ba9a74"></path>
                                    </g>
                                </g>
                            </svg>
                            <label class="che-box">
                                <input type="radio" name="type"><span class="label-text">{{ __('frontstaticword.single') }}</span>
                            </label>
                        </div>
{{--                        <div class="status">--}}
{{--                            <label class="che-box">--}}
{{--                                <input type="radio" name="radio"><span class="label-text">{{ __('frontstaticword.weekly') }}</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
                    </div><a class="timeall" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.439" height="19.437" viewBox="0 0 19.439 19.437">
                            <path id="add-group" d="M11.258,13.242a7.209,7.209,0,0,0-1.515-.808A3.865,3.865,0,0,0,11,9.885a5.715,5.715,0,0,1,7.247-.593.759.759,0,1,0,.869-1.245A7.217,7.217,0,0,0,17.6,7.238a3.872,3.872,0,1,0-5.213-.009q-.159.061-.316.13a7.21,7.21,0,0,0-1.337.768,3.872,3.872,0,1,0-6.212,4.292A7.3,7.3,0,0,0,.114,16.962a2.278,2.278,0,0,0,2.168,2.976H8.888a.759.759,0,0,0,0-1.519H2.283a.76.76,0,0,1-.723-.992,5.858,5.858,0,0,1,5.566-3.963,5.679,5.679,0,0,1,3.265,1.024.759.759,0,1,0,.869-1.245ZM15,2.019a2.354,2.354,0,1,1-2.354,2.354A2.356,2.356,0,0,1,15,2.019Zm-7.858,5.2A2.354,2.354,0,1,1,4.788,9.569,2.356,2.356,0,0,1,7.142,7.215Zm12.3,9.116a.759.759,0,0,1-.759.759H16.594v2.088a.759.759,0,1,1-1.519,0V17.09H12.988a.759.759,0,0,1,0-1.519h2.088V13.484a.759.759,0,0,1,1.519,0v2.088h2.088A.759.759,0,0,1,19.442,16.331Zm0,0" transform="translate(-0.003 -0.501)" fill="#ba9a74"></path>
                        </svg>
                        <p>{{ __('frontstaticword.select').' '.__('frontstaticword.student') }}</p>
                        </a>
                    <select class="form-control" name="student" required>
                        <option></option>
                        @foreach($myStudents as $student)
                        <option value="{{$student->id}}">{{$student->fname}} {{$student->lname}} </option>
                        @endforeach
                    </select>
                    <div class="fild bot-de bot-card">
                        <button class="bottom m-0" type="submit">{{ __('frontstaticword.schedule_lesson') }}</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-time" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content schedule-esson">
                <div class="pop-det">
                    <form method="post" action="/addTimeOff/{{auth()->id()}}" enctype="multipart/form-data">
                        @csrf
                    <button class="close" type="button" data-dismiss="modal">
                        <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#000"></path>
                        </svg>
                    </button>
                    <h3 class="title">{{ __('frontstaticword.add_time_off') }}</h3>
                    <!--<ul class="nav-lesson"><a href="#cancel-lesson" data-toggle="modal" data-dismiss="modal">{{ __('frontstaticword.lesson') }}</a><a class="active">{{ __('frontstaticword.time_off') }}</a></ul>-->
                    <div class="timeall">
                        <p class="textsacand m-0"><i class="fas fa-info-circle"></i>  {{ __('frontstaticword.add_time_off_text') }}</p>
                    </div>
                    <div class="timeall">
                        <label class="che-box stylefont">
                            <input type="checkbox" name="allDay" onclick="removeDiv();"><span class="label-text">{{ __('frontstaticword.all').' '.__('frontstaticword.day') }}</span>
                        </label>
                    </div>
                    <div class="timeall flex-bord">
                        <div class="day">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.3" height="22.3" viewBox="0 0 22.3 22.3">
                                <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-2 -2)">
                                    <path id="Path_31784" data-name="Path 31784" d="M23.3,13.15A10.15,10.15,0,1,1,13.15,3,10.15,10.15,0,0,1,23.3,13.15Z" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    <path id="Path_31785" data-name="Path 31785" d="M18,9v6.09l4.06,2.03" transform="translate(-4.85 -1.94)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </g>
                            </svg>
                            <p>{{ __('frontstaticword.start').' '.__('frontstaticword.Date') }}</p><span>
                                <input name="start_date" type="date" required>
                            </span>
                        </div>
                        <div class="daytime">
                            <p>{{ __('frontstaticword.end').' '.__('frontstaticword.Date') }}</p><span>
                                <input name="end_date" type="date" required>
                            </span>
                        </div>
                    </div>
                    <div class="timeall flex-bord selectedTime">
                        <div class="day">
                            <p>{{ __('frontstaticword.start').' '.__('frontstaticword.time') }}</p>
                                <select class="form-control" name="start_time" required>
                                    <option>00:00</option>
                                    <option>01:00</option>
                                    <option>02:00</option>
                                    <option>03:00</option>
                                    <option>04:00</option>
                                    <option>05:00</option>
                                    <option>06:00</option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                    <option>21:00</option>
                                    <option>22:00</option>
                                    <option>23:00</option>
                                </select>
                        </div>
                        <div class="daytime">
                            <p>{{ __('frontstaticword.end').' '.__('frontstaticword.time') }}</p>
                                <select class="form-control" name="end_time" required>
                                    <option>00:00</option>
                                    <option>01:00</option>
                                    <option>02:00</option>
                                    <option>03:00</option>
                                    <option>04:00</option>
                                    <option>05:00</option>
                                    <option>06:00</option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                    <option>21:00</option>
                                    <option>22:00</option>
                                    <option>23:00</option>
                                </select>
                        </div>
                        <div class="aps-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.133" height="35.4" viewBox="0 0 44.133 44.4">
                                <path id="Icon_ionic-ios-arrow-dropright-circle" data-name="Icon ionic-ios-arrow-dropright-circle" d="M3.375,25.575a22.067,22.067,0,1,0,22.067-22.2A22.13,22.13,0,0,0,3.375,25.575Zm25.939,0-8.689-8.656a2.077,2.077,0,0,1,0-2.914,2.047,2.047,0,0,1,2.9,0L33.642,24.219a2.067,2.067,0,0,1,.064,2.839L23.734,37.123a2.04,2.04,0,0,1-2.9.011,2.067,2.067,0,0,1,0-2.914Z" transform="translate(-3.375 -3.375)" fill="#747f92" opacity="0.7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 fild">
                            <input class="form-control" type="text" name="title" minlength="2" maxlength="50" autocomplete="off" required="" autofocus>
                            <label class="floating-label">{{ __('frontstaticword.title_visible_to_you') }}</label>
                        </div>
                        <div class="col-sm-12 fild">
                            <textarea class="form-control" name="message" minlength="2" maxlength="300" placeholder="{{ __('frontstaticword.type_a_message') }}" autocomplete="off" autofocus="" required=""></textarea>
                            <label class="floating-label">{{ __('frontstaticword.message') }}</label>
                        </div>
                    </div>
                    <div class="fild bot-de bot-card">
                        <button class="bottom m-0" type="submit">{{ __('frontstaticword.add_time_off') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footerAssets')

    <script>
function removeDiv() {
    document.getElementsByClassName('selectedTime')[0,1].setAttribute('class', 'hidden')
}
    </script>

@endsection
