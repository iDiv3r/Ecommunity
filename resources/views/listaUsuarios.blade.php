@extends('components.navBar')

@section('content')

<div class="my-4 d-flex justify-content-center">
    <span class="h1 ">Lista de Usuarios</span>
</div>

<div class="m-5">
    <div class="d-flex">
        <div class="container col-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Permisos</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col"> ------- </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Emiliano</td>
                        <td>emiliano@gmail.com</td>
                        <td>contaseña</td>
                        <td>Centro</td>
                        <td>Administrador</td>
                        <td>11-02-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Mariana</td>
                        <td>mariana@gmail.com</td>
                        <td>contraseña123</td>
                        <td>Apartamento 302</td>
                        <td>Cliente</td>
                        <td>11-04-2024</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>3</td>
                        <td>Luis</td>
                        <td>luis@hotmail.com</td>
                        <td>clave567</td>
                        <td>Calle Principal</td>
                        <td>Cliente</td>
                        <td>11-06-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>4</td>
                        <td>Ana</td>
                        <td>ana@yahoo.com</td>
                        <td>abc123</td>
                        <td>Edificio A-204</td>
                        <td>Administrador</td>
                        <td>11-08-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>5</td>
                        <td>Pedro</td>
                        <td>pedro@gmail.com</td>
                        <td>contraseña321</td>
                        <td>Barrio Residencial</td>
                        <td>Cliente</td>
                        <td>11-10-2021</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>6</td>
                        <td>Laura</td>
                        <td>laura@hotmail.com</td>
                        <td>password456</td>
                        <td>Av. Libertad</td>
                        <td>Cliente</td>
                        <td>11-12-2023</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Opciones</a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal'
                                            data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal'
                                            data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <div class="container col-3">

            <div class="my-4 d-flex justify-content-center">
                <span class="h5 ">Agregados Recientemente</span>
            </div>

            <ol class="list-group list-group list-group-flush">

                <li class="list-group-item">
                    <span>Usuario</span>
                </li>
                
                <li class="list-group-item">
                    <span>Usuario</span>
                </li>

                <li class="list-group-item">
                    <span>Usuario</span>
                </li>

                <li class="list-group-item">
                    <span>Usuario</span>
                </li>
                
            </ol>
        </div>

    </div>

    <a class='btn btn-success mx-3 mt-2' href='#' data-bs-toggle='modal' data-bs-target='#AgregarUsuario'>Agregar Usuario</a>

</div>

@include('modals.agregarUsuario')

@include('modals.modificarUsuario')

@include('modals.eliminarUsuario')


@stop