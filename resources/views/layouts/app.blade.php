<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo App</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>       
        <div class="container">
        @include('inc.navbar')
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                     @include('inc.sidebar')
                </div>
            </div>
        </div>   
        @include('inc.footer') 
    </body>
</html>
