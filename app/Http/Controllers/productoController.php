<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

/**
 *@OA\Tag(name="Producto")
 */

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
    * @OA\Get(
    *     tags={"Producto"},
    *     path="/api/producto",
    *     summary="Mostrar productos",
    *     @OA\Response(
    *         response=200,
    *         description="Muestra todos los productos."
    *     )
    * )
    */
    public function index()
    {
        $datos = Producto::all();
        return $datos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
    * @OA\Post(
    *     tags={"Producto"},
    *     path="/api/producto",
    *     summary="Cargar producto",
    *     @OA\Response(
    *         response=200,
    *         description="Guarda un producto."
    *     )
    * )
    */
    public function store(Request $request)
    {
        $datos = new Producto();
        $datos->nombre = $request->nombre;
        $datos->costo = $request->costo;
        $datos->foto = $request->foto;
        $datos->receta_id = $request->receta_id;

        $datos->save();

        return $datos;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
    * @OA\Put(
    *     tags={"Producto"},
    *     path="/api/producto/{id}",
    *     summary="Actualizar producto",
    *     @OA\Response(
    *         response=200,
    *         description="Actualiza un producto."
    *     )
    * )
    */
    public function update(Request $request, $id)
    {
        $datos = Producto::findOrFail($request->id);
        $datos->nombre = $request->nombre;
        $datos->costo = $request->costo;
        $datos->foto = $request->foto;
        $datos->receta_id = $request->receta_id;

        $datos->save();
        return $datos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
    * @OA\Delete(
    *     tags={"Producto"},
    *     path="/api/producto/{id}",
    *     summary="Eliminar producto",
    *     @OA\Response(
    *         response=200,
    *         description="Elimina un producto."
    *     )
    * )
    */
    public function destroy($id)
    {
        $datos = Producto::destroy($request->id);
        return $datos;
    }
}
