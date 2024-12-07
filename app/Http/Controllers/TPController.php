<?php

namespace App\Http\Controllers;

use App\Models\TP;
use Carbon\Carbon;
use Illuminate\Http\Request;


class TPController extends Controller
{
    public function index()
    {
        $data = TP::all();
        return view('index', ['data' => $data]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'kategori' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required',
        ]);

        TP::create($validatedData);

        return redirect('/')->with('success', 'Data TP berhasil ditambah');
    }

    public function show(String $id)
    {
        $data = TP::all()->find($id);
        return view('post', ['data' => $data]);
    }

    public function edit(String $id)
    {
        $data = TP::all()->find($id);
        $deadline = Carbon::parse($data->deadline)->format('Y-m-d');
        $data->deadline = $deadline;
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request, String $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'kategori' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required',
        ]);

        TP::where('id', $id)->update($validatedData);
        return redirect('/')->with('success', 'Data TP berhasil diubah');
    }

    public function destroy(String $id)
    {
        TP::destroy($id);
        return redirect('/')->with('success', "Data TP berhasil dihapus");
    }
}
