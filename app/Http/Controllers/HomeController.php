<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\User;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }


    public function home(){

        $loginUser = Auth::user();


        $posts = Post::all()->sortByDesc('created_at');

        // $posts = $post->tags();

        return view('home/home', compact('loginUser', 'posts'));

        
    }


    public function CommentPost(Request $request, $user_id, $post_id){

        Comment::insert([
            'user_id' => $user_id,
            'post_id' => $post_id,
            'comment' => $request->comment,
            'created_at' => Carbon::now()
        ]);

        return $request->comment;
    }

    public function LikePost($user_id, $post_id){
        // echo $user_id.$post_id;

        

        if(Vote::where('user_id',$user_id)->where('post_id', $post_id)->first()){
            
            if(Vote::where('post_id', $post_id)->where('user_id',$user_id)->first()->vote == 1){
            Vote::where('post_id', $post_id)->where('user_id',$user_id)->update([
                
                'vote' => 0,
                'created_at' => Carbon::now()
            ]);
            }
            else{
                Vote::where('post_id', $post_id)->where('user_id',$user_id)->update([
                    
                    'vote' => 1,
                    'created_at' => Carbon::now()
                ]);    
            }
        }
        else{
            Vote::insert([
                'user_id' => $user_id,
                'post_id' => $post_id,
                'vote' => 1,
                'created_at' => Carbon::now()
            ]);
        }

    }
    public function DislikePost($user_id, $post_id){
        // echo $user_id.$post_id;
        if(Vote::where('user_id',$user_id)->where('post_id', $post_id)->first()){
            
            if(Vote::where('post_id', $post_id)->where('user_id',$user_id)->first()->vote == -1){
            Vote::where('post_id', $post_id)->where('user_id',$user_id)->update([
                
                'vote' => 0,
                'created_at' => Carbon::now()
            ]);
            }
            else{
                Vote::where('post_id', $post_id)->where('user_id',$user_id)->update([
                    
                    'vote' => -1,
                    'created_at' => Carbon::now()
                ]);    
            }
        }
        else{
            Vote::insert([
                'user_id' => $user_id,
                'post_id' => $post_id,
                'vote' => -1,
                'created_at' => Carbon::now()
            ]);
        }
    }
    public function BookMark($user_id, $post_id){
        
        $bookmark = Bookmark::where('user_id',$user_id)->where('post_id', $post_id);
        if($bookmark->first()){
            $bookmark->forceDelete();
        }
        else{
            Bookmark::insert([
                'user_id' => $user_id,
                'post_id' => $post_id,
                'created_at' => Carbon::now()
            ]);
        }

    }

    public function UserList()
    {
        return view('Home/userlist');
    }
    public function MyBookMark()
    {
        $loginUser = Auth::user();

        $bookmark = Bookmark::where('user_id', $loginUser->id)->get();

        $posts = Post::whereIn('id', $bookmark->pluck('post_id'))->get();

        return view('home/bookmark', compact('loginUser', 'posts'));
    }
    public function MyPost()
    {
        $loginUser = Auth::user();

        
        $posts = Post::where('user_id', $loginUser->id)->get()->sortByDesc('created_at');

        return view('home/mypost', compact('loginUser', 'posts'));
    }
    public function UserPost($user_id)
    {
        $loginUser = User::find($user_id);
        
        $posts = Post::where('user_id', $loginUser->id)->get()->sortByDesc('created_at');

        return view('home/userpost', compact('loginUser', 'posts'));
    }

    
    public function Search(Request $request)
    {

        $loginUser = Auth::user();

        $posts = Post::where('title', 'LIKE' ,'%'.$request->search.'%')->orWhere('content', 'LIKE' ,'%'.$request->search.'%')->get()->sortByDesc('created_at');
        $search = $request->search;

        return view('home/search', compact('loginUser', 'posts', 'search'));
    
    
    }

    public function Tag($tag_id)
    {
        $loginUser = Auth::user();
        $post_id_list = PostTag::where('tag_id',$tag_id)->get()->pluck('post_id');

        $posts = Post::whereIn('id',$post_id_list)->get();
        $search = 'Thẻ '.Tag::find($tag_id)->name;

        return view('home/search', compact('loginUser', 'posts', 'search'));

    }
}
