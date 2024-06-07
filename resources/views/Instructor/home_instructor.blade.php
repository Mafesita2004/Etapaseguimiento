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
            left: 70px;
            width: 75px;
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

            margin: 2rem;
        }
      
        body{
            margin: 20px;
        }
        .recuadro{
            background-color: #E7E7E7;
            
            width: 1110px;
            height: 500px;
            margin: auto;
            align-items: 1000px;
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
    <div class="recuadro"></div>

        


    </form>
</body>
</html>
