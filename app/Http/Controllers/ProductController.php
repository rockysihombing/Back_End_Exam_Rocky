<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UnitRumah;

class ProductController extends Controller
{
    
    function AddUnit(Request $request) {

        try {
            $this->validate($request,[
                'kavling' => 'required',
                'blok' => 'required',
                'no_rumah' => 'required',
                'harga_rumah' => 'required',
                'luas_tanah' => 'required',
                'luas_bangunan' => 'required',
                'customer_id' => 'required',
            ]);
        
            $addunit = new UnitRumah;
            $addunit->kavling = $request->input('kavling');
            $addunit->blok = $request->input('blok');
            $addunit->no_rumah = $request->input('no_rumah');
            $addunit->harga_rumah = $request->input('harga_rumah');
            $addunit->luas_tanah = $request->input('luas_tanah');
            $addunit->luas_bangunan = $request->input('luas_bangunan');
            $addunit->customer_id = $request->input('customer_id');
            $addunit->save();

            return response()->json(['message' =>'Success To Create Unit'], 200);
        }

        catch(\Exception $e) {
            return response()->json(['message' =>'Failed To Create Unit, exception:' + $e], 500);
        }
    }

    function DeleteUnit(Request $request){
        $id = $request->input('id');
        $deleteunit = DB::delete(
            'delete from unit_rumahs
            where id =?',[$id]);
        
        return response()->json($deleteunit, 200);
    }
}

