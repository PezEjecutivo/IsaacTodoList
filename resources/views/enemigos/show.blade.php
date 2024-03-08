@extends('enemigos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Enemigo
                </div>
                <div class="float-end">
                    <a href="{{ route('enemigos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigo->name }}
                    </div>
                </div>

                <div class="row">
                    <label for="type" class="col-md-4 col-form-label text-md-end text-start"><strong>Tipo:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigo->type }}
                    </div>
                </div>

                <div class="row">
                    <label for="health" class="col-md-4 col-form-label text-md-end text-start"><strong>Vida:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigo->health }}
                    </div>
                </div>

                <div class="row">
                    <label for="damage" class="col-md-4 col-form-label text-md-end text-start"><strong>Daño:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $enemigo->damage }}
                    </div>
                </div>

                <?php if ($final != []) : ?>
                    <?php $contador = 0; ?>
                    <h3 style="text-align: center;">Datos del final asociado al enemigo</h3>
                    @foreach($final as $finales)
                    <?php
                    $contador++;
                    echo "<h4 style='text-align: center;'> Datos del " . $contador . "º final asociado</h4>";
                    ?>
                    <div class="row">
                        <label for="damage" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $finales->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="damage" class="col-md-4 col-form-label text-md-end text-start"><strong>Descripcion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $finales->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="damage" class="col-md-4 col-form-label text-md-end text-start"><strong>Video:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $finales->video }}
                        </div>
                    </div>

                    @endforeach
                <?php else : ?>

                    <h3 style="text-align: center;">No hay endings relacionados con este enemigo</h3>

                <?php endif ?>

            </div>
        </div>
    </div>
</div>

@endsection