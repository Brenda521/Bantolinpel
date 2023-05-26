<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Login.css">
    <script src="/public/css/login.css"></script>
    <title>Document</title>
</head>
<body>

    <div class="padre">
        <div class="bodyL">
             <div class="box">
                <form class="form">
                    @csrf
                    <img src="/image/banco.png" alt="">
                    <div class="email">
                         <p class="Cor">Correo</p>
                         <input class="Correo" type="email" name="email" placeholder="Ingrese su correo" required="required">
                         {{--@error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror--}}
                    </div>
                    <div class="password">
                         <p class="Con">Contraseña</p>
                        <input class="pass" type="password" name="password" placeholder="Ingrese su contraseña" required="required">
                        {{--@error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror--}}
                    </div>
                    <div class="button">
                       <button class="BtnR" type="submit">Iniciar Sesión</button>
                    </div>
                </form>
             </div>
        </div>
    </div>

</body>
</html>
