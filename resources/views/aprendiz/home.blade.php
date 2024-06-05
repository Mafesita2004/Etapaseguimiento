<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('homeaprendiz.store')}}"  method="POST" enctype="multipart/form-data">
        @csrf 
        <h1>APRENDIZ</h1>
    <div>
        <p>NOMBRE DE USUARIO</p>
        <P>Programa</P>
        <p>No de ficha</p>
    </div>
    <h2>Instructor asignado</h2>
    <p>Mariani Dorado</p>
    <p>Correo</p>
    <p>Telefono</p>
    
    <h3>LINEA TEMPORAL -ETAPA DE SEGUIMIENTO-</h3>
    <img class="lineaTiempo" src="{{ asset('images/lineaTiempo.png')}}" alt='lineaTiempo'>

    </form>
</body>
</html>