@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.Statistics'))

@section('pageContent')
    <div class="menubab">
        <div class="container">
            <nav class="setting-menu">
                <a href="/myCalendar/{{auth()->id()}}">{{ __('frontstaticword.my_calender') }}</a>
                <a href="/tutor/lessons/{{auth()->id()}}">{{ __('frontstaticword.MyLessons') }}</a>
                <a href="{{route('myStudents.show',Auth::User()->id)}}">{{ __('frontstaticword.MyStudents') }}</a>
                <a class="active" href="/statistics/{{auth()->id()}}">{{ __('frontstaticword.Statistics') }}</a>
                <a href="/tutor/profile">{{ __('frontstaticword.UserProfile') }}</a>
            </nav>
        </div>
    </div>
<section class="statistics">
    <div class="container">
        <div class="item-sta">
            <div class="headtitle">
                <h2 class="title">{{ __('frontstaticword.profile_attractiveness') }}</h2>
                {{-- <span class="fas fa-question tooltiptext">
                    <small>Hover over me Hover over me  Hover over me</small>
                </span> --}}
            </div>
            <div class="row">
                <div class="col-sm-4 inner-sta">
                    <div class="in-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46.8" height="46.8" viewBox="0 0 46.8 46.8">
                            <path id="Icon_material-rate-review" data-name="Icon material-rate-review" d="M45.12,3H7.68A4.674,4.674,0,0,0,3.023,7.68L3,49.8l9.36-9.36H45.12a4.694,4.694,0,0,0,4.68-4.68V7.68A4.694,4.694,0,0,0,45.12,3ZM12.36,31.08V25.3l16.1-16.1a1.158,1.158,0,0,1,1.661,0l4.142,4.142a1.158,1.158,0,0,1,0,1.661L18.14,31.08Zm28.08,0H22.89l4.68-4.68H40.44Z" transform="translate(-3 -3)" fill="#af8b62"></path>
                        </svg>
                        <div class="content">
                            <h4 class="title">{{$reviewsCounter}}</h4>
                            <p class="text">{{ __('frontstaticword.reviews_received') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.reviews_received_text') }}</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 inner-sta">
                    <div class="in-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53.604" height="49.775" viewBox="0 0 53.604 49.775">
                            <path id="Icon_ionic-ios-star-half" data-name="Icon ionic-ios-star-half" d="M53.819,20.6h-17.6L30.87,4.643a1.938,1.938,0,0,0-3.637,0L21.885,20.6H4.164A1.92,1.92,0,0,0,2.25,22.519a1.407,1.407,0,0,0,.036.323,1.839,1.839,0,0,0,.8,1.352L17.553,34.388,12,50.529a1.92,1.92,0,0,0,.658,2.154,1.851,1.851,0,0,0,1.077.467,2.346,2.346,0,0,0,1.2-.431L29.052,42.656,43.171,52.719a2.242,2.242,0,0,0,1.2.431,1.719,1.719,0,0,0,1.065-.467,1.9,1.9,0,0,0,.658-2.154L40.538,34.388,54.884,24.1l.347-.3a2.007,2.007,0,0,0,.622-1.28A2.026,2.026,0,0,0,53.819,20.6Zm-5.671,4.212L38.6,31.672a3.36,3.36,0,0,0-1.22,3.8l3.6,10.493a.48.48,0,0,1-.73.55l-9.261-6.6-.012-.012a4.462,4.462,0,0,1-1.926-3.649V11.188a.233.233,0,0,1,.455-.072h0L33.048,21.67a3.346,3.346,0,0,0,3.171,2.285H47.861A.478.478,0,0,1,48.148,24.816Z" transform="translate(-2.25 -3.375)" fill="#af8b62"></path>
                        </svg>
                        <div class="content">
                            <h4 class="title">{{$averageRating}}</h4>
                            <p class="text">{{ __('frontstaticword.average_rating') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.average_rating_text') }}</small></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-sta">
            <div class="headtitle flex">
                <h2 class="title">{{ __('frontstaticword.profile_activities') }}</h2>
                {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="all-time-tab" data-toggle="tab" href="#all-time" role="tab" aria-controls="all-time" aria-selected="true">{{ __('frontstaticword.all_time') }}</a></li>
                    <li class="nav-item"><a class="nav-link" id="month-tab" data-toggle="tab" href="#month" role="tab" aria-controls="month" aria-selected="false">{{ __('frontstaticword.month') }}</a></li>
                    <li class="nav-item"><a class="nav-link" id="week-tab" data-toggle="tab" href="#week" role="tab" aria-controls="week" aria-selected="false">{{ __('frontstaticword.week') }}</a></li>
                </ul> --}}
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-time" role="tabpanel" aria-labelledby="all-time-tab">
                    <div class="row">
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48.836" height="48.836" viewBox="0 0 48.836 48.836">
                                    <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-2 -2)">
                                        <path id="Path_31791" data-name="Path 31791" d="M42.544,23.522A19.022,19.022,0,1,1,23.522,4.5,19.022,19.022,0,0,1,42.544,23.522Z" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"></path>
                                        <path id="Path_31792" data-name="Path 31792" d="M35.318,35.318,24.975,24.975" transform="translate(11.982 11.982)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">{{$tutor->viewed}}</h4>
                                    <p class="text">{{ __('frontstaticword.unique_profile_view') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.unique_profile_view_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46.783" height="40.931" viewBox="0 0 46.783 40.931">
                                    <path id="Icon_simple-clockify" data-name="Icon simple-clockify" d="M27.249,30.705l10.6,10.748,3.035-3.074-10.6-10.748-3.037,3.074ZM22.955,19.721A3.725,3.725,0,0,0,20.3,20.846a3.873,3.873,0,0,0-1.1,2.7,3.756,3.756,0,1,0,7.511,0,3.874,3.874,0,0,0-1.1-2.7,3.729,3.729,0,0,0-2.659-1.125ZM40.931,8.62,37.9,5.542,27.3,16.292l3.037,3.074ZM23.068,7.012a15.828,15.828,0,0,1,6.037,1.2l5.177-5.253A22.7,22.7,0,0,0,23.068,0,23.232,23.232,0,0,0,0,23.392,23.233,23.233,0,0,0,23.068,46.783a22.7,22.7,0,0,0,11.117-2.9L29.1,38.721a15.842,15.842,0,0,1-6.027,1.195A16.306,16.306,0,0,1,6.914,23.464,16.305,16.305,0,0,1,23.068,7.012Z" transform="translate(0 40.931) rotate(-90)" fill="#ba9a74"></path>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0.00hrs</h4>
                                    <p class="text">{{ __('frontstaticword.average_response_time') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.average_response_time_text') }}</small></span></p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55.833" height="33.5" viewBox="0 0 55.833 33.5">
                                    <path id="Icon_awesome-graduation-cap" data-name="Icon awesome-graduation-cap" d="M54.292,12.282,29.958,4.805a6.969,6.969,0,0,0-4.082,0L1.541,12.282a2.054,2.054,0,0,0,0,3.977l4.242,1.3a6.875,6.875,0,0,0-1.56,4.092A2.692,2.692,0,0,0,4,26.279L1.773,36.3A1.4,1.4,0,0,0,3.135,38H8.03a1.4,1.4,0,0,0,1.363-1.7L7.166,26.279A2.685,2.685,0,0,0,7.009,21.7a4.115,4.115,0,0,1,1.8-3.2l17.061,5.242a6.977,6.977,0,0,0,4.082,0L54.292,16.26a2.054,2.054,0,0,0,0-3.978ZM30.777,26.4a9.766,9.766,0,0,1-5.722,0L12.4,22.518l-1.237,9.9c0,3.084,7.5,5.583,16.75,5.583s16.75-2.5,16.75-5.583l-1.237-9.9L30.777,26.4Z" transform="translate(0 -4.5)" fill="#ba9a74"></path>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0%</h4>
                                    <p class="text">{{ __('frontstaticword.conversion_to_package') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.conversion_to_package_text') }}</small></span></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab">
                    <div class="row">
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48.836" height="48.836" viewBox="0 0 48.836 48.836">
                                    <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-2 -2)">
                                        <path id="Path_31791" data-name="Path 31791" d="M42.544,23.522A19.022,19.022,0,1,1,23.522,4.5,19.022,19.022,0,0,1,42.544,23.522Z" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"></path>
                                        <path id="Path_31792" data-name="Path 31792" d="M35.318,35.318,24.975,24.975" transform="translate(11.982 11.982)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0</h4>
                                    <p class="text">{{ __('frontstaticword.unique_profile_view') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.unique_profile_view_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46.783" height="40.931" viewBox="0 0 46.783 40.931">
                                    <path id="Icon_simple-clockify" data-name="Icon simple-clockify" d="M27.249,30.705l10.6,10.748,3.035-3.074-10.6-10.748-3.037,3.074ZM22.955,19.721A3.725,3.725,0,0,0,20.3,20.846a3.873,3.873,0,0,0-1.1,2.7,3.756,3.756,0,1,0,7.511,0,3.874,3.874,0,0,0-1.1-2.7,3.729,3.729,0,0,0-2.659-1.125ZM40.931,8.62,37.9,5.542,27.3,16.292l3.037,3.074ZM23.068,7.012a15.828,15.828,0,0,1,6.037,1.2l5.177-5.253A22.7,22.7,0,0,0,23.068,0,23.232,23.232,0,0,0,0,23.392,23.233,23.233,0,0,0,23.068,46.783a22.7,22.7,0,0,0,11.117-2.9L29.1,38.721a15.842,15.842,0,0,1-6.027,1.195A16.306,16.306,0,0,1,6.914,23.464,16.305,16.305,0,0,1,23.068,7.012Z" transform="translate(0 40.931) rotate(-90)" fill="#ba9a74"></path>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0.00hrs</h4>
                                    <p class="text">{{ __('frontstaticword.average_response_time') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.average_response_time_text') }}</small></span></p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55.833" height="33.5" viewBox="0 0 55.833 33.5">
                                    <path id="Icon_awesome-graduation-cap" data-name="Icon awesome-graduation-cap" d="M54.292,12.282,29.958,4.805a6.969,6.969,0,0,0-4.082,0L1.541,12.282a2.054,2.054,0,0,0,0,3.977l4.242,1.3a6.875,6.875,0,0,0-1.56,4.092A2.692,2.692,0,0,0,4,26.279L1.773,36.3A1.4,1.4,0,0,0,3.135,38H8.03a1.4,1.4,0,0,0,1.363-1.7L7.166,26.279A2.685,2.685,0,0,0,7.009,21.7a4.115,4.115,0,0,1,1.8-3.2l17.061,5.242a6.977,6.977,0,0,0,4.082,0L54.292,16.26a2.054,2.054,0,0,0,0-3.978ZM30.777,26.4a9.766,9.766,0,0,1-5.722,0L12.4,22.518l-1.237,9.9c0,3.084,7.5,5.583,16.75,5.583s16.75-2.5,16.75-5.583l-1.237-9.9L30.777,26.4Z" transform="translate(0 -4.5)" fill="#ba9a74"></path>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0%</h4>
                                    <p class="text">{{ __('frontstaticword.conversion_to_package') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.conversion_to_package_text') }}</small></span></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>


                </div>
                <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="week-tab">

                    <div class="row">
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48.836" height="48.836" viewBox="0 0 48.836 48.836">
                                    <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-2 -2)">
                                        <path id="Path_31791" data-name="Path 31791" d="M42.544,23.522A19.022,19.022,0,1,1,23.522,4.5,19.022,19.022,0,0,1,42.544,23.522Z" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"></path>
                                        <path id="Path_31792" data-name="Path 31792" d="M35.318,35.318,24.975,24.975" transform="translate(11.982 11.982)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0</h4>
                                    <p class="text">{{ __('frontstaticword.unique_profile_view') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.unique_profile_view_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46.783" height="40.931" viewBox="0 0 46.783 40.931">
                                    <path id="Icon_simple-clockify" data-name="Icon simple-clockify" d="M27.249,30.705l10.6,10.748,3.035-3.074-10.6-10.748-3.037,3.074ZM22.955,19.721A3.725,3.725,0,0,0,20.3,20.846a3.873,3.873,0,0,0-1.1,2.7,3.756,3.756,0,1,0,7.511,0,3.874,3.874,0,0,0-1.1-2.7,3.729,3.729,0,0,0-2.659-1.125ZM40.931,8.62,37.9,5.542,27.3,16.292l3.037,3.074ZM23.068,7.012a15.828,15.828,0,0,1,6.037,1.2l5.177-5.253A22.7,22.7,0,0,0,23.068,0,23.232,23.232,0,0,0,0,23.392,23.233,23.233,0,0,0,23.068,46.783a22.7,22.7,0,0,0,11.117-2.9L29.1,38.721a15.842,15.842,0,0,1-6.027,1.195A16.306,16.306,0,0,1,6.914,23.464,16.305,16.305,0,0,1,23.068,7.012Z" transform="translate(0 40.931) rotate(-90)" fill="#ba9a74"></path>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0.00hrs</h4>
                                    <p class="text">{{ __('frontstaticword.average_response_time') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.average_response_time_text') }}</small></span></p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55.833" height="33.5" viewBox="0 0 55.833 33.5">
                                    <path id="Icon_awesome-graduation-cap" data-name="Icon awesome-graduation-cap" d="M54.292,12.282,29.958,4.805a6.969,6.969,0,0,0-4.082,0L1.541,12.282a2.054,2.054,0,0,0,0,3.977l4.242,1.3a6.875,6.875,0,0,0-1.56,4.092A2.692,2.692,0,0,0,4,26.279L1.773,36.3A1.4,1.4,0,0,0,3.135,38H8.03a1.4,1.4,0,0,0,1.363-1.7L7.166,26.279A2.685,2.685,0,0,0,7.009,21.7a4.115,4.115,0,0,1,1.8-3.2l17.061,5.242a6.977,6.977,0,0,0,4.082,0L54.292,16.26a2.054,2.054,0,0,0,0-3.978ZM30.777,26.4a9.766,9.766,0,0,1-5.722,0L12.4,22.518l-1.237,9.9c0,3.084,7.5,5.583,16.75,5.583s16.75-2.5,16.75-5.583l-1.237-9.9L30.777,26.4Z" transform="translate(0 -4.5)" fill="#ba9a74"></path>
                                </svg>
                                <div class="content">
                                    <h4 class="title">0%</h4>
                                    <p class="text">{{ __('frontstaticword.conversion_to_package') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.conversion_to_package_text') }}</small></span></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>


                </div>
            </div>
        </div>
        <div class="item-sta">
            <div class="headtitle flex">
                <h2 class="title">{{ __('frontstaticword.overall_activity') }}</h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="all-time2-tab" data-toggle="tab" href="#all-time2" role="tab" aria-controls="all-time2" aria-selected="true">{{ __('frontstaticword.all_time') }}</a></li>
                    <li class="nav-item"><a class="nav-link" id="month2-tab" data-toggle="tab" href="#month2" role="tab" aria-controls="month2" aria-selected="false">{{ __('frontstaticword.month') }}</a></li>
                    <li class="nav-item"><a class="nav-link" id="week2-tab" data-toggle="tab" href="#week2" role="tab" aria-controls="week2" aria-selected="false">{{ __('frontstaticword.week') }}</a></li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-time2" role="tabpanel" aria-labelledby="all-time-tab2">
                    <div class="row">
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44.6" height="44.6" viewBox="0 0 44.6 44.6">
                                    <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-1 -1)">
                                        <path id="Path_31793" data-name="Path 31793" d="M43.6,23.3A20.3,20.3,0,1,1,23.3,3,20.3,20.3,0,0,1,43.6,23.3Z" transform="translate(0 0)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                        <path id="Path_31794" data-name="Path 31794" d="M18,9V21.18l8.12,4.06" transform="translate(5.3 2.12)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">{{$hours}}</h4>
                                    <p class="text">{{ __('frontstaticword.total_tutoring_hours') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.total_tutoring_hours_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42.225" height="38.978" viewBox="0 0 42.225 38.978">
                                    <g id="Icon_ionic-ios-wallet" data-name="Icon ionic-ios-wallet" transform="translate(-3.375 -4.499)">
                                        <path id="Path_31795" data-name="Path 31795" d="M39.51,11.25H9.465a6.1,6.1,0,0,0-6.09,6.09V34.392a6.1,6.1,0,0,0,6.09,6.09H39.51a6.1,6.1,0,0,0,6.09-6.09V17.34A6.1,6.1,0,0,0,39.51,11.25Z" transform="translate(0 2.994)" fill="#ba9a74"></path>
                                        <path id="Path_31796" data-name="Path 31796" d="M32.809,4.6,8.966,9.261C7.139,9.667,4.5,11.5,4.5,13.737a6.4,6.4,0,0,1,4.974-1.929H38.6V9.728a5.828,5.828,0,0,0-1.411-3.816h0A4.8,4.8,0,0,0,32.809,4.6Z" transform="translate(0.499 0)" fill="#ba9a74"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">${{$earned}}</h4>
                                    <p class="text">{{ __('frontstaticword.income_earned') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.income_earned_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="month2" role="tabpanel" aria-labelledby="month-tab2">
                    <div class="row">
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44.6" height="44.6" viewBox="0 0 44.6 44.6">
                                    <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-1 -1)">
                                        <path id="Path_31793" data-name="Path 31793" d="M43.6,23.3A20.3,20.3,0,1,1,23.3,3,20.3,20.3,0,0,1,43.6,23.3Z" transform="translate(0 0)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                        <path id="Path_31794" data-name="Path 31794" d="M18,9V21.18l8.12,4.06" transform="translate(5.3 2.12)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">{{$currentMonthHours}}</h4>
                                    <p class="text">{{ __('frontstaticword.total_tutoring_hours') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.total_tutoring_hours_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42.225" height="38.978" viewBox="0 0 42.225 38.978">
                                    <g id="Icon_ionic-ios-wallet" data-name="Icon ionic-ios-wallet" transform="translate(-3.375 -4.499)">
                                        <path id="Path_31795" data-name="Path 31795" d="M39.51,11.25H9.465a6.1,6.1,0,0,0-6.09,6.09V34.392a6.1,6.1,0,0,0,6.09,6.09H39.51a6.1,6.1,0,0,0,6.09-6.09V17.34A6.1,6.1,0,0,0,39.51,11.25Z" transform="translate(0 2.994)" fill="#ba9a74"></path>
                                        <path id="Path_31796" data-name="Path 31796" d="M32.809,4.6,8.966,9.261C7.139,9.667,4.5,11.5,4.5,13.737a6.4,6.4,0,0,1,4.974-1.929H38.6V9.728a5.828,5.828,0,0,0-1.411-3.816h0A4.8,4.8,0,0,0,32.809,4.6Z" transform="translate(0.499 0)" fill="#ba9a74"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">${{$earnedThisMonth}}</h4>
                                    <p class="text">{{ __('frontstaticword.income_earned') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.income_earned_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="week2" role="tabpanel" aria-labelledby="week-tab2">
                    <div class="row">
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44.6" height="44.6" viewBox="0 0 44.6 44.6">
                                    <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-1 -1)">
                                        <path id="Path_31793" data-name="Path 31793" d="M43.6,23.3A20.3,20.3,0,1,1,23.3,3,20.3,20.3,0,0,1,43.6,23.3Z" transform="translate(0 0)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                        <path id="Path_31794" data-name="Path 31794" d="M18,9V21.18l8.12,4.06" transform="translate(5.3 2.12)" fill="none" stroke="#ba9a74" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">{{$currentWeekHours}}</h4>
                                    <p class="text">{{ __('frontstaticword.total_tutoring_hours') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.total_tutoring_hours_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 inner-sta">
                            <div class="in-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42.225" height="38.978" viewBox="0 0 42.225 38.978">
                                    <g id="Icon_ionic-ios-wallet" data-name="Icon ionic-ios-wallet" transform="translate(-3.375 -4.499)">
                                        <path id="Path_31795" data-name="Path 31795" d="M39.51,11.25H9.465a6.1,6.1,0,0,0-6.09,6.09V34.392a6.1,6.1,0,0,0,6.09,6.09H39.51a6.1,6.1,0,0,0,6.09-6.09V17.34A6.1,6.1,0,0,0,39.51,11.25Z" transform="translate(0 2.994)" fill="#ba9a74"></path>
                                        <path id="Path_31796" data-name="Path 31796" d="M32.809,4.6,8.966,9.261C7.139,9.667,4.5,11.5,4.5,13.737a6.4,6.4,0,0,1,4.974-1.929H38.6V9.728a5.828,5.828,0,0,0-1.411-3.816h0A4.8,4.8,0,0,0,32.809,4.6Z" transform="translate(0.499 0)" fill="#ba9a74"></path>
                                    </g>
                                </svg>
                                <div class="content">
                                    <h4 class="title">${{$earnedThisWeek}}</h4>
                                    <p class="text">{{ __('frontstaticword.income_earned') }}<span class="fas fa-question tooltiptext"><small>{{ __('frontstaticword.income_earned_text') }}</small></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footerAssets')



@endsection
