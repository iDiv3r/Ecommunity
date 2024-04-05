@extends('components.navBar')

@section('content')

<div class="my-4 d-flex justify-content-center">
    <span class="h1 ">Lista de Empresas</span>
</div>

<div class="m-5">
    <div class="d-flex flex-row">

        <div class="container col-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col"> ------- </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Madhouse</td>
                        <td>Vidrio</td>
                        <td>Centro</td>
                        <td>madhouse@gmail.cum</td>
                        <td>4422342323</td>
                        <td>11-02-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>EcoCycle</td>
                        <td>Plástico</td>
                        <td>Zona Industrial</td>
                        <td>ecocycle@gmail.com</td>
                        <td>5551234567</td>
                        <td>11-04-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>GreenTech Recycle</td>
                        <td>Electrónicos</td>
                        <td>Parque Tecnológico</td>
                        <td>greentechrecycle@yahoo.com</td>
                        <td>6669876543</td>
                        <td>11-05-2022</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>4</td>
                        <td>Renewable Resources Inc.</td>
                        <td>Papel</td>
                        <td>Centro Comercial</td>
                        <td>renewableresources@hotmail.com</td>
                        <td>3334445556</td>
                        <td>11-06-2021</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>5</td>
                        <td>EcoFriendly Solutions</td>
                        <td>Vidrio</td>
                        <td>Barrio Ecológico</td>
                        <td>ecofriendlysolutions@gmail.com</td>
                        <td>9998887776</td>
                        <td>11-07-2024</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>6</td>
                        <td>Recycle Masters</td>
                        <td>Metales</td>
                        <td>Plaza Sustentable</td>
                        <td>recyclemasters@gmail.com</td>
                        <td>2223334455</td>
                        <td>11-08-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="container col-3">
    
            <div class="my-4 d-flex justify-content-center">
                <span class="h5 ">Agregadas Recientemente</span>
            </div>
    
            <ol class="list-group list-group list-group-flush">
    
                <li class="list-group-item">
                    <span>Empresa</span>
                </li>
                
                <li class="list-group-item">
                    <span>Empresa</span>
                </li>
    
                <li class="list-group-item">
                    <span>Empresa</span>
                </li>
    
                <li class="list-group-item">
                    <span>Empresa</span>
                </li>
                
            </ol>
        </div>
        
        
    </div>

    <a class='btn btn-success ms-3 mt-2' href='#' data-bs-toggle='modal' data-bs-target='#CrearEmpresa'>Agregar Empresa</a>

</div>



@stop

@include('modals.modificarEmpresa')

@include('modals.eliminarEmpresa')

@include('modals.agregarEmpresa')