<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>

        <div id="app">
            <root-component></root-component>
{{--            <navigation-component></navigation-component>--}}
{{--            <landing-home-component></landing-home-component>--}}
{{--            <landing-about-component></landing-about-component>--}}
{{--            <service-component></service-component>--}}
{{--            <core-team-component></core-team-component>--}}
{{--            <contact-component></contact-component>--}}
{{--            <footer-component></footer-component>--}}

        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
