<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(4)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('ruby', Category::find(1))
            ->with('laravel', Category::find(3))
            ->with('setting', Setting::first());
            // ->with('ruby_posts', Category::find(1)->posts()->orderBy('created_at', 'desc')->take(3)->get());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('single')
            ->with('post', $post)
            ->with('categories', Category::take(4)->get())
            ->with('setting', Setting::first());
    }
}
