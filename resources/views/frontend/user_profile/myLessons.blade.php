@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.MyLessons') )

@section('pageContent')
@include('admin.message')


<div class="menubab">
    <div class="container">
        <nav class="setting-menu">
            <a class="active"
                href="{{route('myLessons.show',Auth::User()->id)}}">{{ __('frontstaticword.MyLessons') }}</a>
            <a href="{{route('myTeachers.show',Auth::User()->id)}}">{{ __('frontstaticword.MyTutors') }}</a>
            <a href="{{route('profile.show',Auth::User()->id)}}">{{ __('frontstaticword.UserProfile') }}</a>
        </nav>
    </div>
</div>
<section class="lessons">
    <div class="container">
        <h2 class="title">{{ __('frontstaticword.MyLessons') }}</h2>
        <div class="row">
            <div class="col-sm-8 less-item">
                <form action="/mylessons/{{auth()->id()}}" method="post">
                    @csrf
                    <div class="row" id="filterLessons">
                        <div class="col-sm-6 fild"><i class="fas fa-chevron-down iconsel"></i>
                            <select class="form-control" name="status_id" autocomplete="off" required>
                                <option value="all"> {{ __('frontstaticword.all') }} </option>
                                @foreach($appointments_status as $appointment_status)
                                <option value="{{$appointment_status->id}}" @if($appointment_status->id ==
                                    $request->status_id) selected @endif>{{$appointment_status->status}}</option>
                                @endforeach
                            </select>
                            <label class="floating-label">{{ __('frontstaticword.status') }}</label>
                        </div>
                        <div class="col-sm-6 fild">
                            <div class="formsearch">
                                <input class="form-control" id="searchBox" name="name" type="text"
                                    placeholder="{{ __('frontstaticword.search_by_name') }}">
                            </div>
                        </div>
                    </div>
                    <button class="bottom" id="filter" type="submit" hidden="hidden">filter</button>

                </form>
                @foreach($lessons as $lesson)
                <div class="item-les">
                    <div class="sec-les">
                        <input value="{{$lesson->instructor_id}}" class="input-group tutor_id" id="tutor_id" hidden>
                        <input value="{{$lesson->id}}" class="input-group tutor_id" id="course_id" hidden>

                        <div class="img"><img src="{{ url('/images/user_img/'.$lesson->user_img) }}" alt="Arabia"
                                title="Arabia"></div>
                        <h4 class="name">{{$lesson->fname}} {{$lesson->lname}}.</h4><a class="view-profile"
                            href="/tutor/page/{{$lesson->instructor_id}}">{{ __('frontstaticword.view_profile') }}</a>
                    </div>
                    <div class="sec-les">
                        <h4 class="title">
                            @if($lesson->status == "Confirmed")
                                Done
                            @else
                            {{$lesson->status}}
                            @endif
                        </h4>
                        <ul class="rating">
                            @if(isset($lesson->review->value))
                            @if($lesson->review->value == 1)
                            <li class="fas fa-star active"></li>
                            @elseif($lesson->review->value == 2)
                            <li class="fas fa-star active"></li>
                            <li class="fas fa-star active"></li>
                            @elseif($lesson->review->value == 3)
                            <li class="fas fa-star active"> </li>
                            <li class="fas fa-star active"> </li>
                            <li class="fas fa-star active"> </li>
                            @elseif($lesson->review->value == 4)
                                <li class="fas fa-star active"> </li>
                                <li class="fas fa-star active"> </li>
                                <li class="fas fa-star active"> </li>
                                <li class="fas fa-star active"> </li>
                                @elseif($lesson->review->value == 5)
                                    <li class="fas fa-star active"> </li>
                                    <li class="fas fa-star active"> </li>
                                    <li class="fas fa-star active"> </li>
                                    <li class="fas fa-star active"> </li>
                                    <li class="fas fa-star active"> </li>
                                @endif
                                @endif
                        </ul>
                        @php
                        // find tutor
                        $tutor = \App\Instructor::find($lesson->instructor_id);

                        // get tutor time zone
                        $time_zone = \App\Time_zone::find($tutor->user->time_zone_id);


                        // get slot time format to conver it
                        $slot_time = date("Y-m-d H:i:s", strtotime("$lesson->date . $lesson->start_time "));

                        // convert from time zone to time zone saved in session
                        $slot_time_converted = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s' ,  $slot_time , $time_zone->time_zone_name )
                        ->setTimezone( session('currentTimeZoneName') );

                        $correct_time = \Carbon\Carbon::parse($slot_time_converted)->format('Y-m-d H:i');

                        @endphp
                        <span
                            class="text-date">{{  $correct_time }}
                        </span>
                        {{--                        @if($lesson->status == "Cancelled")--}}
                        {{--                        <p class="textsacand"><i class="fas fa-info-circle"></i>  The lesson was cancelled because of </p>--}}
                        {{--                        @endif--}}
                    </div>
                    <div class="sec-les">
                        <h4 class="title">{{ __('frontstaticword.details') }}</h4><span class="text-date">1 {{ __('frontstaticword.hour') }}</span>
						<!--<span class="text-price">{{$lesson->PricePerHour}} $</span>-->
                    </div>

                    <div class="sec-les">
                        @if($lesson->status != "Cancelled")
                        @if($lesson->status != "Confirmed")
                        <div class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{ __('frontstaticword.actions') }}<span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="5.751"
                                        viewBox="0 0 11.808 6.751">
                                        <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down"
                                            d="M12.094,15.963l4.465-4.468a.84.84,0,0,1,1.192,0,.851.851,0,0,1,0,1.2l-5.059,5.062a.842.842,0,0,1-1.164.025L6.434,12.693a.844.844,0,1,1,1.192-1.2Z"
                                            transform="translate(-6.188 -11.246)" fill="#fff"></path>
                                    </svg></span></a>
                            <div class="dropdown-menu">
                                @if($lesson->status == "Pending Payment")
                                <a class="dropdown-item"
                                    href="/course/appointment/{{$lesson->instructor_id}}/{{$lesson->date}}/{{$lesson->start_time}}"><i
                                        class="far fa-credit-card"></i>{{ __('frontstaticword.pay_now') }}</a>
                                @endif
                                @if($lesson->status != "Confirmed" && $lesson->status != "Awaiting resolution" &&
                                $lesson->status != "Pending Payment")
                                <a class="dropdown-item" href="/lesson/reschedule/{{$lesson->id}}"><i
                                        class="far fa-calendar-alt"></i> {{ __('frontstaticword.reschedule') }}</a>
                                @endif
                                @if($lesson->status != "Confirmed" && $lesson->status != "Pending Payment")
                                <a class="dropdown-item confirmLesson" record_id="{{$lesson->id}}"
                                    tname="{{$lesson->fname}} {{$lesson->lname}}" timage="{{$lesson->user_img}}"
                                    href="#confirm-lesson" data-toggle="modal"><i class="fas fa-star"></i> {{ __('frontstaticword.review') }}</a>
                                @endif
                                @if($lesson->status == "Waiting for confirmation" && $lesson->status != "Pending
                                Payment")
                                <a class="dropdown-item" href="#report-issue" data-toggle="modal"><i
                                        class="fas fa-exclamation-circle"></i> {{ __('frontstaticword.report_issue') }}</a>
                                @endif
                                @if($lesson->status != "Confirmed")
                                <a class="dropdown-item cancelLesson" href="#cancel-lesson" record_id="{{$lesson->id}}" tutor_id="{{$lesson->instructor_id}}"
                                    data-toggle="modal"><i class="far fa-times-circle"></i> {{ __('frontstaticword.cancel') }}</a>
                                @endif
                            </div>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-sm-4 less-item">
                <div class="item-datals">
                    @if(isset($nextLesson))
                    @foreach($nextLesson as $next)
                        @if(isset($next->time_zone_id))
                    <div class="lesson-user">
                        <p class="text-les">{{ __('frontstaticword.next_lesson') }} : <span>

                            @php
                            // get tutor time zone
                            $time_zone = \App\Time_zone::find($next->time_zone_id);
                            // get slot time format to conver it
                            if($time_zone != null ){
                            $slot_time = date(" H:i:s", strtotime("$next->start_time"));
                            // convert from time zone to time zone saved in session
                            $slot_time_converted = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s' , date('Y-m-d'). $slot_time ,  $time_zone->time_zone_name)
                            ->setTimezone(session('currentTimeZoneName'));
                            $correct_time = \Carbon\Carbon::parse($slot_time_converted)->format('H:i');
                            }else{
                                $correct_time = '';
                            }

                            @endphp

                                {{ $next->date . ' ' . $correct_time }}
                                {{ __('frontstaticword.with') }}</span></p>
                        <div class="img"><img src="{{ url('/images/user_img/'.$next->user_img) }}" alt="Arabia"
                                title="Arabia">
                            <p>{{$next->fname}} {{$next->lname}}. </p>
                        </div>

                    </div>
                            @endif
                    @if(isset($next->meetingId))
                    <div class="text-center"><a class="btn btn-info enter_class" style="color:#fff;background-image:-webkit-linear-gradient(top, #b1936f, #8a7658);border:0px;border-radius:60px;" target="_blank"
                            href="/bigblue/api/create/meeting/{{$next->meetingId}}">{{ __('frontstaticword.enter_classroom') }}</a></div>
					<!--<div class="text-center"><a class="view-Profile" target="_blank"
                            href="/bigblue/api/create/meeting/{{$next->meetingId}}">Enter Classroom</a></div>-->
                    @endif
                    @endforeach
                    @endif
                </div>
                <div class="item-datals">
                    <h4 class="title">{{ __('frontstaticword.lessons_overview') }}</h4>
                    <ul class="last-overview">
                        <li><span>{{$Scheduled_lessons_counter}}</span> {{ __('frontstaticword.scheduled') }}</li>
                        <li><span>0</span> {{ __('frontstaticword.need_scheduling') }}</li>
                        <li><span>0</span> {{ __('frontstaticword.past') }} </li>
                    </ul>
                </div>
                <div class="item-datals" id="calender">
                    <h4 class="title">{{ __('frontstaticword.calendar') }}</h4>
                    <div class="myCalendar"></div>
                    <!-- <div class="prsonal"><i class="fas fa-dot-circle"></i>
                        <div class="inner-prso lessonByDate">

                        </div>
                    </div> -->
                    <div class="prsonal" ><i class="fas fa-dot-circle"></i>
                        <div class="inner-prso lessonByDate">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="cancel-lesson" role="dialog">
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
                <div class="textpopup">
                    <h3 class="title">{{ __('frontstaticword.cancel_the_lesson') }}</h3>
                    <p class="text">{{ __('frontstaticword.cancel_the_lesson_text') }}</p>
                </div>
                <div class="fild bot-de bot-card">
                    @if(isset($lesson))
                    @if($lesson->status == "Pending Payment")
                    <button class="bottom cancelButton " record_id="{{base64_encode($lesson->id)}}"
                        type="submit">Cancel</button>
                    @else
                    <button class="bottom cancelButton " record_id="{{base64_encode($lesson->id)}}"
                        type="submit">{{ __('frontstaticword.cancel') }}</button>
                    <!--<a class="bottom" id="reschduleBtn"
                        href="/lesson/reschedule/{{ base64_encode($lesson->id) }}">Reschedule</a>-->
						<a class="bottom" id="reschduleBtn"
                        href="/lesson/reschedule/{{ $lesson->id }}">{{ __('frontstaticword.reschedule') }}</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="report-issue" role="dialog">
    <div class="modal-dialog popreview">
        <div class="modal-content">
            <div class="pop-det">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#000"></path>
                    </svg>
                </button>
                <h3 class="title">{{ __('frontstaticword.report_issue_to_teacher') }}</h3><small>{{ __('frontstaticword.report_issue_to_teacher_text') }}</small>
                @if(isset($lesson))
                <form action="{{route('course.report', $lesson->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <p class="occurred">{{ __('frontstaticword.select_issue') }}</p>
                    <div class="row">
                        <div class="col-sm-12 fild">
                            <label class="che-box">
                                <input type="checkbox" name="title[]" value="We agreed to reschedule"><span
                                    class="label-text">{{ __('frontstaticword.student_lesson_issue_1') }}</span>
                            </label>
                        </div>
                        <div class="col-sm-12 fild">
                            <label class="che-box">
                                <input type="checkbox" name="title[]" value="We had technical problems"><span
                                    class="label-text">{{ __('frontstaticword.student_lesson_issue_2') }}</span>
                            </label>
                        </div>
                        <div class="col-sm-12 fild">
                            <label class="che-box">
                                <input type="checkbox" name="title[]" value="Tutor's didn't meet my expectation"><span
                                    class="label-text">{{ __('frontstaticword.student_lesson_issue_3') }}</span>
                            </label>
                        </div>
                        <div class="col-sm-12 fild">
                            <label class="che-box">
                                <input type="checkbox" name="title[]" value="Tutor was late"><span
                                    class="label-text">{{ __('frontstaticword.student_lesson_issue_4') }}</span>
                            </label>
                        </div>
                        <div class="col-sm-12 fild">
                            <label class="che-box">
                                <input type="checkbox" name="title[]" value="Tutor was absent"><span
                                    class="label-text">{{ __('frontstaticword.student_lesson_issue_5') }}</span>
                            </label>
                        </div>
                        <div class="col-sm-12 fild">
                            <label class="che-box">
                                <input type="checkbox" name="title[]" value="Other issue"><span class="label-text">{{ __('frontstaticword.student_lesson_issue_6') }}</span>
                            </label>
                        </div>
                        <div class="col-sm-12 fild">
                            <textarea class="form-control" name="detail" placeholder="Write Comment here…"
                                autocomplete="off" autofocus="" required=""></textarea>
                            <label class="floating-label">{{ __('frontstaticword.issue_comment') }} </label>
                        </div>
                    </div>
                    <div class="fild bot-de bot-card">
                        <button class="bottom" type="submit">{{ __('frontstaticword.Report') }}</button><a class="bottom"
                            data-dismiss="modal">{{ __('frontstaticword.cancel') }}</a>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-lesson" role="dialog">
    <div class="modal-dialog popreview" style="margin-top: 100px;">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal">
                <svg width="16" height="16" viewBox="0 0 12 12" f xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                        fill="#000"></path>
                </svg>
            </button>
            <div class="photo"> <img src="" id="timage" alt="" title=""></div>
            <div class="text-center mt-4" id="record_id">
                <h3 class="title">{{ __('frontstaticword.lesson_review') }}</h3>
                <p class="mt-2"> {{ __('frontstaticword.lesson_review_text') }}</p>
            </div>
            <form action="#">
                <div class="rev-item lessonprve">
                    <ul class="stars">
                        <li class="star" title="" data-value="1"><i class="far fa-star"></i></li>
                        <li class="star" title="" data-value="2"><i class="far fa-star"></i></li>
                        <li class="star" title="" data-value="3"><i class="far fa-star"></i></li>
                        <li class="star" title="" data-value="4"><i class="far fa-star"></i></li>
                        <li class="star" title="" data-value="5"><i class="far fa-star"></i></li>
                    </ul>
                </div>
                <div class="fild bot-de bot-card">
                    <button class="bottom confirm" type="submit" value="">{{ __('frontstaticword.send') }}</button><a class="bottom" href="#"
                        data-dismiss="modal">{{ __('frontstaticword.cancel') }} </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('footerAssets')


<script>
(function($){
$('#filterLessons, #searchBox').on('change', function() {
    $("#filter").click();
})

$('.confirmLesson').on('click', function() {

    tutorName = $(this).attr('tname');
    timage = $(this).attr('timage');
    record_id = $(this).attr('record_id');
    timage = "/images/user_img/" + timage;
    $("#tutorName").html(tutorName);
    $("#timage").attr("src", timage);

    // $('.confirm').on('click', function() {
    //     // alert(record_id)
    //     $.ajax({
    //         url: "/api/confirmLesson",
    //         type: "POST",
    //         data: {
    //             record_id: record_id
    //         },
    //         dataType: "json",
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         success: function(data) {
    //             location.reload();
    //         }
    //     })
    // })
})
$('.stars li').on('click', function() {
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
    }

    for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
    }

    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
	var stars = "{{ __('frontstaticword.stars') }}";
	var lesson_rating_text_1 = "{{ __('frontstaticword.lesson_rating_text_1') }}";
	var lesson_rating_text_2 = "{{ __('frontstaticword.lesson_rating_text_2') }}";
    if (ratingValue > 1) {
        msg = lesson_rating_text_1 + ' ' + ratingValue + ' ' + stars;
    } else {
        msg = lesson_rating_text_2 + ' ' + ratingValue + ' ' + stars;
    }

    // alert(record_id);
    $('#starsValue').val(onStar);
    // var tutor_id = $("#tutor_id").val();
    // var course_id = $("#course_id").val();

    $('.confirm').on('click', function() {

    $.ajax({
        url: "/reviewrating",
        type: "POST",
        data: {
            onStar: onStar,
            // tutor_id :tutor_id,
            record_id :record_id
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
});

$('.cancelLesson').on('click', function() {
    record_id = $(this).attr('record_id');
	tutor_id = $(this).attr('tutor_id');

    $('.cancelButton').on('click', function() {
        $('.cancelButton').prop('disabled', true);
        $('#reschduleBtn').fadeOut(300);;

        $.ajax({
            url: "/api/cancelLesson",
            type: "POST",
            data: {
                record_id: record_id,
				tutor_id: tutor_id,
            },
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data == '1') {
                    location.reload();
                } else {
                    alert(data.Error);

                }
                $('.cancelButton').prop('disabled', false);
                $('#reschduleBtn').fadeIn(300);;

            },
            error: function() {
                alert('System Error');
                $('.cancelButton').prop('disabled', false);
                $('#reschduleBtn').fadeIn(300);;
            }
        })
    })
})
})(jQuery);
</script>
@endsection
