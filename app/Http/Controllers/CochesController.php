<?php

namespace App\Http\Controllers;

use App\Models\Coches;
use Illuminate\Http\Request;

class CochesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coches::with("user")->paginate(10);
        return view("coches.index", compact("coches"));

        if(Auth::user()->hasRoles('admin'))
            $coches = Coches::with("user")->paginate(10);
        else
            $coches = Auth::user()->coches()->paginate(10);
    }

    // * Show the form for creating a new resource.
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coches = new Coches;
        $title = __("Añadir coche");
        $textButton = __("Añadir");
        $route = route("coches.store");
        return view("coches.create", compact("title", "textButton", "route", "coches"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "marca" => "required",
            "modelo" => "required|nullable|string",
            "version" => "required|nullable|string",
            "combustible" => "required|nullable|string",
            "potencia" => "required|nullable|string",
            "precio" => "required|nullable|string",
        ]);
        Coches::create($request->only("marca","modelo","version","combustible","potencia","precio"));

        return redirect(route("coches.index"))
            ->with("success", __("¡Coche añadido con éxito!"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coches $coches, $id)
    {
        $update = true;
        $title = __("Editar coche");
        $textButton = __("Actualizar");
        $coches= Coches::find($id);
        $route = route("coches.update", $coches->id);
        $coches->delete();
        return view("coches.edit", compact("update","title", "textButton", "route","coches"));

 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coches $coches)
    {
        $this->validate($request, [
            "marca" => "required" . $coches->id,
            "modelo" => "nullable",
            "version" => "nullable",
            "combustible" => "nullable",
            "potencia" => "nullable",
            "precio" => "nullable",
        ]);
        $coches->fill($request->only("marca", "modelo", "version", "combustible", "potencia", "precio"))->save();
        
        return redirect(route("coches.index"))->with("success", __("¡Coche actualizado con éxito!"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coches $coches, $id)
    {
        $coches=Coches::find($id);
        $coches->delete();
        return back()->with("success",__("¡Coche eliminado!"));
    }
}