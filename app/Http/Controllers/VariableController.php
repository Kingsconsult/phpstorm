<?php

namespace App\Http\Controllers;

use App\Models\Variables;
use Illuminate\Http\Request;

class VariableController extends Controller
{
    public function dashboard()
    {
        $variables = Variables::select(['appName', 'description'])->latest()->first();

        return view('dashboard', compact('variables'));
    }

    public function index()
    {
        $variables = Variables::first();

        return view('variables.index', compact('variables'));
    }

    public function createVariables()
    {
        return view('variables.create');
    }

    public function storeVariables(Request $request)
    {
        Variables::create($request->all());
        return redirect()->back()->with('success', 'Variable created successfully.');
    }

    public function editVariables($id)
    {
        $variables = Variables::find($id);
        
        return view('variables.edit', compact('variables'));
    }
    
    public function updateVariables(Request $request, $id)
    {
        $variables = Variables::find($id);
        
        $variables->update($request->all());
        // $variable->save();
        return view('variables.index', compact('variables'))->with('success', 'Variable updated successfully.');
    }
}
