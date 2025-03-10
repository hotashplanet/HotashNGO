<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('findo/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/icofont.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/modal-video.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('findo/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('findo/css/responsive.css') }}">

    <link rel="icon" type="image/png" href="{{ asset(setting('general', 'favicon')) }}">

    @stack('styles')
</head>
<body>

<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="pre-box-one">
                <div class="pre-box-two"></div>
            </div>
        </div>
    </div>
</div>

@include('pages.partials.header')

{!! MenuH::render('Main Menu', 'pages.partials.navbar') !!}

@if($message = session('flash.banner'))
<div class="container" style="margin-top: 5rem;">
    <div class="alert alert-{{ session('flash.bannerStyle') }}">{{ $message }}</div>
</div>
@endif

{{ $slot }}


<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset(setting('general', 'logo')) }}" style="height: 3.125rem; width: 10.625rem;" alt="Logo">
                        </a>
                        <p>{{ setting('general', 'tagline') }}</p>
                        <ul>
                            <li>
                                <a href="{{ setting('social', 'facebook') }}" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('social', 'twitter') }}" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('social', 'instagram') }}" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('social', 'youtube') }}" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-causes">
                        <h3>@lang('Recent News')</h3>
                        @foreach(recent_news(2) as $news)
                        <div class="cause-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ $news->getFirstMediaUrl('news', '430x250') }}" alt="Cause">
                                </li>
                                <li>
                                    <h3>
                                        <a href="{{ route('news.show', $news) }}">{{ $news->title }}</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>@lang('Quick Links')</h3>
                        {!! MenuH::render('Quick Links', 'pages.partials.quick-links') !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>@lang('Contact Info')</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="javascript:void(0)">{{ setting('general', 'address') }}</a>
                                </li>
                                <li>
                                    <i class="icofont-email"></i>
                                    <a href="mailto:{{ setting('general', 'contact_email') }}">{{ setting('general', 'contact_email') }}</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:{{ setting('general', 'contact_phone') }}">{{ setting('general', 'contact_phone') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright ©{{ date('Y') }} {{ config('app.name') }}. Developed By <a href="https://cyber32.com/" target="_blank">Cyber 32</a></p>
        </div>
    </div>
</footer>


<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/jquery.meanmenu.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/jquery-modal-video.min.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/wow.min.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/lightbox.min.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/owl.carousel.min.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/odometer.min.js"></script>
<script src="https://templates.hibootstrap.com/findo/default/assets/js/jquery.appear.min.js"></script>

<script src="https://templates.hibootstrap.com/findo/default/assets/js/jquery.nice-select.min.js"></script>

<script src="{{ asset('findo/js/custom.js') }}"></script>

@stack('scripts')
</body>
</html>
