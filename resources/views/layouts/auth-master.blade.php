<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href=" {{asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="/logo-itslp.png">

    <title>Sistemea Escolar | Login</title>
   

   {{--  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 --}}
    {{-- <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.6.3/css/all.css')}}">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v6.2.0/css/all.css')}}"> --}}
</head>
<body>

    <main class="container">
        @yield('content')
    </main>
    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>