@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.availability'))

@section('pageContent')
    <div class="menubab">
        <div class="container">
            <nav class="setting-menu">
                <a class="active" href="/myCalendar/{{auth()->id()}}">{{ __('frontstaticword.my_calender') }}</a>
                <a href="/tutor/lessons/{{auth()->id()}}">{{ __('frontstaticword.MyLessons') }}</a>
                <a href="/myStudents/{{auth()->id()}}">{{ __('frontstaticword.MyStudents') }}</a>
                <a href="/statistics/{{auth()->id()}}">{{ __('frontstaticword.Statistics') }}</a>
                <a href="/tutor/profile">{{ __('frontstaticword.UserProfile') }}</a>
            </nav>
        </div>
    </div>


    <section class="calendar-teach">
        <div class="row">
            <div class="col-sm-3 leftbox">
                <h2 class="title">{{ __('frontstaticword.settings') }}</h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="item-1-tab" data-toggle="tab" href="#item-1" role="tab" aria-controls="item-1" aria-selected="true">{{ __('frontstaticword.availability_time') }}</a></li>
{{--                    <li class="nav-item"><a class="nav-link" id="item-2-tab" data-toggle="tab" href="#item-2" role="tab" aria-controls="item-2" aria-selected="false">{{ __('frontstaticword.lesson_booking') }}</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" id="item-3-tab" data-toggle="tab" href="#item-3" role="tab" aria-controls="item-3" aria-selected="false">{{ __('frontstaticword.calendar_settings') }}</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" id="item-4-tab" data-toggle="tab" href="#item-4" role="tab" aria-controls="item-4" aria-selected="false">{{ __('frontstaticword.google_calendar') }}</a></li>--}}
                </ul>
            </div>
            <div class="col-sm-9 rightbox">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show w-item active" id="item-1" role="tabpanel" aria-labelledby="item-1-tab">
                            <h2 class="title">{{ __('frontstaticword.availability_time') }}</h2>
                            <p class="textsacand"><i class="fas fa-info-circle"></i>  {{ __('frontstaticword.availability_time_text') }}</p>
                            <form action="/availabilityTime/{{auth()->id()}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <?php $dayOfWeek = \Illuminate\Support\Carbon::today() ?>
                                @while($dayOfWeek < \Carbon\Carbon::today()->addDay(7))

                                    <div class="select-day">
                                <div class="check-tag">
                                    <label class="che-box">

                                        <input type="checkbox" name="" value="{{$dayOfWeek->format('l')}}" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) checked @endif @endforeach><span class="label-text">{{ __('frontstaticword.'.$dayOfWeek->format('l')) }}</span>
                                    </label>
{{--                                    <div class="fild"><i class="fas fa-chevron-down iconsel"></i>--}}
{{--                                        <select class="chosen-select" data-placeholder="Choose Timing" multiple tabindex="18" id="multiple-label-example">--}}
{{--                                            <option value=""></option>--}}
{{--                                            <option selected>{{ __('frontstaticword.morning') }}</option>--}}
{{--                                            <option>{{ __('frontstaticword.afternoon') }}</option>--}}
{{--                                            <option>{{ __('frontstaticword.evening') }}</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="times-day">
{{--                                    <h3 class="title">{{ __('frontstaticword.morning') }}</h3>--}}
                                    <div class="all-checktime">
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="00:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "00:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>00:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="01:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "01:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>01:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="02:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "02:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>02:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="03:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "03:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>03:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="04:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "04:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>04:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="05:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "05:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>05:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="06:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "06:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>06:00</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="all-checktime">
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="07:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "07:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>07:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="08:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "08:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>08:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="09:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "09:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>09:00         </p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="10:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "10:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>10:00         </p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="11:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "11:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>11:00         </p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="12:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "12:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>12:00         </p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="13:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "13:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>13:00         </p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="all-checktime">
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]"value="14:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "14:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>14:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="15:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "15:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>15:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="16:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "16:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>16:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="17:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "17:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>17:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="18:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "18:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>18:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="19:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "19:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>19:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="20:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "20:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>20:00</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="all-checktime">
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="21:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "21:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>21:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="22:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "22:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>22:00</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="ch-item">
                                            <label class="chebox-time">
                                                <input type="checkbox" name="{{$dayOfWeek->format('l')}}[]" value="23:00:00" @foreach($availableTimes as $availableTime) @if($availableTime->day == $dayOfWeek->format('l')) @if($availableTime->start_time == "23:00:00") checked @endif @endif @endforeach>
                                                <div class="label-text">
                                                    <p>23:00</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                        <?php $dayOfWeek->addDay(1) ?>
                                    @endwhile
                            <div class="bot-save">
                                <button class="bottom" type="submit">{{ __('frontstaticword.save') }}</button>
                            </div>
                                </form>
                        </div>
                        <div class="tab-pane fade" id="item-2" role="tabpanel" aria-labelledby="item-2-tab">
                            <div class="flex-text">
                                <h2 class="title">{{ __('frontstaticword.lesson_booking_settings') }}</h2><a class="instant" href="#"><img src="/frontAssets/images/electricity-sign.png" alt="Arabia" title="Arabia"> {{ __('frontstaticword.lesson_booking_settings_text_1') }}</a>
                            </div>
                            <div class="row linselec">
                                <div class="col-sm-6 fild">
                                    <p class="textsacand"><i class="fas fa-info-circle"></i>  <span>{{ __('frontstaticword.lesson_booking_settings_text_2') }}</span> <br/><br/> {{ __('frontstaticword.lesson_booking_settings_text_3') }}</p>
                                </div>
                                <div class="col-sm-6 fild"><i class="fas fa-chevron-down iconsel"></i>
                                    <select class="form-control" name="" autocomplete="off" required>
                                        <option>{{ __('frontstaticword.at_least_12_hours_notice') }}</option>
                                        <option>{{ __('frontstaticword.at_least_12_hours_notice') }}</option>
                                        <option>{{ __('frontstaticword.at_least_12_hours_notice') }}</option>
                                    </select>
                                    <label class="floating-label">{{ __('frontstaticword.advance_notice') }} </label>
                                </div>
                            </div>
                            <div class="row linselec">
                                <div class="col-sm-6 fild">
                                    <p class="textsacand"><span>{{ __('frontstaticword.lesson_booking_settings_text_4') }}</span> <br/><br/>  {{ __('frontstaticword.lesson_booking_settings_text_5') }} <br/>{{ __('frontstaticword.lesson_booking_settings_text_6') }}</p>
                                </div>
                                <div class="col-sm-6 fild"><i class="fas fa-chevron-down iconsel"></i>
                                    <select class="form-control" name="" autocomplete="off" required>
                                        <option>{{ __('frontstaticword.2_weeks_in_advance') }}</option>
                                        <option>{{ __('frontstaticword.2_weeks_in_advance') }}</option>
                                        <option>{{ __('frontstaticword.2_weeks_in_advance') }}</option>
                                    </select>
                                    <label class="floating-label">{{ __('frontstaticword.booking_notice') }}</label>
                                </div>
                            </div>
                            <div class="bot-save">
                                <button class="bottom" type="submit">{{ __('frontstaticword.save') }}</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="item-3" role="tabpanel" aria-labelledby="item-3-tab">
                            <h2 class="title">{{ __('frontstaticword.calendar_settings') }}</h2>
                            <div class="row linselec">
                                <div class="col-sm-6 fild">
                                    <p class="textsacand p-0"><span>{{ __('frontstaticword.calendar_settings_text_1') }}</span> <br/><br/>  {{ __('frontstaticword.calendar_settings_text_2') }}</p>
                                </div>
                                <div class="col-sm-6 groupfild">
                                    <div class="row">
                                        <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                                            <select class="form-control" name="" autocomplete="off" required>
                                                <option>{{ __('frontstaticword.Africa_cairo_2_gmt') }}</option>
                                                <option>{{ __('frontstaticword.Africa_cairo_2_gmt') }}</option>
                                                <option>{{ __('frontstaticword.Africa_cairo_2_gmt') }}</option>
                                            </select>
                                            <label class="floating-label">Current time zone</label>
                                        </div>
                                        <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                                            <select class="form-control" name="" autocomplete="off" required>
                                                <option>{{ __('frontstaticword.Monday') }}</option>
                                                <option>{{ __('frontstaticword.Monday') }}</option>
                                                <option>{{ __('frontstaticword.Monday') }}</option>
                                            </select>
                                            <label class="floating-label">{{ __('frontstaticword.week_starts_on') }}</label>
                                        </div>
                                        <div class="col-sm-12 fild"><i class="fas fa-chevron-down iconsel"></i>
                                            <select class="form-control" name="" autocomplete="off" required>
                                                <option>{{ __('frontstaticword.day_month_year') }}</option>
                                                <option>{{ __('frontstaticword.month_day_year') }}</option>
                                                <option>{{ __('frontstaticword.year_day_month') }}</option>
                                            </select>
                                            <label class="floating-label">{{ __('frontstaticword.date_format') }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bot-save">
                                <button class="bottom" type="submit">{{ __('frontstaticword.save') }}</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="item-4" role="tabpanel" aria-labelledby="item-4-tab">
                            <h2 class="title">{{ __('frontstaticword.google_calendar') }}</h2>
                            <ul class="social-item">
                                <li> <span><img src="/frontAssets/images/google.png" alt="" title=""> </span> {{ __('frontstaticword.google_calendar_text_1') }} <br/>{{ __('frontstaticword.schedule') }}</li>
                            </ul>
                            <div class="bot-all clickbot"><span class="bottom conn-bot">  {{ __('frontstaticword.google_calendar_text_2') }}</span><span class="bottom calen">   {{ __('frontstaticword.google_calendar_text_3') }}</span></div>
                            <div class="show-connect">
                                <h2 class="title">{{ __('frontstaticword.google_calendar_text_4') }}</h2>
                                <label class="che-box">
                                    <input type="checkbox" name="checkbox"><span class="label-text">{{ __('frontstaticword.google_calendar_text_5') }}</span>
                                </label>
                                <label class="che-box">
                                    <input type="checkbox" name="checkbox" checked><span class="label-text">{{ __('frontstaticword.google_calendar_text_6') }}</span>
                                </label>
                                <div class="bot-save">
                                    <button class="bottom" type="submit">{{ __('frontstaticword.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('footerAssets')



@endsection
