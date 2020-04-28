<?php

namespace App\Http\Controllers;

use App\Huay;
use Illuminate\Http\Request;
use App\Http\Resources\Test as ArticleResource;

class _vueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Huay::orderBy('created_at', 'desc')->paginate(5);

        return ArticleResource::collection($articles);
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
     * @param  \App\Huay  $huay
     * @return \Illuminate\Http\Response
     */
    public function show(Huay $huay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Huay  $huay
     * @return \Illuminate\Http\Response
     */
    public function edit(Huay $huay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Huay  $huay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huay $huay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Huay  $huay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Huay $huay)
    {
        //
    }
}
