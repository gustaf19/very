<?php

namespace App\Http\Controllers;

use App\Dusun;
use Illuminate\Http\Request;

use App\Http\Requests;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dusuns = Dusun::paginate();
        return view('dusun.main', ['dusuns' => $dusuns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dusun.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $dusuns         = new Dusun;
        $dusuns->dusun  = $r['dusun'];
        $dusuns->rw     = $r['rw'];
        $dusuns->rt     = $r['rt'];

        $dusuns->save();

        return redirect()->route('admin::dusun::index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dusun = Dusun::where('id',$id)->get();
        return view('dusun.edit',['dusun'=>$dusun]);
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
        $dusuns         = new Dusun;
        $dusuns->dusun  = $r['dusun'];
        $dusuns->rw     = $r['rw'];
        $dusuns->rt     = $r['rt'];

        $dusuns->save();
        return redirect()->route('admin::dusun::index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dusuns = Dusun::find($id);
        $dusuns->delete();
        return redirect()->route('admin::dusun::index');
    }

    public function search(Request $r){
        $keyword = $r->input('keyword');
        $dusuns = Dusun::where('dusun','like','%'.$keyword.'%')
            ->orWhere('rt','like','%'.$keyword.'%')
            ->orWhere('rw','like','%'.$keyword.'%')
            ->paginate();
        return view('dusun.main',['dusuns'=>$dusuns]);
    }
}
