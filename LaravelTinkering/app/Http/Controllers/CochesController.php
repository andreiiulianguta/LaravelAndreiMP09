<?php
namespace App\Http\Controllers;
use App\Models\coche;
use Illuminate\Http\Request;
class cocheController extends Controller
{
    public function index()
    {
        $coches = coche::all();
        return view('coches.index', compact('coches'));
    }
    public function create()
    {
        return view('coches.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'año' => 'required',
            'combustible' => 'required',
            'precio' => 'required',

        ]);
        coche::create($request->all());
        return redirect()->route('coches.index')->with('success', 'coche created successfully.');
    }
    public function show(coche $coche)
    {
        return view('coches.show', compact('coche'));
    }
    public function edit(coche $coche)
    {
        return view('coches.edit', compact('coche'));
    }
    public function update(Request $request, coche $coche)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'año' => 'required',
            'combustible' => 'required',
            'precio' => 'required',
        ]);
        $coche->update($request->all());
        return redirect()->route('coches.index')->with('success', 'coche updated successfully.');
    }
    public function destroy(coche $coche)
    {
        $coche->delete();
        return redirect()->route('coches.index')->with('success', 'coche deleted successfully.');
    }
}
