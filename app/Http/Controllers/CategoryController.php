<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Http::get('https://master.idkoding.com/api/tag');
        $datatags = json_decode(($tags), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $datacategory = json_decode(($category), true);

        $photo = Http::get('https://master.idkoding.com/api/photo');
        $dataphoto = json_decode(($photo), true);

        return view('categories.index', [
            'datatags'     => $datatags,
            'datacategory' => $datacategory,
            'dataphoto'    => $dataphoto,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = Http::get('https://master.idkoding.com/api/tag');
        $datatags = json_decode(($tags), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $datacategory = json_decode(($category), true);

        $post = Http::get('https://master.idkoding.com/api/category/' . request()->segment(2));
        $datapost = json_decode(($post), true);

        $photo = Http::get('https://master.idkoding.com/api/photo');
        $dataphoto = json_decode(($photo), true);

        return view('categories.show', [
            'datatags'     => $datatags,
            'datacategory' => $datacategory,
            'datapost'     => $datapost,
            'dataphoto'    => $dataphoto,
        ]);
    }
}
