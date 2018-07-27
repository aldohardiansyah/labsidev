<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Laboratorium Sistem Informasi | @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/aldo.css')}}" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="{{ asset('font-awesome/css/all.css')}}" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script> {{--jquery 3.3.1--}}
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

    </head>

    <body>

        @if (Auth::guest())
            @include('templates/navbar')
        @elseif (Auth::user()->role=='Asisten')
            @include('templates/navbar_ast')
        @elseif (Auth::user()->role=='Staff')
            @include('templates/navbar_admstaff')
        @elseif (Auth::user()->role=='Admin')
            @include('templates/navbar_adm')
        @endif


        @yield('content')

        <!-- Footer -->
        <footer class="py-5 bg-white">
         <hr>
          <div class="container">
            <p class="m-0 text-center text-secondary">Copyright &copy; 2018 Aldo Hardiansyah</p>
          </div>
          <!-- /.container -->
        </footer>



    </body>

</html>
