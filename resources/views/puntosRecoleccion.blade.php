@extends('components.navBar')

@section('content')

<div class="my-4 d-flex justify-content-center">
    <span class="h1 ">Puntos de recolección</span>
</div>

<div class="m-5">
    <div class="d-flex flex-row">
        <div class="container col-6">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col"> -------</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Madhouse</td>
                        <td>Vidrio</td>
                        <td>Centro</td>
                        <td>@mdo</td>
                        <td>12345</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>EcoCycle</td>
                        <td>Papel</td>
                        <td>Barrio Residencial</td>
                        <td>@johndoe</td>
                        <td>67890</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>EcoCycle</td>
                        <td>Plástico</td>
                        <td>Zona Industrial</td>
                        <td>@emilysmith</td>
                        <td>13579</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>GreenTech Recycle</td>
                        <td>Metal</td>
                        <td>Centro Comercial</td>
                        <td>@michaeljohnson</td>
                        <td>24680</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Renewable Resources</td>
                        <td>Cartón</td>
                        <td>Barrio Ecológico</td>
                        <td>@sophiawilliams</td>
                        <td>36912</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Renewable Resources</td>
                        <td>Vidrio</td>
                        <td>Plaza Sustentable</td>
                        <td>@oliviamiller</td>
                        <td>57913</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>

            <a class='btn btn-success mt-2' href='#' data-bs-toggle='modal' data-bs-target='#CrearPuntoR'>Agregar Punto de Recolección</a>
            
        </div>
        
        
        <div class="container">
            {{-- <div class="mapa"></div> --}}
            <img src= {{url('images/test.jpg')}} class="mapa">
        </div>
    
        
    </div>


</div>

@include('modals.agregarPuntoR')

@include('modals.modificarPuntoR')

@include('modals.eliminarPuntoR')


@stop