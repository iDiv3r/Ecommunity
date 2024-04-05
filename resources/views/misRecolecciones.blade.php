@extends('components.navBar')

@section('content')

<div class="my-4 d-flex justify-content-center">
    <span class="h1 ">Mis Recolecciones</span>
</div>

<div class="m-5">
    <div class="d-flex flex-row">

        <div class="container col-6">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Punto de recolección</th>
                        <th scope="col">Fecha y hora</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Status</th>
                        <th scope="col"> ------- </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Papel</td>
                        <td>Renewable Resources Inc.</td>
                        <td>Lunes 2:00</td>
                        <td>2 Kg</td>
                        <td>Pendiente</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarRecoleccion'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarRecoleccion'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Papel</td>
                        <td>Green Eco Solutions</td>
                        <td>Martes 10:00</td>
                        <td>5 Kg</td>
                        <td>Pendiente</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarRecoleccion'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarRecoleccion'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Vidrio</td>
                        <td>Recicla Fácil</td>
                        <td>Miércoles 15:00</td>
                        <td>3 Kg</td>
                        <td>En proceso</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarRecoleccion'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarRecoleccion'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Plástico</td>
                        <td>Reciclaje Verde</td>
                        <td>Jueves 14:00</td>
                        <td>4 Kg</td>
                        <td>Completado</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarRecoleccion'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarRecoleccion'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Papel</td>
                        <td>Recycling Innovations</td>
                        <td>Viernes 9:00</td>
                        <td>6 Kg</td>
                        <td>Pendiente</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarRecoleccion'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarRecoleccion'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Vidrio</td>
                        <td>Green Earth Recycling</td>
                        <td>Sábado 11:00</td>
                        <td>2.5 Kg</td>
                        <td>En proceso</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarRecoleccion'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarRecoleccion'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <a class='btn btn-success mt-2' href='#' data-bs-toggle='modal' data-bs-target='#AgregarRecoleccion'>Agregar Recoleccion</a>

        </div>
    
        <div class="container">
            {{-- <div class="mapa"></div> --}}
            <img src= {{url('images/test.jpg')}} class="mapa">
        </div>
        
    </div>


</div>

@include('modals.agregarRecoleccion')

@include('modals.modificarRecoleccion')

@include('modals.eliminarRecoleccion')


@stop