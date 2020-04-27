@extends('plantilla')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/estudiantes.css') }}">
@endsection

@section('content')
    <div class="header-container">
        <div class="title">
            <h1>
                <i class="far fa-file-alt"></i>
                Agregar Periodo
            </h1>
        </div>
    </div>

<form action="{{route('periodos.store')}}" method="POST" class="row col-lg-12" style="border-radius: 1rem;background-color: white;box-shadow: 0 0 2px 1px #c3c3c3; margin-left: 3px; padding: 25px 15px;">

    @csrf
            <div class="col-md-12 col-lg-6 form-left">
                <div class="form-group row" style="margin-top: 1rem;">
                    <label for="col-sm-4 col-form-label">Nombre:</label>
                    <div class="col-sm-8 input-group">
                        <input type="text" class="form-control" name="nombre" >
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 form-left">
                <div class="form-group row" style="margin-top: 1rem;">
                    <label for="col-sm-4 col-form-label">Fecha inicial</label>
                    <div class="col-sm-8 input-group">
                        <input type="date" class="form-control" name="fecha_inicio">
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 form-left">
                <div class="form-group row" style="margin-top: 1rem;">
                    <label for="col-sm-4 col-form-label">Fecha Final:</label>
                    <div class="col-sm-8 input-group">
                        <input type="date" class="form-control" name="fecha_final">
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 form-left"></div>

            <div class="col-md-12 col-lg-6 form-left mt-4">
                <button type="submit" class="btn btn-main">Guardar</button>
                <a href="{{ route('periodos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
@endsection
