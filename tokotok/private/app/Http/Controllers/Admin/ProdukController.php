<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = $request->gambar->getClientOriginalName();
        $request->gambar->storeAs('public/gambar', $imageName);
        Produk::create ([
            'namaproduk' => $request->namaproduk,
            'series' => $request->series,
            'ukuran' => $request->ukuran,
            'harga' => $request->harga,
            'gambar' => $imageName
        ]);
        return redirect ()->route('Product.index')->with('success', 'tambah data sukses');
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
        $produk = Produk::find($id);
        return view ('admin.produk.edit', compact('produk'))->with('produk', $produk);
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
        $produk = Produk::find($id);
        if($request->file('gambar') == ""){
            $produk->gambar = $produk->gambar;
        }else{
            $imageName = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageName); 
        }
       
        $produk->update ([
            'namaproduk' => $request->namaproduk,
            'series' => $request->series,
            'ukuran' => $request->ukuran,
            'harga' => $request->harga,
            'gambar' => $imageName
        ]);
        return redirect()->route('Product.index')->with('info', 'Data berhasil tersimpan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $produk = Produk::find($id);
       
       return redirect ('Product')->with('error', 'data berhasil dihapus');
    }
}
