<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\CustModel;
use Auth;

class CustController extends Controller
{
    public function store(Request $req)
    {
        $validator=Validator::make($req->all(),
        [
            'nama_customer'=>'required',
            'alamat'=>'required',
            'telp'=>'required',
           
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan=CustModel::create([
            'nama_customer'=>$req->nama_customer,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp
        ]);
            return Response()->json(['status'=>"customer berhasil ditambahkan"]);
        
        
    }
    public function update($id,Request $req)
    {
        $validator=Validator::make($req->all(),
        [
            'nama_customer'=>'required',
            'alamat'=>'required',
            'telp'=>'required',
           
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah=CustModel::where('id_cust', $id)->update([
            'nama_customer'=>$req->nama_customer,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp
        ]);
            return Response()->json(['status'=>"customer berhasil diubah"]);
    }
    
    public function hapus($id)
    {
        
        $hapus=CustModel::where('id_cust',$id)->delete();
            return Response()->json(['status'=>"customer berhasil dihapus"]);
        
    }

    public function tampil_cust(){
        
            $dt_buku=CustModel::get();
            return response()->json($dt_buku);
        
    }
}