@extends('layouts.navbar')

@section('content')

<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Vote;

$user_all = User::get();

$user_count_all = $user_all->count();

?>
<style>
.view-more-pro{
    color: #e44d3a!important;
    font-weight: 600!important;
}
</style>
<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>Hiện Miblo đang có <span class="h2 text-success">{{$user_count_all}} </span>người dùng</h3>
        </div>
        <div class="companies-list">
            <div class="row">


            @foreach($user_all as $user)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                                            @if($user->avatar)
                                                            <img src="{{$user->avatar}}"
                                                               >    
                                                            
                                                            
                                                            @else
                                                            <img src="{{$user->profile_photo_url}}" 
                                                                alt="">
                                                            @endif

                                <h3>{{$user->name}}</h3>
                                <!-- <h4>Graphic Designer</h4> -->
                                <ul class="user-fw-status mt-2">
                                                
                                                <?php
                                                    $post_from_users = Post::where('user_id', $user->id);
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
                                <ul class="">
                                    <li>
                                        <a href="#" title="" class="follow">Follow(x)</a>
                                    </li>
                                    <li>
                                        <a href="{{'mailto:'.$user->email}}" title="" class="message-us">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        
                                    </li>
                                    <li>
                                        <a href="#" title="" class="hire-us">Chat(x)</a>
                                    </li>
                                </ul>
                            </div>
                            
                            <a href="{{url('userpost/'.$user->id)}}" title="" class="view-more-pro">View Profile</a>
                            
                        </div>
                    </div>

            @endforeach


                                                        <div class="process-comm">
                                                            <div class="spinner">
                                                                <div class="bounce1"></div>
                                                                <div class="bounce2"></div>
                                                                <div class="bounce3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

@endsection