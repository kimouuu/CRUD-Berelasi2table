<?php

namespace App\Http\Controllers;

use App\Models\multiro;
use App\Models\nservice;
use Illuminate\Http\Request;


class multirocontroller extends Controller
{
    public function index()
    {
        $multiro = multiro::all();
        return view('multiro.index', [
            'multiro' => $multiro
        ]);
    }

    public function create()
    {
        return view('multiro.create', [
            'nservice' => nservice::all(),
        ]);
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'host' => 'required',
    //         'username' => 'required',
    //         'password' => 'required',
    //         'router' => 'required',
    //         'service_id' => 'required',
    //     ]);

    //     multiro::create($request->all());

    //     return redirect()->route('multiro.index')->with('success', 'Router created successfully.');
    // }

    public function store(Request $request)
    {
        // dd($request->all());
        //Menyimpan Data Baru
        $request->validate([
            'host' => 'required',
            'username' => 'required',
            // 'password' => 'required|confirmed',
            'router' => 'required',
            'service_id' => 'required',
        ]);
        $array = $request->only([
            'host', 'username', 'password', 'router', 'service_id'
        ]);
        $array['password'] = bcrypt($array['password']);
        $multiro = multiro::create($array);
        return redirect()->route('multiro.index')
            ->with('success_message', 'Berhasil menambah user baru');
    }

    public function edit(multiro $multiro)
    {
        return view('multiro.edit');
    }

    public function update(Request $request, multiro $multiro)
    {
        $request->validate([
            'host' => 'required',
            'username' => 'required',
            'password' => 'required',
            'router' => 'required|in:ro1,ro2',
            'service_id' => 'required',
        ]);

        $multiro->update($request->all());

        return redirect()->route('multiro.index')->with('success', 'Router updated successfully.');
    }

    public function destroy(multiro $multiro)
    {
        $multiro->delete();

        return redirect()->route('multiro.index')->with('success', 'Router deleted successfully.');
    }
}
