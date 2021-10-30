<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($request->search)){
            $table = Biodata::where('nama','LIKE','%'.$request->search.'%')->orWhere('no_tlp','LIKE','%'.$request->search.'%')->get();
        }else{
            $table = Biodata::all();
        }
        return view('Biodata.index',compact('table'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = Biodata::all();
        return view('Biodata.create',compact('table'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = [
            'nama'=>$request->nama,
            'no_tlp'=>$request->no_tlp
        ];
        Biodata::create($value);
        return redirect('/biodata');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata,$id)
    {
        $detail=Biodata::find($id);
        return view('biodata.detail',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value = Biodata::find($id);
        return view('Biodata.edit',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = Biodata::find($id);
        $value= [
           'nama'=>$request->nama,
           'no_tlp'=>$request->no_tlp,
       ];
       $table->update($value);
       return redirect('/biodata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Biodata::destroy($id);
        return redirect('/biodata');
    }
}
