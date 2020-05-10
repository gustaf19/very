<?php

namespace App\Http\Controllers;

use App\Dusun;
use App\Kk;
use App\Penduduk;
use Illuminate\Http\Request;

use App\Http\Requests;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kks = Kk::paginate();

        return view('kk.main', ['kks' => $kks]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dusuns = Dusun::all();
        return view('kk.add',['dusuns' => $dusuns]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $p                 = new Penduduk();
        $p->nik            = $r->input('nik') ;
        $p->name           = $r->input('name');
        $p->jk             = $r->input('jk');
        $p->tmp_lahir      = $r->input('tmp_lahir');
        $p->tgl_lahir      = $r->input('tgl_lahir');
        $p->pekerjaan      = $r->input('pekerjaan');
        $p->agama          = $r->input('agama');
        $p->golongan       = $r->input('golongan');
        $p->save();

        $kks            = new Kk;
        $kks->nkk       = $r->input('nkk');
        $kks->dusun_id  = $r->input('dusun_id');
        $kks->alamat    = $r->input('alamat');
        $kks->save();

        $kks->addPenduduk($kks->id);
        return redirect()->route('admin::kk::show',[$kks->id]);
    }
    
    public function storePend(Request $r )
    {
       // $p              = new Penduduk();
       // $p->nik          = $r->input('nik') ;
       // $p->name         = $r->input('name');
       // $p->jk           = $r->input('jk');
       // $p->tmp_lahir    = $r->input('tmp_lahir');
       // $p->tgl_lahir    = $r->input('tgl_lahir');
       // $p->pekerjaan    = $r->input('pekerjaan');
       // $p->agama        = $r->input('agama');
       // $p->golongan     = $r->input('golongan');
       // $p->save();

        //$kks = Kk::where()->first();
       // $kks->addPenduduk($kks->id);
       // $p->kks()->sync($r->get('kks',[]));
       // return redirect()->route('admin::kk::show',[$kks->id]);
        dd($r);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kks = Kk::where('id',$id)->get();
        return view('kk.show', ['kks' => $kks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kks = Kk::where('id', $id)->first();
        $dusuns = Dusun::get();
        return view('kk.edit', ['kks'=> $kks,'dusuns'=>$dusuns]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {

        $kks            = Kk::find($id);
        $kks->nkk       = $r->input('nkk');
        $kks->dusun_id  = $r->input('dusun_id');
        $kks->alamat    = $r->input('alamat');
        $kks->save();
        return redirect()->route('admin::kk::show',[$kks->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kks = Kk::where($id);
        $kks->delete();
        return redirect()->route('admin::kk::index');
    }

    public function search(Request $r){
        $keyword = $r->input('keyword');
        $kks = Kk::where('nkk','like','%'.$keyword.'%')
            ->orWhere('alamat','like','%'.$keyword.'%')
            ->paginate();
        return view('kk.main',['kks'=>$kks]);
    }
}
