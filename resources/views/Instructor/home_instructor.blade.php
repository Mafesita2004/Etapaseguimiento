<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .logo{
            position: absolute;
            top: 10px;
            left: 96px;
            width: 89px;
            height: auto;
        }
        .Aprendiz{
            position: absolute;
            top: 200px;
            left: 500px;
            width: 110px;
            height: auto;
        }
        .Reporte{
            position: absolute;
            top: 200px;
            left: 900px;
            width: 93px;
            height: auto;
        }
        .centrado{
            text-align: center;
        }
       

    </style>
</head>
<body>
    <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Agrega el token CSRF -->
        <img class= "logo" src = "{{asset('images/LOGO.jpeg')}}" alt = "logo">
        <img class= "Aprendiz" src = "{{asset('images/aprendiz_instructor.PNG')}}" alt = "Aprendiz">
        <img class= "Reporte" src = "{{asset('images/reportes_instructor.PNG')}}" alt = "Reporte">
    <div class="centrado">
        <h1 >INSTRUCTOR</h1>
    </div>
    <div class="recuadro">
        


    </form>
</body>
</html>
