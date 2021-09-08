<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use App\Models\Ebooksaya;
use Auth;
use DB;
use Illuminate\Http\Request;

class MyEbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['my_ebooks'] = Ebooksaya::where('id_users', Auth::id())->latest()->paginate(10);

        return view('my_ebooks.index', $this->data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $done_id = request()->input('done_id');
        $this->data['ebook'] = Ebook::whereSlug($slug)->first() or abort(404);
        $id_subebook = request()->input('id_subebook') ? request()->input('id_subebook') : $this->data['ebook']->subebooks()->first()->id;

        if (!request()->input('id_subebook')) {
            return redirect()->route('my_ebooks.show', [
                'slug'        => $slug,
                'id_subebook' => $id_subebook,
            ]);
        }

        $this->data['subebook'] = $this->data['ebook']->subebooks()->find($id_subebook) or abort(404);
        $this->data['my_ebook'] = Ebooksaya::firstOrCreate([
            'id_ebook' => $this->data['ebook']->id,
            'id_users' => Auth::id(),
        ]);
        $this->data['next_subebook'] = $this->data['ebook']->subebooks()->where('id', '>', $id_subebook)->first();

        if ($done_id) {
            $this->data['prev_subebook'] = $this->data['ebook']->subebooks()->find($done_id) or abort(404);
            $this->data['prev_subebook']
                ->subebooksayas()
                ->syncWithoutDetaching([Auth::id()]);
        }

        $subebooks_ids = $this->data['ebook']->subebooks->pluck('id');
        $check = DB::table('subebooksayas')->where(function ($q) use ($subebooks_ids) {
            return $q->where('id_user', Auth::id())
                ->whereIn('id_subebook', $subebooks_ids);
        })->count();

        if ($subebooks_ids->count() == $check) {
            // Generate cert
            // dd('sudah benar');
        }

        return view('my_ebooks.show', $this->data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
