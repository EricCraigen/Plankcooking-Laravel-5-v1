<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @yield('title')
</head>

<body>    
    <header>
        <h1>HEADER GOES HERE</h1>
    </header>
        <main>
            @yield('content')
        </main>
    <footer>
        <h1>FOOTER GOES HERE</h1>
    </footer>
</body>

</html>
