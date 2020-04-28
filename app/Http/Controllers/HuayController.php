<?php

namespace App\Http\Controllers;

use App\Huay;
use Illuminate\Http\Request;

class HuayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = 'เพิ่มหวย';
        $huays = Huay::all();
        return \view('huays.add', \compact('header','huays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $huays = new Huay();
        $header = 'เพิ่มหวย';
        return \view('huays.add',compact('header','huays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->user()->huays()->create($request->only('lottoname', 'lottoDate','status','DateExprieT'));
        $huays = new Huay();
        $huays->lottoname = $request->input('lottoname');
        $huays->lottoDate = $request->input('lottoDate');
        $huays->user_id = $request->input('id');
        $huays->DateExpireT = $request->input('DateExpire');
        // $date_test = $request->input('lottoDate');
        // echo $date_test;
        $huays->save();
        //return redirect()->route('huays.index')->with('success','hh');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Huay  $huay
     * @return \Illuminate\Http\Response
     */
    public function show(Huay $huay)
    {
        
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
