<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sampah;
use Illuminate\Http\Request;
use App\Models\Pemesanan;


class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=Pemesanan::all();
        $data=Pemesanan::getPemesanan()->paginate(5);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'id_pemesanan'=>'required',
            'id_pelanggan'=>'required',
            'id_armada'=>'required',
            'id_sampah'=>'required',
            'id_lokasi'=> 'required',
            'tanggal_pemesanan'=>'required',
            'alamat_pengambilan_sampah'=>'required',
            'status_pemesanan'=>'required',
        ]);

        try {
            $response = Pemesanan::create($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data'=> $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }

    function sampah(){
        $data=Sampah::all();
        return response()->json($data);
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
        //
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
        $validasi=$request->validate([
            'id_pemesanan'=>'required',
            'id_pelanggan'=>'required',
            'id_armada'=>'required',
            'id_sampah'=>'required',
            'id_lokasi'=> 'required',
            'tanggal_pemesanan'=>'required',
            'alamat_pengambilan_sampah'=>'required',
            'status_pemesanan'=>'required',
        ]);

        try {
            $response=Pemesanan::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data'=> $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $sampah=Pemesanan::find($id);
            $sampah->delete();
            return response()->json([
                'success'=>true,
                'message'=>'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }
}
