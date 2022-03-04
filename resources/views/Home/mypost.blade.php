@extends('layouts.navbar')


@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php

// foreach ($posts->id as $postjs)
// {
//     $index = 0;
//     $postjss[$index] = $postjs;
//     $index++;
// }

use App\Models\Bookmark;
use App\Models\Post;
use App\Models\Vote;

// <box-icon class="boxicon" name='bookmark' type='solid' color='#28a745' >
$post_count_all = $posts->count();
$script4 = <<< JS
$(function() {

    const readmores = $('.readmorebtn');

    [...readmores].forEach((readmore) => {

        readmore.addEventListener("click", (e) => {

            let readmoreButtonClick = e.target.value;

            var dots = $('.dots')[readmoreButtonClick];
            var moreText = $('.more')[readmoreButtonClick];
            var btnText = $('.readmorebtn')[readmoreButtonClick];

            if (dots.style.display === "none") {
                dots.style.display = "block";
                btnText.innerHTML = "Đọc thêm";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Thu gọn";
                moreText.style.display = "block";
            }
        })
    })

})
JS;

$script3 = <<< JS
$(function() {

    const bookmarkButtons = $('.bookmarkbutton');

    
    [...bookmarkButtons].forEach((bookmarkButton) => {


        bookmarkButton.addEventListener("click", (e) => {
            
            let bookmarkButtonClick = e.target.id;
            console.log("bookmark:",bookmarkButtonClick)
        
            
            if($('.value-bookmark-button')[bookmarkButtonClick].value==1)
            {
                $('.bookmarkbutton')[bookmarkButtonClick].classList.remove("text-success");
                $('.bookmarkicon')[bookmarkButtonClick].innerHTML=`<box-icon class="boxicon" name='bookmark' type='solid'>`;

                $('.value-bookmark-button')[bookmarkButtonClick].value=0;
                console.log("Value:",$('.value-bookmark-button')[bookmarkButtonClick].value);
            }
            else
            {
                $('.bookmarkbutton')[bookmarkButtonClick].classList.add('text-success');
                $('.bookmarkicon')[bookmarkButtonClick].innerHTML=`<box-icon class="boxicon" name='bookmark' type='solid' color='#28a745'>`;
                
                $('.value-bookmark-button')[bookmarkButtonClick].value=1;
                console.log("Value:",$('.value-bookmark-button')[bookmarkButtonClick].value)

            }    
        });
        
    })
    
    

})
JS;

$script2 = <<< JS
$(function() {

    const commnetButtons = $('.send-comment-button');

    
    [...commnetButtons].forEach((commnetButton) => {


        commnetButton.addEventListener("click", (e) => {
            
            let commentButtonNumber = e.target.value;

            $('.cmt-loading')[commentButtonNumber].classList.remove("hide-div");
            setTimeout(() => {
                $('.comment-form')[commentButtonNumber].reset();
                $('.cmt-loading')[commentButtonNumber].classList.add('hide-div');
                $('.cmt-count')[commentButtonNumber].textContent++;
            }, 3000);
            
        });
        
    })
    
    

})
JS;

$script1 = <<< JS

let length = $post_count_all;

let likeBtnUp = [];
let likeBtnDown = [];
let likeIconUp = [];
let likeIconDown = [];
let clickedDown = [];
let clickedUp = [];
let count = [];

let i;

$(function() {


    for (i = 0; i < length; i++) {

        let str1 = ".like__btnup"+i;
         likeBtnUp[i] = document.querySelector(str1);
        let str2 = ".like__btndown"+i;
         likeBtnDown[i] = document.querySelector(str2);

        let str3 = ".iconup"+i;
         likeIconUp[i] = document.querySelector(str3);

        let str4 = ".icondown"+i;
         likeIconDown[i] = document.querySelector(str4);

        let str5 = ".count"+i;
         count[i] = document.querySelector(str5);

         let str6 = ".clickedUp"+i;
         let str7 = ".clickedDown"+i;

        clickedUp[i] = 0;
        clickedDown[i] = 0;
        clickedUp[i] = document.querySelector(str6).value;
        clickedDown[i] = document.querySelector(str7).value;
        

         likeBtnUp[i].addEventListener("click", (e) => {
            
            let up = e.target.value;
            
            console.log('e ',up);

            if (clickedUp[up]==0) {
                
                //neu chua click, chon, them count
                clickedUp[up] = 1;
                document.querySelector(str3).innerHTML = `<box-icon name='like' type='solid' color='#ffffff' ></box-icon>`;

                if (clickedDown[up]==1) {
                    document.querySelector(str4).innerHTML = `<box-icon name='dislike' color='#ffffff' ></box-icon>`;
                    clickedDown[up] = 0;
                    document.querySelector(str5).textContent++;
                }

                document.querySelector(str5).textContent++;
            } else {
                clickedUp[up] = 0;
                document.querySelector(str3).innerHTML = `<box-icon name='like' color='#ffffff' ></box-icon>`;
                document.querySelector(str5).textContent--;
            }
        });

        likeBtnDown[i].addEventListener("click", (e) => {

            let down = e.target.value;
            
            if (clickedDown[down]==0) {
                clickedDown[down] = 1;
                document.querySelector(str4).innerHTML = `<box-icon name='dislike' type='solid' color='#ffffff' ></box-icon>`;

                if (clickedUp[down]==1) {
                    clickedUp[down] = 0;
                    document.querySelector(str3).innerHTML = `<box-icon name='like' color='#ffffff' ></box-icon>`;
                    document.querySelector(str5).textContent--;
                }

                document.querySelector(str5).textContent--;
            } else {
                clickedDown[down] = 0;
                document.querySelector(str4).innerHTML = `<box-icon name='dislike' color='#ffffff' ></box-icon>`;
                document.querySelector(str5).textContent++;
            }
        });

        console.log('cliked '+i,clickedUp);
       


    }

});
    



JS;
?>









<div class="spacing-after-nav">

</div>
<div class="row">
                            <!-- Profile -->
                                <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                                    <div class="main-left-sidebar no-margin">

                                        <!-- User data -->
                                        <div class="user-data full-width">
                                            <div class="user-profile">
                                                <div class="username-dt">
                                                    <div class="usr-pic">
                                                    @if($loginUser->avatar)
                                                            <img src="{{$loginUser->avatar}}"
                                                                width="50px">    
                                                            
                                                            
                                                            @else
                                                            <img src="{{$loginUser->profile_photo_url}}" 
                                                                alt="" width="50px">
                                                            @endif


                                                    
                                                    
                                                    </div>
                                                </div>
                                                <div class="user-specs">
                                            

                                                    <h3>{{$loginUser->name}}</h3>
                                                    
                                                </div>
                                            </div>
                                            <ul class="user-fw-status">
                                                
                                                <?php
                                                    $post_from_users = Post::where('user_id', $loginUser->id);
                                                    $post_count = $post_from_users->count();
                                                    
                                                    $vote_score = Vote::whereIn('post_id', $post_from_users->pluck('id'))->sum('vote');

                                                ?>

                                                <li>
                                                    <h4>Bài đăng</h4>
                                                    <span>{{$post_count}}</span>
                                                </li>
                                                <li>
                                                    <h4>Điểm số</h4>
                                                    <span>{{$vote_score}}</span>
                                                </li>
                                                <li>
                                                    <a href="" title="">View Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                
                                <!-- Posting -->
                                <div class="col-lg-9 col-md-8 no-pd">
                                    <div class="main-ws-sec">
                                        
                                    <div class="post-topbar rounded-pill">
                                    <div class="row">

                                        <div class="user-picy col-1">
                                            <img class="rounded-circle" src="{{$loginUser->profile_photo_url}}" alt=""></div>
                                            <div class="col-9 text-center">
                                                <span class="h4 text-muted status-text pl-3">
                                                    Bài viết bạn đã đăng.
                                                </span>
                                            </div>
                                            

                                    </div>
                                    </div>

                                    
                                        
                                        

                                        <!-- Bat dau -->
                                        
                                            

                                       

                                        <div class="posts-section">

                                        @php($i = 0)
                                        @foreach($posts as $post)
                                        
                                        <!-- A post -->

                                        <div class="posty">

                                                <div class="post-bar">
                                                        <div class="post_topbar">
                                                            <div class="usy-dt">

                                                            @if($post->user->avatar)
                                                            <img src="{{$post->user->avatar}}"
                                                                width="50px" height="50px">    
                                                            
                                                            
                                                            @else
                                                            <img src="{{$post->user->profile_photo_url}}" 
                                                                alt="" width="50px" height="50px">
                                                            @endif
                                                                
                                                                <div class="usy-name pt-1 mt-1">
                                                                    <h3>{{$post->user->name}}</h3>
                                                                    <!-- <box-icon class="time-icon" name='time' type='solid' color='#706767'></box-icon> -->
                                                                    <span class="pb-3">{{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- dau 3 cham  -->
                                                            <div class="ed-opts">
                                                                <a
                                                                    href="#/"
                                                                    title=""
                                                                    class="ed-opts-open">
                                                                    <box-icon name='dots-vertical-rounded' color='#b0abab' ></box-icon>
                                                                </a>
                                                                <ul class="ed-options">
                                                                    
                                                                    @if($post->user->id == $loginUser->id)
                                                                    <li>
                                                                        <a href="{{url('editpost/'.$post->id)}}" title=""><box-icon class="boxicon" type='solid' name='edit-alt'></box-icon> Edit Post</a>
                                                                    </li>
                                                                    @endif

                                                                    <?php
                                                                    $checkbookmark =0;
                                                                        if (Bookmark::where('user_id',$loginUser->id)->where('post_id',$post->id)->first()) 
                                                                        $checkbookmark = 1;
                                                                        else
                                                                        $checkbookmark = 0;
                                                                    ?>
                                                                    
                                                                    @if($checkbookmark==1)
                                                                    <li>
                                                                        <form class="{{'form-bookmark'}}" action="{{url('bookmark/'.$loginUser->id.'/'.$post->id)}}" method="GET" target="if-content">
                                                                        <a id="{{$i}}" class="bookmarkbutton text-success" role="button"  type="button" href="javascript:$('.form-bookmark')[{{$i}}].submit();">
                                                                            <span class="bookmarkicon"><box-icon class="boxicon" name='bookmark' type='solid' color='#28a745' ></box-icon></span>
                                                                        Bookmark
                                                                    
                                                                        </a>
                                                                        <button class="hide-div value-bookmark-button" value=1></button>
                                                                        
                                                                        </form>
                                                                    </li>
                                                                    @else
                                                                    <li>
                                                                        <form class="{{'form-bookmark'}}" action="{{url('bookmark/'.$loginUser->id.'/'.$post->id)}}" method="GET" target="if-content">
                                                                        <a id="{{$i}}" class="bookmarkbutton" role="button"  type="button" href="javascript:$('.form-bookmark')[{{$i}}].submit();">
                                                                            <span class="bookmarkicon"><box-icon class="boxicon" name='bookmark' type='solid'></box-icon></span>
                                                                        
    
                                                                        Bookmark

                                                                        </a>
                                                                        <button class="hide-div value-bookmark-button" value=0></button>
                                                                        
                                                                        </form>
                                                                    </li>
                                                                    @endif
                                                                    
                                                                    @if($post->user->id == $loginUser->id)
                                                                    <li>
                                                                        <a href="" title="" class="text-danger"><box-icon class="boxicon" name='x-square' type='solid' color='#f94040' ></box-icon>Delete</a>
                                                                    </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>


                                                        <!-- Tags -->
                                                <ul class="tags">
                                            
                                                @foreach($post->tags as $tag)
                                                    <li class="pt-3"><a href="{{url('/tag/'.$tag->id)}}" class="tag"> {{$tag->name}}</a></li>
                                                @endforeach    
                                                </ul>
                                                    
                                                        <!-- Content -->
                                                        <div class="job_descp mt-3">
                                                        
                                                            <h2 class="font-weight-bold post-title">{{$post->title}}</h2>
                                                            <h6 class="dots mt-5 mb-2">...</h6>
                                                            <p class="mt-5 preformatted more">{{$post->content}}
                                                              
                                                            </p>                                          
                                                            <button class="readmorebtn" value="{{$i}}">Xem thêm</button>
                                                        </div>

                                                        <!-- Picture -->
                                                        <div class="container mb-5 picture-div">
                                                        <div class="row row-cols-4 justify-content-center" style="width: 100%;">
                                                            
                                                            @foreach($post->pics as $pic)
                                                            <div class="col-3 mt-3">
                                                                <img src="{{asset($pic->image)}}" class="rounded img-thumbnail" alt="...">
                                                            </div>
                                                            @endforeach

                                                        </div>
                                                        </div>
                                                        <!-- Reaction -->
                                                        <div class="job-status-bar">
                                                            <ul class="like-com">
                                                                
                                                                <form class="react-form" action="{{ url('like/'.$loginUser->id.'/'.$post->id) }}" method="GET" target="if-content">
                                                                
                                                                
                                                                <span class="badge rounded-pill bg-light text-dark {{'count'.$i}} count">
                                                                    {{$post->vote_count}}
                                                                </span>
                                                                
                                                                
                                                                <button class="like__btnup {{'like__btnup'.$i}}" value="{{$i}}"
                                                                type="submit">
                                                                </form>

                                                                <span class="iconup {{'iconup'.$i}}" >

                                                                @php($vote = 0)
                                                                @php(
                                                                    ($loginUser->vote($post->id))&&$vote = $loginUser->vote($post->id)->vote)
                                                                @if($vote == 1) 
                                                                <box-icon name='like' type='solid' color='#ffffff'></box-icon> 
                                                                <button class="hide-button {{'clickedUp'.$i}}" value=1></button>

                                                                
                                                                @else
                                                                <box-icon name='like' color='#ffffff'></box-icon>
                                                                <button class="hide-button {{'clickedUp'.$i}}" value=0></button>

                                                                
                                                                @endif
                                                                </span>
                                                                
                                                            
                                                                </button>
                                                                <form class="react-form" action="{{ url('dislike/'.$loginUser->id.'/'.$post->id) }}" method="GET" target="if-content">
                                                                <button class="like__btndown {{'like__btndown'.$i}}" value="{{$i}}"
                                                                type="submit">
                                                                </form>
                                                                
                                                                <span class="icondown {{'icondown'.$i}}">
                                                                
                                                                @if($vote == -1)
                                                                <box-icon name='dislike' type="solid" color='#ffffff'></box-icon>
                                                                <button class="hide-button {{'clickedDown'.$i}}" value=1></button>
                                                                    
                                                            
                                                                @else
                                                                <box-icon name='dislike' color='#ffffff'></box-icon>
                                                                <button class="hide-button {{'clickedDown'.$i}}" value=0></button>

                                                            
                                                                @endif
                                                                </span>
                                                                
                                                                </button>
                                                                <button class="comment__btn bg-secondary" type="button" data-toggle="collapse" data-target="{{'#collapseComment'.$i}}" aria-expanded="false" aria-controls="{{'collapseComment'.$i}}">
                                                                <span class="iconcomment">
                                                                
                                                                <box-icon name='comment' color='#ffffff'></box-icon>
                                                                    <span class="cmt-count count text-white {{'cmt-count'.$i}}">{{$post->comment_count}}</span>
                                                                </span>
                                                                </button>
                                                            </ul>
                                                            
                                                                

                                                                
                                                                
                                                        </div>
                                                        
                                                    
                                                        <!-- Comment  -->
                                                    <div class="comment-section collapse" id="{{'collapseComment'.$i}}">
                                                            
                                                            <div class="comment-sec">
                                                                <ul>
                                                                    
                                                                    <!-- A comment -->
                                                                    
                                                                    @foreach($post->comments as $comment)
                                                                    <li>
                                                                        <div class="comment-list">
                                                                            
                                                                        @if($comment->user->avatar)
                                                                                <img src="{{$comment->user->avatar}}" 
                                                                                alt="" height="50px" width="50px" class="rounded-circle">
                                                                                @else
                                                                                <img src="{{$comment->user->profile_photo_url}}" 
                                                                                alt="" height="50px" width="50px" class="rounded-circle">
                                                                                @endif
                                                                            
                                                                            <div class="comment pl-3 pt-2">
                                                                                <h3>{{$comment->user->name}}</h3>
                                                                                <span class="">
                                                                                    {{Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span>
                                                                                <p class="mt-2">{{$comment->comment}}
                                                                                </p>
                                                                                <!-- <a
                                                                                    href=""
                                                                                    title=""
                                                                                    class="active">
                                                                                    <i class="fa fa-reply-all"></i>Reply</a> -->
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </li>
                                                                    @endforeach
                                                                
                                                                </ul>
                                                            </div>
                                                            <div class="post-comment">
                                                                <div class="cm_img">
                                                                    <img src="" 
                                                                    alt="">
                                                                </div>
                                                                <div class="comment_box">
                                                                    <form class="comment-form" action="{{ url('comment/'.$loginUser->id.'/'.$post->id) }}" method="GET" target="if-content">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control send-comment-input" placeholder="Bình luận về bài viết này" name="comment">
                                                                        <div class="input-group-append">
                                                                            <button class="send-comment-button" class="btn btn-outline-secondary" type="submit" value="{{$i}}">Send</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <h6 class="text-center text-muted cmt-loading hide-div">Loading... (sẽ cần reload trang để thấy comment)</h6>
                                                                    <h4 class="text-center mt-2" type="button" data-toggle="collapse" data-target="{{'#collapseComment'.$i}}" aria-expanded="false" aria-controls="{{'collapseComment'.$i}}" ><box-icon name='chevrons-up' color='#7d7878' ></box-icon></h4>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                    </div>

                                                    </div>

                                                    

                                        </div>                     
                                           

                                            @php($i++)

                                            
                                            @endforeach
                                            <!-- Xong 1 cai -->
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <iframe name="if-content"> </iframe>
<script><?= $script1 ?></script>
<script><?= $script2 ?></script>
<script><?= $script3 ?></script>
<script><?= $script4 ?></script>



@endsection





