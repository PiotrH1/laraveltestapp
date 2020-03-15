<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
<title>{{config('app.name', 'MyLaravelApp')}}</title>
</head>
<body>
    @include ('include.navbar')
    <div class="container">
        @include ('include.messages')
        @yield('content')
    </div>
    
    {{-- that doesnot work
    <script src="/vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
     --}}
</body>
</html>


