@extends('enemigos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Alumno
                </div>
                <div class="float-end">
                    <a href="{{ route('enemigos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigos->name }}
                    </div>
                </div>

                <div class="row">
                    <label for="apellidos" class="col-md-4 col-form-label text-md-end text-start"><strong>Apellidos:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigos->type }}
                    </div>
                </div>

                <div class="row">
                    <label for="edad" class="col-md-4 col-form-label text-md-end text-start"><strong>Edad:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigos->health }}
                    </div>
                </div>

                <div class="row">
                    <label for="nota" class="col-md-4 col-form-label text-md-end text-start"><strong>Nota:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigos->damage }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection