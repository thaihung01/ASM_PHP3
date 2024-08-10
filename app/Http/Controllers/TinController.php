<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function chitiet($id = 0)
    {
        $tin = DB::table('posts')->where('id', $id)->first();
        $data = ['id' => $id, 'posts' => $tin];
        return view('client.chitiet', $data);
    }
    function tintrongloai($idLT = 0)
    {
        $listtin = DB::table('posts')->where('idLT', $idLT)->get();
        $data = ['idLT' => $idLT, 'listtin' => $listtin];
        return view('client.loaitin', $data);
    }
    function timkiem(Request $request)
    {
        $query = $request->input('query');
        $listtin = DB::table('posts')
            ->where('tieuDe', 'LIKE', "%$query%")
            ->orWhere('noiDung', 'LIKE', "%$query%")
            ->paginate(10);

        return view('client.timkiem', compact('listtin', 'query'));
    }
}
