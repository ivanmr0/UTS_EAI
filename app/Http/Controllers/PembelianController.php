<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelian = Pembelian::paginate(10);
        return response()->json( [
            'data' => $pembelian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   // public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pembelian = Pembelian::create ([
        'metode_bayar' => $request->metode_bayar,
        'id_number' => $request->id_number,
        'status' => $request->status,
        ]);
        return response()->json([
            'data' => $pembelian
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(pembelian $pembelian)
    {
        return response()->json([
            'data' => $pembelian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    //public function edit(pembelian $pembelian)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $pembelian = pembelian::find($id);
        if ($pembelian) {
            $pembelian->update( [
                'metode_bayar' => $request->metode_bayar,
                'id_number' => $request->id_number,
                'status' => $request->status,
            ]);

        return response()->json([
            'data' => $pembelian
        ]);

    }  }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $pembelian = pembelian::find($id);
        $pembelian->delete();;
        return response()->json([
            'message' => 'pembelian deleted successfully'
        ], 204);
    }
}
