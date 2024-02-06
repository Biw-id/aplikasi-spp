<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Bantuan;
use App\Http\Requests\BantuanRequest;

class BantuansController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $bantuans= Bantuan::latest()->paginate(10);
        return view('bantuans.index', ['bantuans'=>$bantuans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('bantuans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BantuanRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BantuanRequest $request)
    {
        $bantuan = new Bantuan;
		$bantuan->nama = $request->input('nama');
		$bantuan->email = $request->input('email');
		$bantuan->nohp = $request->input('nohp');
		$bantuan->pesan = $request->input('pesan');
        $bantuan->save();

        return to_route('bantuans.index')->withSuccess('Bantuan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        return view('bantuans.show',['bantuan'=>$bantuan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        return view('bantuans.edit',['bantuan'=>$bantuan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BantuanRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BantuanRequest $request, $id)
    {
        $bantuan = Bantuan::findOrFail($id);
		$bantuan->nama = $request->input('nama');
		$bantuan->email = $request->input('email');
		$bantuan->nohp = $request->input('nohp');
		$bantuan->pesan = $request->input('pesan');
        $bantuan->save();

        return to_route('bantuans.index')->withSuccess('Bantuan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        $bantuan->delete();

        return to_route('bantuans.index')->withSuccess('Bantuan berhasil dihapus.');
    }
}
