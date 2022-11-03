<?php

namespace App\Http\Controllers;

use App\Models\Loader;
use App\Http\Requests\StoreLoaderRequest;
use App\Http\Requests\UpdateLoaderRequest;
use Illuminate\Http\Request;

class LoaderController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Loader = Loader::all();
        return view('dashboard', compact('Loader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Loader.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Loader::create($request->all());

        return redirect()->route('Loader.index')
            ->with('success', 'Loader Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loader  $Loader
     * @return \Illuminate\Http\Response
     */
    public function show(Loader $Loader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loader  $Loader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Loader = Loader::find($id);
        return view('admin.Loader.edit', compact('Loader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loader  $Loader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Loader = Loader::find($id);
        $Loader->update($request->all());

        return redirect()->route('Loader.index')
        ->with('edit', 'Loader Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loader  $Loader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Loader = Loader::findOrFail($id);
        $Loader->delete();
        return redirect()->route('Loader.index')
            ->with('delete', 'Loader Berhasil Dihapus');
    }
}
