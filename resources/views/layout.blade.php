<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/navbar.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <button class="menu-btn">&#9776;</button>
        <div class="logo">
          <a href="/dashboard"><img src="/image/bancodos.png" alt=""></a>
        </div>
        <ul class="nav-links">
          <li><a href="/dashboard">Inicio</a></li>
          <li><a href="/dashboard">usuarios</a></li>
          <li><a href="/dashboard">mascotas</a></li>
          <li><a href="{{url('signout')}}">cerrar sesión</a></li>
        </ul>
      </nav>
      <div class="container-fluid">
        @yield('container')
      </div>

</body>
</html>
