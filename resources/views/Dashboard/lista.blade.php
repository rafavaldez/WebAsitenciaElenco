<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mini Finance - Wallet Page</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="{{ asset('recursosdash/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{ asset('recursosdash/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{ asset('recursosdash/css/apexcharts.css')}}" rel="stylesheet">

        <link href="{{ asset('recursosdash/css/tooplate-mini-finance.css')}}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.production.min.js"></script>
    <!-- Estilos CSS de Grid.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" />



<!--

Tooplate 2135 Mini Finance

https://www.tooplate.com/view/2135-mini-finance

Bootstrap 5 Dashboard Admin Template

-->
    </head>
    
    <body>
        <header class="navbar sticky-top flex-md-nowrap">
            <div class="col-md-3 col-lg-3 me-0 px-3 fs-6">
                <a class="navbar-brand" href="index.html">
                    <i class="bi-box"></i>
                    Mini Finance
                </a>
            </div>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="custom-form header-form ms-lg-3 ms-md-3 me-lg-auto me-md-auto order-2 order-lg-0 order-md-0" action="#" method="get" role="form">
                <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
            </form>

            <div class="navbar-nav me-lg-2">
                <div class="nav-item text-nowrap d-flex align-items-center">
                    <div class="dropdown ps-3">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-bell"></i>
                            <span class="position-absolute start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </a>

                        <ul class="dropdown-menu notifications-block-wrap bg-white shadow">
                            <small>Notifications</small>

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-success">
                                        <i class="notifications-icon bi-check-circle-fill"></i>
                                    </div>

                                    <div>
                                        <span>Your account has been created successfuly.</span>

                                        <p>12 days ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-info">
                                        <i class="notifications-icon bi-folder"></i>
                                    </div>

                                    <div>
                                        <span>Please check. We have sent a Daily report.</span>

                                        <p>10 days ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="notifications-block">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-danger">
                                        <i class="notifications-icon bi-question-circle"></i>
                                    </div>

                                    <div>
                                        <span>Account verification failed.</span>

                                        <p>1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown ps-1">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-social bg-white shadow">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/search.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Google</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/spotify.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Spotify</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/telegram.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Telegram</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/snapchat.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Snapchat</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/tiktok.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Tiktok</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/youtube.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Youtube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/medium-shot-happy-man-smiling.jpg" class="profile-image img-fluid" alt="">
                        </a>
                        <ul class="dropdown-menu bg-white shadow">
                            <li>
                                <div class="dropdown-menu-profile-thumb d-flex">
                                    <img src="images/medium-shot-happy-man-smiling.jpg" class="profile-image img-fluid me-3" alt="">

                                    <div class="d-flex flex-column">
                                        <small>Thomas</small>
                                        <a href="#">thomas@site.com</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="dropdown-item" href="profile.html">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="setting.html">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="help-center.html">
                                    <i class="bi-question-circle me-2"></i>
                                    Help
                                </a>
                            </li>

                            <li class="border-top mt-3 pt-2 mx-4">
                                <a class="dropdown-item ms-0 me-0" href="#">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                    <div class="position-sticky py-4 px-3 sidebar-sticky">
                        <ul class="nav flex-column h-100">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">
                                    <i class="bi-house-fill me-2"></i>
                                    Overview
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="wallet.html">
                                    <i class="bi-wallet me-2"></i>
                                    My Wallet
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="profile.html">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="setting.html">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="help-center.html">
                                    <i class="bi-question-circle me-2"></i>
                                    Help Center
                                </a>
                            </li>

                            <li class="nav-item featured-box mt-lg-5 mt-4 mb-4">
                                <img src="images/credit-card.png" class="img-fluid" alt="">

                                <a class="btn custom-btn" href="#">Upgrade</a>
                            </li>

                            <li class="nav-item border-top mt-auto pt-2">
                                <a class="nav-link" href="#">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    

                    <div class="row my-4">
                        <div class="col-lg-12 col-12">
                            <div class="custom-block bg-white">
                                @php
                                    // Convertir la fecha a un objeto Carbon
                                    $fechaCarbon = \Carbon\Carbon::parse($asistencia->fecha);
                                @endphp
                            
                                <h5 class="mb-4">Asistencia {{ $fechaCarbon->format('d/m/Y') }}</h5>
                            


                                <!-- Incluir jQuery -->
                                

                                <!-- Tu script que utiliza jQuery -->
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<button class="btn btn-success btn-agregar">
    Agregar
</button>


<script>
    $(document).ready(function(){
        $(".btn-agregar").click(function(){
            $("#agregarModal").modal('show');
        });

        // Cerrar el modal cuando se hace clic en el botón "Cerrar" o en el icono "x"
        $(".modal-header .close, .modal-footer .btn-secondary").click(function(){
            // Limpiar los campos del modal
            $("#codigo").val('');
            // Ocultar el modal
            $("#agregarModal").modal('hide');
            
        });

        // Limpiar los campos del modal cuando se oculta
        $("#agregarModal").on('hidden.bs.modal', function () {
            $("#codigo").val('');
        });

        // Enviar la fecha por AJAX al presionar "Guardar cambios"
        $(".modal-body .btn-success").click(function(){
            var codigo = $('#codigo').val();
            var id_fecha = {{ $asistencia->id }};
            var token = $('meta[name="csrf-token"]').attr('content');

            // Realiza la solicitud AJAX
            $.ajax({
                url: '{{ route("anadir_estudiante") }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: { codigo: codigo, id_fecha: id_fecha },
                success: function(response) {
                    console.log(response);

                    if(response.estudiantesConAsistencia){
                        actualizarTabla(response.estudiantesConAsistencia);

                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Se registro a " + response.estudiante.Nombres, // Agregar el nombre del estudiante
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#codigo').val('');
                    }else{
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: ""+response+" a este estudiante", // Agregar el nombre del estudiante
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                    
                    
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                            position: "center",
                            icon: "error",
                            title: "No se encontro a este bro"+xhr.responseText, // Agregar el nombre del estudiante
                            showConfirmButton: false,
                            timer: 1500
                        });
                }
            });
        });

        function actualizarTabla(data) {
            // Obtener la referencia a la tabla
            var tabla = $(".account-table tbody");

            // Limpiar el contenido de la tabla
            tabla.empty();

            // Recorrer los datos recibidos y agregar cada fila a la tabla
            $.each(data, function(index, item) {
                var fila = "<tr>" +
                    "<td scope='row'>" + item.id + "</td>" +
                    "<td scope='row'>" + item.Nombres + "</td>" +
                    "<td scope='row'>" + item.codigou + "</td>" +
                    "<td scope='row'>" + item.hora + "</td>" +
                    "<td>" +
                    // Enlace de Ver
                    "<a href='{{ route('asistencia_view', '') }}/" + item.id + "' class='btn btn-primary'>" +
                    "<i class='fas fa-eye'></i> Ver" +
                    "</a>  " +
                    // Enlace de Editar
                    "<a href='{{ route('editar_asistencia', '') }}/" + item.id + "' class='btn btn-success'>" +
                    "<i class='fas fa-edit'></i> Editar" +
                    "</a>" +
                    "</td>" +
                    "</tr>";

                tabla.append(fila);
            });

        }



    });
</script>

<br><br>

<div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tomado de Lista</h5>
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Campo para insertar código -->
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="codigo" name="codigo" style="margin-right: 10px;">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button" id="btnAgregar">
                                <i class="fas fa-plus"></i> Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<script>
    var estudiantesConAsistencia = <?php echo json_encode($estudiantesConAsistencia); ?>;
    document.addEventListener('DOMContentLoaded', function() {
        const table = document.querySelector('.account-table');

        // Verificar si el contenedor está vacío
        if (table.hasChildNodes()) {
            // Si hay nodos hijos, eliminarlos para vaciar el contenedor
            while (table.firstChild) {
                table.removeChild(table.firstChild);
            }
        }

        const grid = new gridjs.Grid({
    columns: [
        'Id',
        'Nombres',
        'Codigo',
        'Hora',
        {
            name: 'Acciones',
            formatter: (cell, row) => {
                const actionsCell = document.createElement('div');
                // Creamos el botón de Ver
                const verButton = document.createElement('button');
                verButton.className = 'btn btn-primary';
                verButton.innerHTML = '<i class="fas fa-eye"></i> Ver';
                verButton.addEventListener('click', () => {
                    // Aquí puedes manejar el evento del botón Ver si es necesario
                    window.location.href = `/asistencia_view/${row.cells[0].data}`;
                });
                // Creamos el botón de Editar
                const editarButton = document.createElement('button');
                editarButton.className = 'btn btn-success';
                editarButton.innerHTML = '<i class="fas fa-edit"></i> Editar';
                editarButton.addEventListener('click', () => {
                    // Aquí puedes manejar el evento del botón Editar si es necesario
                    window.location.href = `/editar_asistencia/${row.cells[0].data}`;
                });
                // Agregamos los botones a la celda
                actionsCell.appendChild(verButton);
                actionsCell.appendChild(editarButton);
                // Devolvemos la celda completa
                return actionsCell;
            }
        }
    ],
    data: estudiantesConAsistencia.map(estudiante => [
        estudiante.id,
        estudiante.Nombres,
        estudiante.codigou,
        estudiante.hora
    ]),
    pagination: {
        enabled: true,
        limit: 10,
        summary: true
    },
    resizable: true,
    sort: true,
    search: {
        enabled: true,
        placeholder: 'Buscar...'
    }
});


        // Renderizar la cuadrícula Grid.js en el contenedor vacío
        grid.render(table);
    });
</script>









                                <div class="table-responsive">
                                    <table class="account-table table">
                                        <thead>
                                            <tr>
                                                

                                                

                                            </tr>
                                        </thead>
                                        

                                        <tbody>
                                            
                                        </tbody>
                                        
                                        
                                    </table>


                                    
                                </div>



                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">Prev</span>
                                            </a>
                                        </li>

                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>




                        



                        

                        

                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-12 col-12">
                                    <p class="copyright-text">Copyright © Mini Finance 2048 
                                    - Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
                                </div>

                            </div>
                        </div>
                    </footer>
                </main>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        
        <script src="{{ asset('recursoslogui/js/jquery.min.js')}}"></script>
        <script src="{{ asset('recursoslogui/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('recursoslogui/js/apexcharts.min.js')}}"></script>
        <script src="{{ asset('recursoslogui/js/custom.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>