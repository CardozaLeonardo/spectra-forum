<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Topic;
use App\User;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $topics = DB::table('topics')
        ->leftJoin('users', 'topics.user_id', '=', 'users.id')
        ->leftJoin('replies', 'topics.id' , '=', 'replies.topic_id')
        ->leftJoin('category', 'topics.category_id', '=', 'category.id')
        ->select('topics.id','topics.title','topics.content','topics.date', 'users.username as author', DB::raw('(SELECT count(replies.id) as respuestas from replies where replies.topic_id = topics.id) as answers'), 'category.name as category')
        ->orderBy('topics.date', 'desc')
        ->paginate(2);
        $cats = Category::all();

        $top = $this->calcInterval($topics->lastPage(), $topics->currentPage());
        $pageItems = array(0,0,0,0,0,0);
        $init = $top - 5;
        $ind = 0;
        $current = $topics->currentPage();

        while($init <= $top)
        {
            $pageItems[$ind] = $init;
            $ind++;
            $init++;
        }

        return view('forum')->with('topics', $topics)->with('cats', $cats)
        ->with('pageItems', $pageItems)->with('current', $current);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('/forum/newentry')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $newTopic = new Topic;
       //$category = Category::where('name', $request->input('category'));
       $user = Auth::user();
       $category = Category::find($request->input('category'));

       $newTopic->title = $request->input('title');
       $newTopic->user_id = $user->id;
       //$newTopic->category_id = $category->id;
       
       $newTopic->content = $request->input('Query');
       $category->topic()->save($newTopic);

       return redirect()->route('forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, Request $request)
    {
        $result = DB::select('SELECT count(*) as total FROM topics t INNER JOIN category c ON t.category_id =
        c.id WHERE c.name = ?', [$category]);

        $totalPages = ceil($result[0]->total / 2);
        


        if(!$request->has('page'))
        {
            $offSet = 0;
            $current = 1;
        }else{
            $offSet = $request->get('page') - 1;
            $current = $request->get('page');
        }

        $top = $this->calcInterval($totalPages, $current);
        $pageItems = array(0,0,0,0,0,0);
        $init = $top - 5;
        $ind = 0;

        while($init <= $top)
        {
            $pageItems[$ind] = $init;
            $ind++;
            $init++;
        }

        $topics = DB::select("SELECT t.id as id, t.title as title, t.content as content, t.date as date, u.username as author, 
        c.name as category, (SELECT count(*) as answers from replies where topic_id = t.id) 
        as answers
        FROM topics t LEFT join users u ON t.user_id = u.id LEFT JOIN category c ON t.category_id = c.id 
        GROUP BY id, title, date, author, category, content, answers having category = ? ORDER BY t.date desc LIMIT 2 OFFSET ?", [$category, $offSet]);
        
        $cats = Category::all();

        return view('forum')->with('topics', $topics)->with('cats', $cats)
        ->with('totalPages', $totalPages)->with('current', $current)->with('pageItems', $pageItems);
    }

    public function calcInterval($total, $current)
    {
        $first = 1;
        $end = 6;

        while($end < $total)
        {
            if($current >= $first && $current <= $end)
            {
                return $end;
            }

            $first += 6;
            $end += 6;
        }

        return $end;
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
