<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Kategori;
use App\Http\Requests\KategoriRequest;

class KategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $kategoris= Kategori::all();
        return view('kategoris.index', ['kategoris'=>$kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('kategoris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KategoriRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(KategoriRequest $request)
    {
        $kategori = new Kategori;
		$kategori->kategori = $request->input('kategori');
		$kategori->deskripsi = $request->input('deskripsi');
        $kategori->save();

        return to_route('kategoris.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategoris.show',['kategori'=>$kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategoris.edit',['kategori'=>$kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KategoriRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(KategoriRequest $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
		$kategori->kategori = $request->input('kategori');
		$kategori->deskripsi = $request->input('deskripsi');
        $kategori->save();

        return to_route('kategoris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return to_route('kategoris.index');
    }
}
