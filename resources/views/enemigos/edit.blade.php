@extends('enemigos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Modificar Alumno
                </div>
                <div class="float-end">
                    <a href="{{ route('enemigos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('enemigos.update', $enemigo->id) }}" method="post">
                    @csrf
                    @method("PUT")


                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $enemigo->name }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="type" class="col-md-4 col-form-label text-md-end text-start">type</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ $enemigo->type }}">
                            @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="health" class="col-md-4 col-form-label text-md-end text-start">health</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('health') is-invalid @enderror" id="health" name="health" value="{{ $enemigo->health }}">
                            @if ($errors->has('health'))
                            <span class="text-danger">{{ $errors->first('health') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="damage" class="col-md-4 col-form-label text-md-end text-start">damage</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('damage') is-invalid @enderror" id="damage" name="damage" value="{{ $enemigo->damage }}">
                            @if ($errors->has('damage'))
                            <span class="text-danger">{{ $errors->first('damage') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Actualizar Enemigo">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection