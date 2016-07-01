<?php

namespace App\Http\Controllers;

use App\Article;


use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller
{
    public function index()
    {

        $articles = Article::latest('created_at')->get();
        return view('gallery.index', compact('articles'));
    }


    public function create()
    {
        return view('gallery.create');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article::destroy($id);
        return redirect('gallery');
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('gallery.show', compact('article'));
    }


    public function store(Requests\ArticlesRequest $request)

    {
        $file = $request->file('image_url');
        $fileName = uniqid() . '.' . $file->guessExtension();
        $file->move('userdata', $fileName);

        $reqAll = $request->all();
        $reqAll['image_url'] = $fileName;


        Auth::user()->articles()->create($reqAll);

        return redirect('gallery');

    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('gallery.edit', compact('article'));
       
    }

    public function update($id, Requests\ArticlesRequest $request)
    {
        $article = Article::findOrFail($id);
        $reqAll = $request->all();

        if ($file = $request->file('image_url')) {
//        $file = $request->file('image_url');
            $fileName = uniqid() . '.' . $file->guessExtension();
            $file->move('userdata', $fileName);
            $reqAll['image_url'] = $fileName;
        }
        else{
            $reqAll['image_url'] = $article->image_url; 
        }


        $article->update($reqAll);
        return redirect('gallery');
    }


}
