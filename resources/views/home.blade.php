@extends('layouts/main')

@section('titulo_pagina', 'Home')

@section('contenido')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cssEstilo/style.css') }}">
</head>

<body>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <link rel="stylesheet" href="{{ asset('cssEstilo/home.css') }}">


    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Ayuntamiento de Iguala</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-cart"></i>
                        <span>Requisiciones</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="couter" class="sidebar-link">Requisiciones</a>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth1" aria-expanded="false" aria-controls="auth1">
                        <i class="lni lni-package"></i>
                        <span>Respuesta</span>
                    </a>
                    <ul id="auth1" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="indexSeeReponr" class="sidebar-link">Atender reportes</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth2" aria-expanded="false" aria-controls="auth2">
                        <i class="lni lni-package"></i>
                        <span>Almacén</span>
                    </a>
                    <ul id="auth2" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="whare" class="sidebar-link">Administración de almacén</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth3" aria-expanded="false" aria-controls="auth3">
                        <i class="lni lni-package"></i>
                        <span>Administración</span>
                    </a>
                    <ul id="auth3" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="req" class="sidebar-link">Administración de reportes </a>
                        </li>
                    </ul>
                    <ul id="auth3" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="employ" class="sidebar-link">Administración de empleados</a>
                        </li>
                    </ul>
                    <ul id="auth3" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="rpt" class="sidebar-link">Administración de requisiciones</a>
                        </li>
                    </ul>
                    <ul id="auth3" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="returnmail" class="sidebar-link">Administración de respuestas</a>
                        </li>
                    </ul>
                </li>

            </ul>


            <div class="sidebar-footer">
                <a href="{{ route('login') }}" class="sidebar-link" onclick="return confirmLogout(event)">
                    <i class="lni lni-exit"></i>
                    <span>Cerrar sesión</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <div class="text-center">
                <h1>Bienvenido usario empleado del centro de computo</h1>
            </div>
            <img src="imagen/Logo.png" alt="Imagen de Usuario" class="user-image">
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('jsFuciones/script.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Verifica si hay un mensaje de éxito en la sesión
    const successMessage = document.getElementById('success-message');

    if (successMessage) {
        // Mostrar el mensaje de éxito si está presente
        successMessage.classList.add('show');

        // Después de un tiempo (por ejemplo, 5 segundos), se oculta automáticamente
        setTimeout(() => {
            successMessage.classList.remove('show');
            successMessage.style.display = 'none'; // Esto ocultará completamente el contenedor
        }, 5000); // 5000ms = 5 segundos
    }

    // Escuchar el evento 'Enter' para cerrar el mensaje
    document.addEventListener('keydown', function(event) {
        if (event.key === "Enter") {
            // Cierra el mensaje de éxito al presionar Enter
            if (successMessage) {
                successMessage.classList.remove('show');
                successMessage.style.display = 'none'; // Esto ocultará completamente el contenedor
            }
        }
    });
});


        // Función de confirmación de cierre de sesión
        function confirmLogout(event) {
            event.preventDefault(); // Evitar que el enlace se ejecute inmediatamente
            const confirmacion = confirm("¿Estás seguro de que deseas cerrar sesión?");
            if (confirmacion) {
                window.location.href = event.currentTarget.href; // Redirigir si el usuario confirma
            }
            // No hacer nada si el usuario cancela
            return false;
        }
    </script>
</body>

@endsection
