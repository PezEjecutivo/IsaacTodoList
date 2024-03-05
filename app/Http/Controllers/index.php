<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enemys;

class Index extends Controller
{
    public function index()
    {
        $enemigos = Enemys::all();
        return view('index')->with("enemigos", $enemigos);
    }

    /**
     * Guarda en BD los datos del formulario de registro de discotecas
     * y despues redirecciona a el indice
     */
    public function store(Request $request)
    {
        //Validamos los datos
        $request->validate([
            'name' => 'required|max:70|min:5',
            'type' => 'required',
            'health' => 'required',
            'damage' => 'required',
        ]);

        //Guardamos en bd los datos
        Enemys::create($request->all());

        //Redireccionamos a la vista
        return redirect()->route('index')->witch('success', 'Enemigo creado correctamente');
    }

    public function create()
    {
        return view('crearEnemigo');
    }

    public function edit($id)
    {
        $enemigo = Enemys::find($id);
        //$gerentes = gerente::all();


        return view('enemigo.edit', compact('Enemys', /*'gerentes'*/));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sacamos los datos de un enemigo con el id que nos dan
        $enemigo = Enemys::find($id);

        return view('enemigos.show', compact('enemigo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validamos los datos
        $request->validate([
            'name' => 'required|max:70|min:5',
            'type' => 'required',
            'health' => 'required',
            'damage' => 'required',
        ]);

        //Cargamos la discoteca a modificar
        $enemigos = Enemys::find($id);

        //modificamos los datos en bd
        $enemigos->update($request->all());

        return redirect()->route('enemigos.index')
            ->witch('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enemigos = Enemys::find($id);

        $enemigos->delete();

        return redirect()->route('enemigos.index')
            ->witch('success', 'Enemigo borrado');
    }
}
