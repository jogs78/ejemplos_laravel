<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('asig','jose')}}">ASIGNAR</a> | <a href="{{route('des','jose')}}">DESASIGNAR</a> | <a href="/">INICIO</a>
<table>
    <thead>
        <tr>
            <td><img src="{{asset('/logos/isc.png')}}" alt=""></td>
            <td><img src="{{asset('/logos/tec50.png')}}" alt=""></td>
            <td><img src="{{asset('/logos/tecnm.png')}}" alt=""></td>
        </tr>
    </thead>    
</table>  
@yield('contenido')
</body>
</html>