<?php

namespace App\Http\Controllers;

use App\Models\Gtarea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GtareaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class GtareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $datos=DB::select('select * from gtareas ');
        $gtareas = Gtarea::paginate();

        return view('gtarea.index', compact('gtareas'))
            ->with("datos", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $sql=DB::insert('insert into gtareas (D_tarea, Estatus, F_publicasion, Comentarios, usuario) values (?, ?, ?, ?, ?)', [
                $request->D_tarea,
                $request->Estatus,
                $request->F_publicasion,
                $request->Comentarios,
                $request->usuario,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Nueva actividad ingresada");
        } else {
            return back()->with("ERROR", "ERROR");
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GtareaRequest $request): RedirectResponse
    {
        Gtarea::create($request->validated());

        return Redirect::route('gtareas.index')
            ->with('success', 'Gtarea created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $gtarea = Gtarea::find($id);

        return view('gtarea.show', compact('gtarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $gtarea = Gtarea::find($id);

        return view('gtarea.edit', compact('gtarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    try {
        $tarea = Gtarea::findOrFail($request->id_tarea);
        $tarea->fill([
            'D_tarea' => $request->D_tarea,
            'Estatus' => $request->Estatus,
            'F_publicasion' => $request->F_publicasion,
            'Comentarios' => $request->Comentarios,
            'usuario' => $request->usuario,
        ]);
        $tarea->save();

        return back()->with("correcto", "Tarea actualizada");
    } catch (\Throwable $th) {
        return back()->with("ERROR", "ERROR al actualizar: " . $th->getMessage());
    }
}


    public function destroy($id): RedirectResponse
    {
        Gtarea::find($id)->delete();

        return Redirect::route('gtareas.index')
            ->with('success', 'Gtarea deleted successfully');
    }
    public function delete($id_tarea){
        try {
            $sql = DB::delete('delete from gtareas where id_tarea = ?', [$id_tarea]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "tarea borrada");
        } else {
            return back()->with("ERROR", "ERROR");
        }
    }
}
