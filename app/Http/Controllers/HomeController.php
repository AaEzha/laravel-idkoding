<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $tags = Http::get('https://master.idkoding.com/api/tag');
        $datatags = json_decode(($tags), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $datacategory = json_decode(($category), true);

        $post = Http::get('https://master.idkoding.com/api/post');
        // $post = Http::get('http://localhost:8000/api/post/');
        $datapost = json_decode(($post), true);

        $photo = Http::get('https://master.idkoding.com/api/photo');
        $dataphoto = json_decode(($photo), true);

        return view('home', [
            'datatags'     => $datatags,
            'datacategory' => $datacategory,
            'datapost'     => $datapost,
            'dataphoto'    => $dataphoto,
        ]);
    }

    public function show($slug)
    {
        $post = Http::get('https://master.idkoding.com/api/post/' . $slug);
        // $post = Http::get('http://localhost:8000/api/post/' . $slug);
        $datapost = json_decode(($post), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $datacategory = json_decode(($category), true);

        $tags = Http::get('https://master.idkoding.com/api/tag');
        $datatags = json_decode(($tags), true);

        return view('single', compact('datapost', 'datacategory', 'datatags'));
    }

    public function tutorial($page)
    {
        $post = Http::get('https://master.idkoding.com/api/post?page=' . $page);
        $datapost = json_decode(($post), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $datacategory = json_decode(($category), true);

        $tags = Http::get('https://master.idkoding.com/api/tag');
        $datatags = json_decode(($tags), true);

        return view('tutorial', compact('datapost', 'datacategory', 'datatags'));
    }

    public function sitemap()
    {
        $post = Http::get('https://master.idkoding.com/api/post');
        $data['datapost'] = json_decode(($post), true);

        return response()
            ->view('sitemap', $data)
            ->header('Content-Type', 'text/xml');
    }

    public function search()
    {
        $tags = Http::get('https://master.idkoding.com/api/tag');
        $data['datatags'] = json_decode(($tags), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $data['datacategory'] = json_decode(($category), true);

        // API Search URL
        // $post = Http::get(route('search', ['q' => request()->input('q')]));
        $post = Http::get('https://master.idkoding.com/api/search?q=' . request()->input('q'));

        $photo = Http::get('https://master.idkoding.com/api/photo');
        $data['dataphoto'] = json_decode(($photo), true);

        $data['datapost'] = json_decode(($post), true);

        return view('search.index', $data);
    }
}
