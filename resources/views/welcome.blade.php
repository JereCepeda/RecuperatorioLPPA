<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Cover Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">


    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Cover</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Bienvenido a SysWebvice.</h1>
    <p class="lead">
      @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}"><button class="btn btn-lg btn-secondary btn-block" type="submit">Login</button></a>
                @else
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('login') }}"><button class="btn btn-lg btn-secondary btn-block" type="submit">Login</button></a>
                        </div>
                            @if (Route::has('register'))
                            <div class="col">
                                <a href="{{ route('register') }}"><button class="btn btn-lg btn-secondary btn-block" type="submit">Register</button></a>
                            </div>
                            @endif
                        </div>
                    
                @endauth
            </div>
        @endif
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/can4ll0n">@can4ll0n</a>.</p>
    </div>
  </footer>
</div>
    </body>
</html>
