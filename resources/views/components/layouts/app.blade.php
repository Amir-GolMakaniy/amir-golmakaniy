<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="light scroll-smooth">
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
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">

<x-layouts.app.header :title="$title ?? null"/>
{{ $slot }}
<x-layouts.app.footer/>

@fluxScripts
</body>
</html>