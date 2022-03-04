<!DOCTYPE html>
<!-- saved from url=(0066)https://www.w3schools.com/w3css/tryw3css_templates_coming_soon.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chào mừng tới Milbo</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('temp/home/w3.css')}}">
<link rel="stylesheet" href="{{asset('temp/home/css')}}">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<style>.zIV6RXJbXJr6SrIiFD28Q {
    padding: 30px;
    background: #ccc;
    width: 100px;
    cursor: move;
}

    ._2JqEeGpVSNYcz2b62d02UZ{
        display: inline-block;
        text-decoration: none;
        color: rgba(152, 152, 152, 0.43);/*IconColor*/
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
    ._2JqEeGpVSNYcz2b62d02UZ:active {/*onClick*/
        background-image: -webkit-linear-gradient(#efefef 0%, #d6d6d6 100%);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
        border-bottom: none;
}</style><style data-jss="" data-meta="MuiSnackbar">
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
</style><style data-jss="" data-meta="makeStyles">
.jss1 {
  padding: 4px;
}
</style></head>
<body class="vsc-initialized">

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    MILBO
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">CHÀO MỪNG</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">

  @if (Route::has('login'))
    @auth

    <p class="w3-large w3-center">Tới <a href="{{ url('/home') }}">trang chủ </a>của bạn</p>

    @else
    <p class="w3-large w3-center">Hãy <a href="{{ route('login') }}">đăng nhập</a> để tiếp tục</p>

    </div>
       
        <div class="w3-display-bottomleft w3-padding-large">
            Chưa có tài khoản đăng nhập? <a href="{{ route('register') }}">Tạo tài khoản mới</a>
        </div>
        
    @endauth


  @endif
</div>
<!-- 
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
@endif -->

<div id="2FAD99E6_075F_BE45_6183_6D71B3066306"><div><div style="width: 0px; height: 0px; position: fixed; left: 1820px; top: 10px; z-index: 2147483647;"><div class="drag-box react-draggable" style="display: none; transform: translate(0px, 0px);"><button style="cursor: pointer; background-image: -webkit-linear-gradient(top, rgb(239, 239, 239) 0%, rgb(214, 214, 214) 100%); display: inline-block; text-decoration: none; color: rgba(152, 152, 152, 0.43); width: 60px; height: 60px; line-height: 80px; font-size: 40px; border-radius: 50%; text-align: center; vertical-align: middle; overflow: hidden; font-weight: bold; text-shadow: rgba(255, 255, 255, 0.66) 1px 1px 1px; box-shadow: rgba(255, 255, 255, 0.5) 0px 2px 0px inset, rgba(0, 0, 0, 0.19) 0px 2px 2px; border-bottom: 2px solid rgb(181, 181, 181);"><svg fill="gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path></svg></button><div style="width: 60px; height: 1.3rem; background: gray; text-align: center; cursor: move; border-radius: 1rem; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"><div class="handle" style="color: rgb(160, 160, 160);">move</div></div></div></div></div></div><div id="forest-ext-shadow-host"></div><div id="5284CE72_BAA9_C86D_41EB_EC638B132062"></div></body></html>