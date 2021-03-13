<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<!--    <link rel="stylesheet" href="../../../public/assets/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/Navigation-with-Button.css')}}">

<!--    <link rel="stylesheet" href="../../../public/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="../../../public/assets/css/styles.css">-->


</head>
<body>
    @include('layouts.header')
    <div>


        @yield('content')

    </div>


</body>
