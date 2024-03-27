<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = Pengajuan::orderBy('created_at', 'DESC')->get();
  
        return view('pengajuans.index', compact('pengajuan'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengajuans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengajuan::create($request->all());
 
        return redirect()->route('pengajuans')->with('success', 'Pengajuan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
  
        return view('pengajuans.show', compact('pengajuan'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
  
        return view('pengajuans.edit', compact('pengajuan'));
   
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
        $pengajuan = Pengajuan::findOrFail($id);
  
        $pengajuan->update($request->all());
  
        return redirect()->route('pengajuans')->with('success', 'Pengajuan berhasil diupdate');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
  
        $pengajuan->delete();
  
        return redirect()->route('pengajuans')->with('success', 'Pengajuan berhasil dihapus');
    }
}
