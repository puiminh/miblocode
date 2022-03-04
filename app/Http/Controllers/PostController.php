<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostPic;
use App\Models\Tag;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Image;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function NewPost(){
        $tags = Tag::all();
        return view('Post/newpost', compact('tags'));
    }
    public function AddPost(Request $request){
        
        Post::insert([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()

        ]);

        

        $post_id = DB::getPdo()->lastInsertId();

        $tags = $request->input('tag');

        if($tags){
        
            foreach($tags as $tag){
                PostTag::insert([
                    'tag_id'=> $tag,
                    'post_id'=> $post_id
                ]);
            }
        }

        $images =  $request->file('images');

        
        if($images)
        {foreach($images as $image){ 

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        
        Image::make($image)->resize(300,300)->save('img/postpic/'.$name_gen);

        $last_img = 'img/postpic/'.$name_gen;
 
        PostPic::insert([
            'post_id' => $post_id,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
            } // end of the foreach
        }

        
        $notifi = array(
            'message' => 'Đăng bài thành công',
            'alert-type' => 'info'
        );
        return Redirect()->route('home')->with($notifi);
    }
    public function EditPost($post_id){
        $tags = Tag::all();
        $post = Post::find($post_id);

        return view('Post/editpost', compact('tags','post'));
    }
    public function EditPostAction($post_id, Request $request){
        
        Post::find($post_id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);

        PostTag::where('post_id',$post_id)->forceDelete();
        $tags = $request->input('tag');

        if($tags){
        
            foreach($tags as $tag){
                PostTag::insert([
                    'tag_id'=> $tag,
                    'post_id'=> $post_id
                ]);
            }
        }



        $new_images =  $request->file('images');
        // $post = Post::find($post_id);
        // $old_images = $post->pics;
        
        if($new_images){
            foreach($new_images as $image){ 

                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                
                Image::make($image)->resize(300,300)->save('img/postpic/'.$name_gen);
        
                $last_img = 'img/postpic/'.$name_gen;
         
                PostPic::insert([
                    'post_id' => $post_id,
                    'image' => $last_img,
                    'created_at' => Carbon::now()
                ]);
        } // end of the foreach
        

            // if($old_images)
            // {
            //     foreach($old_images as $old_image)
            //         {
            //             unlink($old_image);
                    
            //         }
            


            // foreach($new_images as $image){ 

            //     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                
            //     Image::make($image)->resize(300,300)->save('img/postpic/'.$name_gen);
        
            //     $last_img = 'img/postpic/'.$name_gen;
         
            //     PostPic::insert([
            //         'post_id' => $post_id,
            //         'image' => $last_img,
            //         'created_at' => Carbon::now()
            //     ]);
            // }
             
            // }
        
        
        }

        $notifi = array(
            'message' => 'Chỉnh sửa bài thành công',
            'alert-type' => 'info'
        );
        return Redirect()->route('home')->with($notifi);;
    }



    public function DeleteAllImg($post_id){


        $old_images = PostPic::where('post_id', $post_id);

        if($old_images)
        {
            foreach($old_images->get() as $old_image)
            {
                $old_image_delete = $old_image->image;
                unlink($old_image_delete);
            }

            $old_images->forceDelete();
        }
        $notifi = array(
            'message' => 'Xoá ảnh thành công',
            'alert-type' => 'info'
        );
        return back()->with($notifi);
    }
}
