<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h2{
            color:white
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('{{ asset('images/muñeco.png') }}');
            background-position: 500px 150px; /* Posición (x:240, y:226) */
            background-size: 500px 500px; /* Tamaño (w:673, h:922) */
            background-repeat: no-repeat;
            position: relative;
           

        }
        .top-bar {
            width: 100%;
            background-color: #04324D;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: absolute;
            top: 120;
            left: 0;
            z-index: 2; /* Asegura que la barra esté por encima de otros elementos */
        }
        
        /*imagen logo adicional */
        body::before{
            content:
        }
        /* Estilo adicional para el logo */
        .logo {
            position: absolute;
            top: 10px; 
            left: 96px; 
            width: 89px; 
            height: auto;
        }
        form {
            background-color: #04324D;
            padding: 40px;
            width:250px;
            border-radius: 8px;
            box-shadow: 0 10px 4px rgba(0, 0, 0, 0.1);
            margin-left: 50%; /* Mueve el formulario a la derecha */
            margin-right: 20px; /* Ajusta el margen derecho según sea necesario */
           
            z-index: 1;
           
        }
        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        
    </div>
    <form action="{{route('login')}}"  method="POST" enctype="multipart/form-data">
        @csrf <!-- Agrega el token CSRF -->
        <h2>Usuario</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <img class="logo" src="{{ asset('images/logo.jpeg') }}" alt="Logo">
    </form>
</body>
</html>

