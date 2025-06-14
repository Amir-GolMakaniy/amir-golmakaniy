<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <!-- Primary Meta Tags -->
    <title>امیر گلمکانی</title>
    <meta name="title" content="امیر گلمکانی"/>
    <meta name="description" content="طراحی سایت با Livewire و Tailwind CSS"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://amir-golmakaniy.ir/"/>
    <meta property="og:title" content="امیر گلمکانی"/>
    <meta property="og:description" content="طراحی سایت با Livewire و Tailwind CSS"/>
    {{--<meta property="og:image" content="{{ asset('1.jpg') }}"/>--}}

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content="https://amir-golmakaniy.ir/"/>
    <meta property="twitter:title" content="امیر گلمکانی"/>
    <meta property="twitter:description" content="طراحی سایت با Livewire و Tailwind CSS"/>
    {{--<meta property="twitter:image" content="{{ asset('1.jpg') }}"/>--}}

    <!-- Styles -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.green.css') }}">
</head>

<body>
<!-- Header -->
<header>
    <div class="container">
        <nav class="nav d-flex" id="home">
            <div class="logo">
                <a href="#">
                    امیر گلمکانی
                </a>
            </div>
            <!-- toggle icon -->
            <a href="javascript:void(0)" class="burger">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
                <span class="four"></span>

                <div class="close-icon">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M17.4492 14.4202L29.5992 2.67518C29.8723 2.36697 30.015 1.97052 29.9988 1.56504C29.9826 1.15956 29.8087 0.774925 29.5118 0.487995C29.215 0.201065 28.8171 0.0329733 28.3977 0.0173115C27.9782 0.00164963 27.5681 0.139571 27.2492 0.403514L15.0992 12.1485L2.94924 0.387402C2.6304 0.12346 2.22028 -0.0144603 1.80082 0.00120154C1.38136 0.0168634 0.983459 0.184954 0.686635 0.471884C0.389811 0.758814 0.215923 1.14345 0.199721 1.54893C0.183519 1.95441 0.326196 2.35086 0.59924 2.65907L12.7492 14.4202L0.582573 26.1652C0.408104 26.3096 0.266403 26.4873 0.166364 26.6872C0.0663255 26.8871 0.0101078 27.1048 0.00124197 27.3267C-0.00762386 27.5486 0.0310527 27.7698 0.114844 27.9766C0.198635 28.1833 0.325732 28.3711 0.488156 28.5281C0.650581 28.6851 0.844826 28.808 1.0587 28.889C1.27258 28.97 1.50146 29.0074 1.731 28.9988C1.96053 28.9902 2.18575 28.9359 2.39252 28.8392C2.5993 28.7425 2.78316 28.6055 2.93257 28.4368L15.0992 16.6918L27.2492 28.4368C27.5681 28.7008 27.9782 28.8387 28.3977 28.823C28.8171 28.8074 29.215 28.6393 29.5118 28.3524C29.8087 28.0654 29.9826 27.6808 29.9988 27.2753C30.015 26.8698 29.8723 26.4734 29.5992 26.1652L17.4492 14.4202Z"/>
                    </svg>

                </div>
            </a>
            <div class="navigation-bar">
                <ul id="nav">
                    <li class="active"><a href="#">خانه</a></li>
                    <li><a href="#about">درباره من</a></li>
                    <li><a href="#services">سرویس ها</a></li>
                    <li><a href="#portfolio">نمونه کار ها</a></li>
                    <li><a href="#contact">تماس با من</a></li>
                    <li class="darkmode-btn d-desktop">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('images/brightness.svg') }}" alt="brightness" class="bright">
                            <img src="{{ asset('images/moon.svg') }}" alt="moon" class="dark"> </a>
                    </li>
                </ul>
            </div>
            <div class="darkmode-btn d-mobile"><a href="javascript:void(0)">
                    <img src="{{ asset('images/brightness.svg') }}" alt="brightness" class="bright">
                    <img src="{{ asset('images/moon.svg') }}" alt="moon" class="dark"> </a></div>
        </nav>
    </div>
</header>