<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArtikelsController extends Controller
{
   public function index()
    {
        $artik = Artikel :: all();
        $data ["artik"] = $artik;
        $data ["status"] = 200 ;
        $data ["masage"] = "suskes";

        return response()->json($data , Response:: HTTP_OK
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'judul' =>  'required',
            'penulis' => 'required',
            'tahun' => 'required'

        ]);

        $artnew = Artikel :: create($val);
        $data ['data'] = $artnew ;
        $data ['status'] = '200';
        $data ['massage'] = 'succes';

        return response()->json($data , Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
