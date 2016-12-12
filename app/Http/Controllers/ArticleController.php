<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Article;
//use Validator;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth' , ['except'=> ['index','show']]);
     }

     /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */


    public function index()
    {
        $articles = Article::get();
        return view('article.index' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
      $article = new Article($request->all());
      $article-> user_id = Auth::user()->id;
      $article->save();

      //Auth::user()->articles()->save($article);
      //Article::create($request::all());
      return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findorFail($id);
        if(empty($article))
        abort(404);
        return view('article.show' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article = Article::findorFail($id);
      if(empty($article))
      abort(404);
      return view('article.edit' , compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $article = Article::findOrFail($id);
      $article ->delete();
      return redirect('article');
    }

}
