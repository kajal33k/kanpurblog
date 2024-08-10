<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG - Real Victory Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    {{-- icon link--}}
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
{{-- css --}}
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
{{-- slider --}}
<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('component.header')
    @yield('content')
    @include('component.footer')

</body>
</html>