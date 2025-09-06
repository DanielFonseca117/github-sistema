@extends('plantilla.app')
@section('contenido')
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="input-group">
                                <input name="texto" type="text" class="form-control" value="" placeholder="Ingrese texto a buscar">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                        Buscar
                                    </button>
                                    <a href="" class="btn btn-primary">Nuevo</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 5rem">ID</th>
                                    <th style="width: 5rem">Nombre</th>
                                    <th style="width: 5rem">Correo</th>
                                    <th style="width: 5rem">Activo</th>
                                    <th style="width: 5rem">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($registro)<=0)
                                    <tr>
                                        <td colspan="4">No hay registros que coincidan con la busqueda</td>
                                    </tr>
                                    @else

                                    @foreach($registro as $reg)
                                    <tr>
                                    <th>{{$reg->id}}</th>
                                    <th>{{$reg->name}}</th>
                                    <th>{{$reg->email}}</th>
                                    @if($reg->activo==1)
                                        <th>Si</th>
                                    @else
                                        <th>No</th>
                                    @endif
                                    <!--th>{{$reg->activo}}</th-->

                                    <td><a href="{{ url('agregar') }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-fill"></i></a>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash-fill"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{$registro->appends(['texto'=>$texto])}}
                    </div>
                </div>
                <!-- /.card -->
                <!-- /.col -->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>

    @endsection