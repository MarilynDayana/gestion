@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


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
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
