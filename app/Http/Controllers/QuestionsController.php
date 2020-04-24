<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Http\Requests\AskQuestionRequest;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \DB::enableQueryLog();
        $header= 'สอบถามการใช้งานระบบ';
        $questions = Questions::with('user')->latest()->paginate(5);
        return  view('questions.index', compact('questions','header'));
        //  dd(\DB::getQueryLog());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header= 'เพิ่มข้อคำถาม';
        $question = new Questions();
        return view ('questions.create',compact('question','header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AskQuestionRequest $request)
    {
        $request->user()->questions()->create($request->only('title', 'body','slug'));
        return redirect()->route('questions.index')->with('success','ส่งคำถามเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $question)
    {
        // dd($question->body);
        $header = 'รายละเอียดคำถาม';
        $question->increment('views');
        return \view('questions.show', \compact('question', 'header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $question )
    {
        $header = 'แก้ไขคำถาม';
        return view('questions.edit',\compact('header','question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AskQuestionRequest $request, Questions $question)
    {
        $question->update($request->only('title','body'));

        return \redirect('questions')->with('success',"แก้ไขคำถามเสร็จสิ้น");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $question)
    {
        $question->delete();
        
        return \redirect('questions')->with('success',"ลบคำถามเสร็จสิ้น");
    }
}
