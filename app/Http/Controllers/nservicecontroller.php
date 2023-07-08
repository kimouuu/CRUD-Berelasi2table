<?php

namespace App\Http\Controllers;

use App\Models\nservice;
use Illuminate\Http\Request;

class nservicecontroller extends Controller
{
    public function index()
    {
        $nservice = nservice::all();
        return view('nservice.index', [
            'nservice' => $nservice
        ]);
    }

    public function create()
    {
        return view('nservice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required',
        ]);

        nservice::create($request->all());

        return redirect()->route('nservice.index')->with('success', 'nservices created successfully.');
    }

    public function edit(nservice $nservice)
    {
        return view('nservice.edit');
    }

    public function update(Request $request, nservice $nservice)
    {
        $request->validate([
            'service' => 'required',
        ]);

        $nservice->update($request->all());

        return redirect()->route('nservice.index')->with('success', 'nservices updated successfully.');
    }

    public function destroy(nservice $nservice)
    {
        $nservice->delete();

        return redirect()->route('nservice.index')->with('success', 'nservices deleted successfully.');
    }
}
