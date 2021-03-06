<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--<link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

    <div id="app">

        @include('includes.menu')
        
 

            @yield('content')
    
    </div>


    <hr style="padding-top:50px;">
    <p style="text-align:center;"> Lype Desenvolvimentos LTDA. TM.</p>
<!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
    
$(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#nome').text($(this).data('nome'));
  $('#cargo').text($(this).data('cargo'));
  });
</script>
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
    

</body>
</html>
