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

    </style>
</head>
<body>
    <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Agrega el token CSRF -->
        <img class= "logo" src = "{{asset('images/LOGO.jpeg')}}" alt = "logo">
        <img class= "aprendiz" src = "{{asset('images.instructor/aprendiz_instructor.PNG)}}" alt = "Aprendiz">
        

    </form>
</body>
</html>
