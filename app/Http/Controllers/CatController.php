<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{
    public function get()
    {
        $gatos = DB::select("SELECT * FROM gatos");
        return response()->json($gatos);
    }

    public function store(Request $request)
    {
        $nombre = $request->input('nombre');
        DB::insert("INSERT INTO gatos (nombre) VALUES (?)", [$nombre]);
        return response()->json(['message' => 'Gato agregado']);
    }

    public function index(Request $request)
    {
        $limit = $request->query('limit');
        $query = DB::table('gatos');

        if ($limit) {
            $query->limit($limit);
        }

        $gatos = $query->get();
        return response()->json($gatos);
    }

    public function show($id)
    {
        $gato = DB::table('gatos')->where('id', $id)->first();

        if (!$gato) {
            return response()->json(['error' => 'El gato no existe'], 404);
        }

        return response()->json($gato);
    }

    public function update(Request $request, $id)
    {
        $gato = DB::table('gatos')->where('id', $id)->first();

        if (!$gato) {
            return response()->json(['error' => 'El gato no existe'], 404);
        }

        DB::table('gatos')->where('id', $id)->update([
            'nombre' => $request->nombre
        ]);

        return response()->json(['id' => $id, 'nombre' => $request->nombre]);
    }

    public function destroy($id)
    {
        $gato = DB::table('gatos')->where('id', $id)->first();

        if (!$gato) {
            return response()->json(['error' => 'El gato no existe'], 404);
        }

        DB::table('gatos')->where('id', $id)->delete();

        return response()->json(['message' => 'Gato eliminado correctamente']);
    }
}