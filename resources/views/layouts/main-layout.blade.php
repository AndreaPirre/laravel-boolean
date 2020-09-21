<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>First Laravel - La molisana</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>


        <div class="container">
            @include('partials.header')




            <div class="tipi_pasta">

                @yield('content')


            </div>




            @include('partials.footer')
        </div>

    </body>
</html>
