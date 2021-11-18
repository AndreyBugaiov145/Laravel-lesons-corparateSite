<?php

namespace App\Http\Controllers;

use App\Article;
use App\Coment;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Response;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token', 'comment_post_ID', 'comment_parent');

        $data['article_id'] = $request->input('comment_post_ID');
        $data['parant_id'] = $request->input('comment_parent');
        $validator = Validator::make($data, [
            'article_id' => 'integer|required',
            'parant_id' => 'integer|required',
            'text' => 'string|required',
        ]);

        $validator->sometimes(['name', 'email'], 'required|max:255', function ($input) {
            return !Auth::check();
        });

        if ($validator->fails()) {
            return Response::json(['error'=>$validator->errors()->all()],400);
        }

        $user = Auth::user();
        $comment = new Coment($data);

        if ($user){
            $comment->user_id = $user->id;
        }

        $post = Article::find($data['article_id']);

        $post->coments()->save($comment);

        $comment->load('user');

        $data['id'] = $comment->id;
        $data['email'] = !empty($data['email'])?$data['email'] : $comment->user->email;
        $data['name'] = !empty($data['name'])?$data['name'] : $comment->user->name;
        $data['hash'] = md5($data['email']);
        $data['created_at'] = $comment->created_at;

        $view_comment = view(env('THEME').'.content_one_comment',$data)->render();

        return Response::json(['success'=>true,'comment'=>$view_comment,'data'=>$data]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
