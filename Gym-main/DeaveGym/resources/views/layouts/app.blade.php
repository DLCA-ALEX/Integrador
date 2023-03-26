
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Deave Gym </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="{{asset('js/jquery-3.3.1.js') }} "> </script>
    <link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet" href="">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo.png') }}">

</head>
  <body class=" bg-dark text-white"> 
    
    <nav class="navbar navbar-expand-lg bg-dark text-white"> 
      <a href="{{ route('view1') }}" class="btn btn-dark" name="view1">
        <img src="{{ asset('img/brand/DV.png') }}" width="90" height="90" class="rounded float-start" alt="...">
      </a>
      
    
        <div class="container-fluid d-grid gap-2 d-md-flex justify-content-md-end">
           
            @if(auth()->check())

            <div>
                <a class="text-start fs-2 text-white">Bienvenid@  <b>{{ auth()->user()->name }} </b> </a>
            </div>             <div>
                <a class="btn btn-danger text-end" href="{{route ('login.destroy') }}">Cerrar Sesión</a>
            </div>
            
               
      @else
      <div >
        <a class="btn text-white" href="{{route ('login.index') }}" style="background-color: #07ca07; ">Iniciar Sesion</a>
        <a class="btn btn-success" href="{{route ('register.index') }}" style="background-color: #07ca07;">Registrarse</a>
     </div>
      @endif
           
           
          </div>
        </nav>
    @yield('content')



  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>