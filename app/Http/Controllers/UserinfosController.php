<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Userinfo;
use App\Http\Requests\UserinfoRequest;

class UserinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $userinfos= Userinfo::all();
        return view('userinfos.index', ['userinfos'=>$userinfos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('userinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserinfoRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserinfoRequest $request)
    {
        $userinfo = new Userinfo;
		$userinfo->user_id = $request->input('user_id');
		$userinfo->nis = $request->input('nis');
		$userinfo->nama = $request->input('nama');
		$userinfo->kelas = $request->input('kelas');
		$userinfo->jurusan = $request->input('jurusan');
		$userinfo->alamat = $request->input('alamat');
		$userinfo->no_hp = $request->input('no_hp');
        $userinfo->save();

        return to_route('userinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $userinfo = Userinfo::findOrFail($id);
        return view('userinfos.show',['userinfo'=>$userinfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $userinfo = Userinfo::findOrFail($id);
        return view('userinfos.edit',['userinfo'=>$userinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserinfoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserinfoRequest $request, $id)
    {
        $userinfo = Userinfo::findOrFail($id);
		$userinfo->user_id = $request->input('user_id');
		$userinfo->nis = $request->input('nis');
		$userinfo->nama = $request->input('nama');
		$userinfo->kelas = $request->input('kelas');
		$userinfo->jurusan = $request->input('jurusan');
		$userinfo->alamat = $request->input('alamat');
		$userinfo->no_hp = $request->input('no_hp');
        $userinfo->save();

        return to_route('userinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $userinfo = Userinfo::findOrFail($id);
        $userinfo->delete();

        return to_route('userinfos.index');
    }
}
