<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Empleados y Empresas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Sistema de Administración</h1>
        
        <div class="row">
            <!-- Opción para Empleados -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="card-title">Gestión de Empleados</h3>
                        <p class="card-text">Administrar empleados en el sistema</p>
                        <a href="{{ route('empleados.index') }}" class="btn btn-primary btn-block">Ver Empleados</a>
                        <a href="{{ route('empleados.create') }}" class="btn btn-success btn-block">Agregar Empleado</a>
                    </div>
                </div>
            </div>

            <!-- Opción para Empresas -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="card-title">Gestión de Empresas</h3>
                        <p class="card-text">Administrar empresas en el sistema</p>
                        <a href="{{ route('empresas.index') }}" class="btn btn-primary btn-block">Ver Empresas</a>
                        <a href="{{ route('empresas.create') }}" class="btn btn-success btn-block">Agregar Empresa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
