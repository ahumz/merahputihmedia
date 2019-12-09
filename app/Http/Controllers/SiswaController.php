<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductFormRequest;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Siswa;
use Illuminate\Http\RedirectResponse;

class SiswaController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=Siswa::all();
        return view('siswa.index',['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductFormRequest $request)
    {

        $siswa=new \App\Siswa;
        $siswa->nama=$request->nama;
        $siswa->username=$request->username;
        $siswa->password=$request->password;
        $siswa->tgl_lahir=$request->tgl_lahir;
        $siswa->alamat=$request->alamat;
        $siswa->kecamatan=$request->kecamatan;
        $siswa->telpon=$request->telpon;
        $siswa->email=$request->email;
        if($request->file('foto')){
            $foto = $request->file('foto')->store('foto_siswa','public');
            $siswa->foto=$foto;
        }

        $siswa->save();

        return $this->responseRedirect('siswa.index', 'Data updated successfully' ,'success',false, false);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
            // return Redirect::away('https://livesql.oracle.com/apex/livesql/s/jbdufxaelme89p8xidcydchtb');
            // return redirect()->away('https://livesql.oracle.com/apex/livesql/s/jbdufxaelme89p8xidcydchtb');
            return view('siswa.database');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.editsiswa', ['siswa'=>$siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $siswa = Siswa::findOrFail($id);
        // $this->$siswa->update($request->all());
        // return $this->responseRedirect('siswa.index', 'Data updated successfully' ,'success',false, false);


        $siswa= Siswa::findOrFail($id);
        $siswa->nama=$request->nama;
        $siswa->username=$request->username;
        $siswa->password=$request->password;
        $siswa->tgl_lahir=$request->tgl_lahir;
        $siswa->alamat=$request->alamat;
        $siswa->kecamatan=$request->kecamatan;
        $siswa->telpon=$request->telpon;
        $siswa->email=$request->email;
        if($request->file('foto')){
            $foto = $request->file('foto')->store('foto_siswa','public');
            $siswa->foto=$foto;
        }

        $siswa->save();

        return $this->responseRedirect('siswa.index', 'Data updated successfully' ,'success',false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa=Siswa::findOrFail($id);
        $siswa->delete();

        $siswa=Siswa::destroy($id);
        return redirect()->route('siswa.index')->with('status', 'data berhasil dihapus');

    }

    public function indexByAb()
    {
        $siswa=Siswa::where('nama', 'like', 'Ab%')->get();
        return view('siswa.index',['siswa'=>$siswa]);
    }

    public function indexBy20yo()
    {
        $siswa=Siswa::where('tgl_lahir', '20')->get();
        return view('siswa.index',['siswa'=>$siswa]);
    }

    public function indexByKecamatan()
    {
        $siswa=Siswa::where('kecamatan')->get();
        return view('siswa.index',['siswa'=>$siswa]);
    }
}
