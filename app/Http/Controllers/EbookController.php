<?php

namespace App\Http\Controllers;

use App\Models\Ebook;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['ebooks'] = Ebook::paginate(10);

        return view('ebooks.index', $this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $this->data['ebook'] = Ebook::whereSlug($slug)->first() or abort(404);

        return view('ebooks.show', $this->data);
    }
}
