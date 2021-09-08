<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $id = Auth::user()->id;
        $ebook = DB::table("ebooksayas")->where('id_users', $id)->count('id_ebook');
        $sertifikat = DB::table("ebooksayas")->where('id_users', $id)->count('nomer_sertifikat');

        return view ('dashboard.index', compact('ebook','sertifikat'));
    }
}
