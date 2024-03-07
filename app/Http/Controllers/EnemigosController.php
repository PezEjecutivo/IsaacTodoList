<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Endings;
use Illuminate\Http\Request;
use App\Models\Enemys;


class EnemigosController extends Controller
{
    public function index()
    {
        $enemigos = Enemys::all();
        return view('enemigos.index')->with("enemigos", $enemigos);
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
        return redirect()->route('enemigos.index')->with('success', 'Enemigo creado correctamente');
    }

    public function create()
    {
        return view('enemigos.create');
    }

    public function edit($id)
    {
        $enemigo = Enemys::find($id);


        return view('enemigos.edit', compact('enemigo'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sacamos los datos de un enemigo con el id que nos dan
        $enemigo = Enemys::find($id);

        $finales = Endings::all();

        $final = "";

        for ($i = 0; $i < count($finales); $i++) {
            if ($finales[$i]["enemy_id"] == $id) {
                $final = $finales[$i];
            }
        }

        return view('enemigos.show', compact('enemigo', "final"));
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
            ->with('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enemigos = Enemys::find($id);

        $enemigos->delete();

        return redirect()->route('enemigos.index')
            ->with('success', 'Enemigo borrado');
    }
}
