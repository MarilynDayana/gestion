@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido al gestor de tareas!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese su Tarea') }}

                    <form action="" method="POST">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descrpcion" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fecha_v">Fecha de Vencimiento</label>
                            <input type="date" name="fecha_v" class="form-control" value="{{old('fecha_v')}}">
                        </div>
                        <button class="btn btn-primary">Guardar Tarea</button>

                        <table class="table table-bordered">
                            <thaed>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Fecha Vencimiento</th>
                            
                                </tr>                            
                            </thaed>
                            <tbody>
                                <tr>
                                    <td>PruebaTitulo</td>
                                    <td>DescripcionPrueba</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Completar</a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>


                    </form>    

                    <div class="container">
                        @include('includes.menu')             
                                        
                    </div>         

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
