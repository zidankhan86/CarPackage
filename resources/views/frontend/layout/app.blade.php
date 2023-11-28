<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Car Package</title>

                {{-- style --}}

        @include('frontend\components\fixed\style')

    </head>
    <body>

                {{-- header --}}

        @include('frontend\components\fixed\header')

                {{-- hero --}}

        @include('frontend\components\fixed\hero')


        @yield('content')



              {{-- footer --}}

        @include('frontend\components\fixed\footer')

                {{-- js --}}
        @include('frontend\components\fixed\script')


    </body>
</html>
