<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body>

        <nav class="navbar bg-dark">
            <div class="container-fluid ">
              <a class="navbar-brand text-center" href="{{route('home')}}">
                <img src="{{asset('img/logoHover2022.png')}}" alt="Logo" width="100" height="24" class="d-inline-block align-text-top ">
               
              </a>
            </div>
          </nav>
          <br>
   
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark py-4 text-center">
     
        @auth

          <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline">dashboard</a>
        
        @else
   
      <a href="{{url('login')}}" class="text-sm text-gray-700 underline">login</a>
      <a href="{{url('register')}}"class="text-sm text-gray-700 underline">Register</a>

      @endif
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>