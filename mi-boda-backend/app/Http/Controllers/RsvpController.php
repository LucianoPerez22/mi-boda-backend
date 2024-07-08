<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class RsvpController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return response()->json(['data' => $guests]);
    }

    public function show($id)
    {
        $guest = Guest::find($id);

        if (!$guest) {
            return response()->json(['message' => 'Invitado no encontrado'], 404);
        }

        return response()->json(['data' => $guest]);
    }

    public function store(Request $request)
    {
        $guest = Guest::create($request->all());
        return response()->json(['data' => $guest], 201);
    }

    public function update(Request $request, $id)
    {
        $guest = Guest::find($id);

        if (!$guest) {
            return response()->json(['message' => 'Invitado no encontrado'], 404);
        }

        $guest->update($request->all());
        return response()->json(['data' => $guest]);
    }

    public function destroy($id)
    {
        $guest = Guest::find($id);

        if (!$guest) {
            return response()->json(['message' => 'Invitado no encontrado'], 404);
        }

        $guest->delete();
        return response()->json(['message' => 'Invitado eliminado']);
    }
}
