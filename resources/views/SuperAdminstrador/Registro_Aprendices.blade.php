<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Aprendiz</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>
    <div class="container">
        <h2>Registro de Aprendiz</h2>

        <form action="{{ route('apprentice.store') }}" method="post">
            @csrf

            <label for="identification">Identificación:</label>
            <input type="text" id="identification" name="identification" required>

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="last_name">Apellido:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="program">Programa:</label>
            <input type="text" id="program" name="program" required>

            <label for="file">Ficha:</label>
            <input type="text" id="file" name="file" required>

            <label for="phone">Teléfono:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="start_contract">Contrato inicio:</label>
            <input type="text" id="start_contract" name="start_contract" required>

            <label for="contract_end">Contrato fin:</label>
            <input type="text" id="contract_end" name="contract_end" required>

            <label for="nit_company">NIT Empresa:</label>
            <input type="text" id="nit_company" name="nit_company" required>

            <label for="business_name">Razón Social:</label>
            <input type="text" id="business_name" name="business_name" required>

            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" required>

            <label for="city">Ciudad:</label>
            <input type="text" id="city" name="city" required>

            <label for="assigned_instructor">Instructor Asignado:</label>
            <input type="text" id="assigned_instructor" name="assigned_instructor" required>

            <label for="date_assignment">Fecha Asignación:</label>
            <input type="text" id="date_assignment" name="date_assignment" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>
