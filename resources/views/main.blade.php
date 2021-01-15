<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    
</head>
<body>
    <div class="wrapper">
        <div class="text-center">
            <h4>
                @yield("title")
            </h4>
        </div>
        @yield("content")
    </div>
    <script>
        $(document).ready(() => {
            setInterval(()=>{
                $(`csrf`).html(`@csrf`);
            },1)
        });
    </script>
    @yield("js")
</body>
</html>