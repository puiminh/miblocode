
<!DOCTYPE html>
<!-- saved from url=(0049) -->
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Miblo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <script src="https://kit.fontawesome.com/4e7d165c3c.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/animate.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/bootstrap.min.css')}}">
        <!-- <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/line-awesome.css')}}"> -->
        <!-- <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/line-awesome-font-awesome.min.css')}}"> -->
        <link type="text/css" href="{{asset('temp/home/all.min.css')}}">
        <!-- <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/font-awesome.min.css')}}"> -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/jquery.mCustomScrollbar.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('temp/home/slick.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/slick-theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('temp/home/style.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('temp/home/responsive.css')}}">

        <script src="{{asset('temp/home/jquery.mousewheel.min.js')}}"></script>
        <style>
            
            box-icon{
                padding-top: 5px; 
            }
            
            .user-info{
                cursor: pointer;
                width: 200px;
            }
            .user-info span{
                color: #fff;
                font-size: 14px;
                float: left;
                margin-top: 8px;
            }
            
            .navbar-header{
                position: fixed;
                z-index: 999;
            }

            .spacing-after-nav{
                margin-bottom: 80px;
            }
            .zIV6RXJbXJr6SrIiFD28Q {
                padding: 30px;
                background: #ccc;
                width: 100px;
                cursor: move;
            }

            ._2JqEeGpVSNYcz2b62d02UZ {
                display: inline-block;
                text-decoration: none;
                color: rgba(152, 152, 152, 0.43);
                /*IconColor*/
                width: 80px;
                height: 80px;
                line-height: 80px;
                font-size: 40px;
                border-radius: 50%;
                text-align: center;
                vertical-align: middle;
                overflow: hidden;
                font-weight: bold;
                background-image: -webkit-linear-gradient(#e8e8e8 0%, #d6d6d6 100%);
                background-image: linear-gradient(#e8e8e8 0%, #d6d6d6 100%);
                text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.66);
                box-shadow: inset 0 2px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
                border-bottom: solid 2px #b5b5b5;
            }
            ._2JqEeGpVSNYcz2b62d02UZ .arc4WugPZhymgIEgipCt3 {
                line-height: 80px;
            }
            ._2JqEeGpVSNYcz2b62d02UZ:active {
                /*onClick*/
                background-image: -webkit-linear-gradient(#efefef 0%, #d6d6d6 100%);
                box-shadow: inset 0 1px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
                border-bottom: none;
            }
        </style>
        <style data-jss="" data-meta="MuiSnackbar">
            .MuiSnackbar-root {
                left: 8px;
                right: 8px;
                display: flex;
                z-index: 1400;
                position: fixed;
                align-items: center;
                justify-content: center;
            }
            .MuiSnackbar-anchorOriginTopCenter {
                top: 8px;
            }
            @media (min-width:600px) {
                .MuiSnackbar-anchorOriginTopCenter {
                    top: 24px;
                    left: 50%;
                    right: auto;
                    transform: translateX(-50%);
                }
            }
            .MuiSnackbar-anchorOriginBottomCenter {
                bottom: 8px;
            }
            @media (min-width:600px) {
                .MuiSnackbar-anchorOriginBottomCenter {
                    left: 50%;
                    right: auto;
                    bottom: 24px;
                    transform: translateX(-50%);
                }
            }
            .MuiSnackbar-anchorOriginTopRight {
                top: 8px;
                justify-content: flex-end;
            }
            @media (min-width:600px) {
                .MuiSnackbar-anchorOriginTopRight {
                    top: 24px;
                    left: auto;
                    right: 24px;
                }
            }
            .MuiSnackbar-anchorOriginBottomRight {
                bottom: 8px;
                justify-content: flex-end;
            }
            @media (min-width:600px) {
                .MuiSnackbar-anchorOriginBottomRight {
                    left: auto;
                    right: 24px;
                    bottom: 24px;
                }
            }
            .MuiSnackbar-anchorOriginTopLeft {
                top: 8px;
                justify-content: flex-start;
            }
            @media (min-width:600px) {
                .MuiSnackbar-anchorOriginTopLeft {
                    top: 24px;
                    left: 24px;
                    right: auto;
                }
            }
            .MuiSnackbar-anchorOriginBottomLeft {
                bottom: 8px;
                justify-content: flex-start;
            }
            @media (min-width:600px) {
                .MuiSnackbar-anchorOriginBottomLeft {
                    left: 24px;
                    right: auto;
                    bottom: 24px;
                }

            }
        </style>
        <style data-jss="" data-meta="makeStyles">
            .jss1 {
                padding: 4px;
            }
        </style>
        <!-- home style -->
        <style>
.tags {
  list-style: none;
  margin: 0;
  /* overflow: hidden;  */
  padding: 0;
}

.tags li {
  float: left; 
  font-size: 12px/1.5;
}

.tag {
  background: #eee;
  border-radius: 3px 0 0 3px;
  color: #999;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0 10px 10px 0;
  text-decoration: none;
  -webkit-transition: color 0.2s;
}

.tag::before {
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}

.tag::after {
  background: #fff;
  border-bottom: 13px solid transparent;
  border-left: 10px solid #eee;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
}

.tag:hover {
  background-color: #e44d3a;
  color: white;
}

.tag:hover::after {
   border-left-color: #e44d3a; 
}

.time-icon{
    padding-bottom: 5px;
}

.comment__btn
    {
        padding: 2px 25px 2px 6px;

    background: #007bff;
    font-size: 15px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #17a2b8;
    outline: none;
    border: none;
    position: relative;
    }
.like__btnup {
    padding: 2px 35px 2px 6px;
    background: #007bff;
    font-size: 15px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #e8efff;
    outline: none;
    border: none;
    position: relative;
}

.like__btndown {
    padding: 2px 6px;
    background: #a71d2a;
    font-size: 15px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #e8efff;
    outline: none;
    border: none;
    position: relative;
    
}

.like-parts{
    font-size: 12px;
}

.like-com{
    margin-top: 10px;
}

.iconup{
    pointer-events: none
}

.icondown{
    pointer-events: none
}
.bookmarkicon{
    pointer-events: none;
}
.count{
    pointer-events: none;
    position: absolute;
    z-index: 2;
    top: 8px;
    left: 33px;
}

.post-title{
    font-size: 20px;
}

.if-content{
    display: none;
}

.react-form{
    display: inline-block;
    position: relative;
}

.hide-button{
    display: none;
}
.status-text{
    text-align: center;
    justify-content: center;
}
.post-st{
    margin-top: 0;
    margin-left: auto;
    justify-content: end;
}
.comment-list{
    display: block;
}
.hide-div{
    display: none;
}
.boxicon{
    padding-top: 3px;
    padding-bottom: 10px;
}
.iconbookmark{
    float: right;
}
.bookmarkbutton{
    background: none;
    border: none;
    
}
.preformatted {
    white-space: pre-wrap;
}

.picture-div{
    margin-bottom: -50px;
}
.more {
    display: none;
}
.readmorebtn{
    border: none;
    background: none;
    font-weight: 600;
    color: #e44d3a;
}
.title-link{
    color: black;
}
</style>
    </head>
    <body class="vsc-initialized">
        <div class="wrapper">
        </head>
<header class="navbar-header">
                <div class="container">
                    <div class="header-data">
                        <div class="logo">
                            <a href="{{route('home')}}" title=""><img class="rounded-circle" src="{{asset('img/Logo2.png')}}" 
                            alt=""></a>
                        </div>
                        <div class="search-bar">
                            <form action="{{route('search')}}" method="get">
                                <input type="text" name="search" placeholder="Search...">
                                    <button type="submit">
                                <box-icon name='search' rotate='90' color='#e44d3a' ></box-icon>
                                </button>
                            </form>
                        </div>
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}" title="">
                                        <box-icon name='home' type='solid' color='#ffffff' ></box-icon>
                                        <h6>Home</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#/" title="">
                                    <box-icon name='edit' type='solid' color='#ffffff' ></box-icon>
                                        <h6>Posting</h6>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('newpost')}}" title="">New Post</a>
                                        </li>
                                        <!-- <li>
                                            <a href="#/" title="">Company Profile</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('mybookmark')}}" title="">
                                    <box-icon name='book-bookmark' type='solid' color='#ffffff' ></box-icon>
                                        <h6>Bookmark</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#/" title="">
                                        <box-icon name='user-account' type='solid' color='#ffffff' ></box-icon>
                                        <h6>Profile</h6>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/user/profile')}}" title="">Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{route('mypost')}}" title="">Bài đăng của tôi</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                
                                
                                <li>
                                    <a href="{{route('userlist')}}" title="">
                                        <box-icon name='group' type='solid' color='#ffffff' ></box-icon>
                                        <h6>People</h6>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a
                                        href=""
                                        title=""
                                        class="not-box-openm">
                                        <span><img src="" 
                                        alt=""></span>
                                        Messages
                                    </a>
                                    <div class="notification-box msg" id="message">
                                        <div class="nt-title">
                                            <h4>Setting</h4>
                                            <a href="" title="">Clear all</a>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="https://gambolthemes.net/workwise-new/messages.html" title="">Jassica William</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="https://gambolthemes.net/workwise-new/messages.html" title="">Jassica William</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="https://gambolthemes.net/workwise-new/messages.html" title="">Jassica William</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempo incididunt ut labore et dolore magna aliqua.</p>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="view-all-nots">
                                                <a href="https://gambolthemes.net/workwise-new/messages.html" title="">View All Messsages</a>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li>
                                    <a
                                        href="#/"
                                        title=""
                                        class="not-box-open">
                                        <box-icon name='bell-ring' type='solid' color='#ffffff' ></box-icon>
                                        <h6>Notification</h6>
                                    </a>
                                    <div class="notification-box noti" id="notification">
                                        <div class="nt-title">
                                            <h4>Setting</h4>
                                            <a href="" title="">Clear all</a>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="" title="">Jassica William</a>
                                                        Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="" title="">Jassica William</a>
                                                        Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="" title="">Jassica William</a>
                                                        Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="" 
                                                    alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3>
                                                        <a href="" title="">Jassica William</a>
                                                        Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="view-all-nots">
                                                <a href="" title="">View All Notification</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <div class="menu-btn">
                            <a href="" title="">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="user-account">
                            <div class="user-info">

                                                        @if(Auth::user()->avatar)
                                                            <img src="{{Auth::user()->avatar}}"
                                                                width="30px" height="30px">    
                                                            
                                                            
                                                            @else
                                                            <img src="{{Auth::user()->profile_photo_url}}" 
                                                                alt="" width="30px" height="30px">
                                                            @endif

                                <!-- <img src="{{ Auth::user()->profile_photo_url }}" 
                                alt="" width="30" height="30"> -->
                                <span title=""> {{Auth::user()->name}} </span>
                                <!-- <box-icon name='down-arrow' color='#ffffff' ></box-icon> -->
                            </div>
                            <div class="user-account-settingss" id="users">
                                <!-- <h3>Online Status</h3>
                                <ul class="on-off-status">
                                    <li>
                                        <div class="fgt-sec">
                                            <input type="radio" name="cc" id="c5">
                                            <label for="c5">
                                                <span></span>
                                            </label>
                                            <small>Online</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="fgt-sec">
                                            <input type="radio" name="cc" id="c6">
                                            <label for="c6">
                                                <span></span>
                                            </label>
                                            <small>Offline</small>
                                        </div>
                                    </li>
                                </ul>
                                <h3>Custom Status</h3>
                                <div class="search_form">
                                    <form>
                                        <input type="text" name="search">
                                        <button type="submit">Ok</button>
                                    </form>
                                </div> -->
                                <h3>Setting</h3>
                                <ul class="us-links">
                                    <li>
                                        <a
                                            href="{{url('/user/profile')}}"
                                            title="">Account Setting</a>
                                    </li>
                                    <!-- <li>
                                        <a href="" title="">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Faqs</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Terms &amp; Conditions</a>
                                    </li> -->
                                </ul>
                                
                                <h3 class="tc">
                                <form method="POST" action="http://127.0.0.1:8000/logout">
                                    @csrf
                                
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="{{url('/logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a>
                                </form>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <div class="main-section">
                    <div class="container">
                        <div class="main-section-data">
                            @yield('content')
                            
                        </div>
                    </div>
                </div>
            </main>
            
</div>

        <script type="text/javascript" src="{{asset('temp/home/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('temp/home/popper.js')}}"></script>
        <script type="text/javascript" src="{{asset('temp/home/bootstrap.min.js')}}"></script>
        <script
            type="text/javascript"
            src="{{asset('temp/home/jquery.mCustomScrollbar.js')}}"></script>
        <script type="text/javascript" src="{{asset('temp/home/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('temp/home/scrollbar.js')}}"></script>
        <script type="text/javascript" src="{{asset('temp/home/script.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <div id="6AFB0157_4632_B94D_9E64_C39CAED0931D">
            <div>
                <div
                    style="width: 0px; height: 0px; position: fixed; left: 1180px; top: 10px; z-index: 2147483647;">
                    <div
                        class="drag-box react-draggable"
                        style="display: none; transform: translate(0px, 0px);">
                        <button
                            style="cursor: pointer; background-image: -webkit-linear-gradient(top, rgb(239, 239, 239) 0%, rgb(214, 214, 214) 100%); display: inline-block; text-decoration: none; color: rgba(152, 152, 152, 0.43); width: 60px; height: 60px; line-height: 80px; font-size: 40px; border-radius: 50%; text-align: center; vertical-align: middle; overflow: hidden; font-weight: bold; text-shadow: rgba(255, 255, 255, 0.66) 1px 1px 1px; box-shadow: rgba(255, 255, 255, 0.5) 0px 2px 0px inset, rgba(0, 0, 0, 0.19) 0px 2px 2px; border-bottom: 2px solid rgb(181, 181, 181);">
                            <svg fill="gray" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                                <path
                                    fill-rule="evenodd"
                                    d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div
                            style="width: 60px; height: 1.3rem; background: gray; text-align: center; cursor: move; border-radius: 1rem; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                            <div class="handle" style="color: rgb(160, 160, 160);">move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="5284CE72_BAA9_C86D_41EB_EC638B132062"></div>
        <div id="forest-ext-shadow-host"></div>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    

    </body>
</html>