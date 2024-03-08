@extends('enemigos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">Enemigos</div>
            <div class="card-body">
                <a href="{{ route('enemigos.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nuevo Enemigo</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Vida</th>
                            <th scope="col">Daño</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enemigos as $enemigo)
                        <tr>
                            <td><a href="{{ route('enemigos.show', $enemigo->id)}}">{{ $enemigo->name }}</a></td>
                            <td>{{ $enemigo->type }}</td>
                            <td>{{ $enemigo->health }}</td>
                            <td>{{ $enemigo->damage }}</td>
                            <td>
                                <form action="{{ route('enemigos.destroy', $enemigo->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('enemigos.show', $enemigo->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('enemigos.edit', $enemigo->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este producto?');"><i class="bi bi-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

@endsection