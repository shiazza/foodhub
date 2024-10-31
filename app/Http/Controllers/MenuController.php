<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return response()->json($menus);
    }

    public function show($id)
    {
        $menu = Menu::find($id);
        return response()->json($menu);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_display' => 'required|integer',
            'title' => 'required|string',
            'thumb' => 'string|nullable',
            'descrip' => 'string|nullable',
            'ingred' => 'string|nullable',
            'tools' => 'string|nullable',
            'cooktime' => 'string|nullable',
            'method' => 'string|nullable',
            'diff' => 'string|nullable',
            'category' => 'string|nullable',
            'date' => 'date|nullable',
            'rating' => 'integer|nullable',
            'co_view' => 'integer|nullable',
        ]);

        $menu = Menu::create($request->all());
        return response()->json($menu, 201);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $menu->update($request->all());
        return response()->json($menu);
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $menu->delete();
        return response()->json(['message' => 'Menu deleted successfully']);
    }
}
