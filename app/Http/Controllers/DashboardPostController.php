<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboardUser(){
        return view('/');
    }

    public function index()
    {
        $dataPost =  Post::where('user_id', auth()->user()->id)->get();
        return view('/dashboard/post/index', compact('dataPost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request -> validate([
            'title' => 'required|max:200',
            'slug'=> 'required|unique:posts',
            'body' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Post::create($validatedData);

        return redirect('/dashboard/post')->with('success', 'Post baru berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */

    public function show(Post $post)
    {
        return view('dashboard.post.show',[
            'post' => $post
        ]);
    }
    public function news(Post $post)
    {
        return view('news',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit',[
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:200',
            'body' => 'required',
            'image' => 'image|file|max:2048'
        ];

        if($request->slug != $post -> slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if ($request->oldImage) {
                Storage::delete('$request->oldImage');
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/post')->with('success', 'Post berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/post')->with('success', 'Post berhasil dihapus!');
    }

    public function slug()
    {
        $slug = Str::of(request('title'))->slug()->value;
        while (true) {
            $post = Post::query()->where('slug', '=', $slug)->get();
            if ($post->isNotEmpty()) {
                $slug .= '-' . Str::lower(Str::random(5));
                continue;
            } else {
                break;
            }
        }
        return response()->json([
            "slug"  => $slug
        ]);
    }
}
