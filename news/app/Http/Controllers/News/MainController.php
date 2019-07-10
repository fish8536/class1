<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $_oNews)
    {
        $newsList = $_oNews->get();
        // dd($newsList);
        return view('News.index', ['newsList' => $newsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $_oRequest, News $_oNews)
    {
        if (empty($_oRequest->session()->get('userid'))) {
            return view('news.login', ['message' => 'You have to login first!']);
        }
        $_oNews->userId = $_oRequest->session()->get('userid');
        $_oNews->title = $_oRequest->title;
        $_oNews->content = $_oRequest->content;
        $_oNews->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function show(News $_oNews, $_iId)
    {
        $news = $_oNews->find($_iId);
        return view('news.show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function edit(News $_oNews, $_iId)
    {
        $news = $_oNews->find($_iId);
        return view('news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $_oRequest, News $_oNews, $_iId)
    {
        $news = $_oNews->find($_iId);
        $news->userId = $_oRequest->session()->get('userid');
        $news->title = $_oRequest->title;
        $news->content = $_oRequest->content;
        $news->save();
        return redirect('/news/' . $_iId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $_iId
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $_oNews, $_iId)
    {
        $news = $_oNews->find($_iId);
        $news->delete();
        return redirect('/');
    }
}
