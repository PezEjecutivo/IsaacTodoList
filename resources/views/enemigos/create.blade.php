@extends('enemigos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Añadir Enemigo
                </div>
                <div class="float-end">
                    <a href="{{ route('enemigos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('enemigos.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nombre:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="type" class="col-md-4 col-form-label text-md-end text-start">Tipo:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
                            @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="health" class="col-md-4 col-form-label text-md-end text-start">Vida:</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('health') is-invalid @enderror" id="health" name="health" value="{{ old('health') }}">
                            @if ($errors->has('health'))
                            <span class="text-danger">{{ $errors->first('health') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="damage" class="col-md-4 col-form-label text-md-end text-start">Daño:</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('damage') is-invalid @enderror" id="damage" name="damage" value="{{ old('damage') }}">
                            @if ($errors->has('damage'))
                            <span class="text-danger">{{ $errors->first('damage') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Añadir Enemigo">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection