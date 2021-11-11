<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>
<body>
        <h2>
            Hola {{$name}}, Bienvenido a mundofactura!
        </h2>
        <p>por favor confirma tu dirección de correo electrónico</p>
        <p> Puedes dar click en el siguiente enlace </p>

        <a href="{{url('register/verify/'. $confirmation_code)}}">
            Click para confirmar correo electrónico 
        </a>
<body>
    </html>