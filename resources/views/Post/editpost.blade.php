@extends('layouts.navbar')

@section('content')

<?php
$script = <<< JS

$(function() {
   // Multiple images preview in browser
   var imagesPreview = function(input, placeToInsertImagePreview) {
        
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).attr('height', '50px').appendTo(placeToInsertImagePreview);
                    
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        $('div.gallery').empty();
        imagesPreview(this, 'div.gallery');
    });
});

JS;
?>

<style>
    .gallery{
        display: block;

    }
    .posting-form{
        width: 100%;
    }

</style>

<div class="row">
<form action="{{url('editpostaction/'.$post->id)}}" method="post" class="posting-form" enctype='multipart/form-data'>
    @csrf

<div class="input-group input-group-lg mb-5 mt-5">
  <input id="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Tiêu đề"
    name="title" value="{{$post->title}}" required>
  
</div>

<div class="mt-3 mb-3 w-25">
                                <!-- <h6 class="font-italic font-weight-light mb-1">Thêm tags cho bài viết của bạn</h6> -->

                                <select class="form-control js-example-basic-multiple" name="tag[]" multiple="multiple">
                                <!-- <option value="" hidden disabled selected>Select your option</option> -->
                                 
                                @if($post->tags->first)
                                
                                @foreach($tags as $tag)
                                    
                                    
                                             
                                        @if($post->tags->find($tag->id))
                                        <option selected value="{{$tag->id}}">{{$tag->name}}</option>
                                        
                                        @else
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        
                                        @endif
                                        
                                    
                                    
                                        
                                @endforeach
                                
                                @else    
                                @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>                                      
                                        
                                    
                                @endforeach    
                                @endif    
                               
                                </select>

                                
</div>
<div>
</div>

<div class="input-group input-group-lg mb-5">
    <textarea class="form-control" id="noidung" cols="10" rows="10" placeholder="Nội dung bài viết của bạn"
        name="content" required>{{$post->content}}</textarea>
  
</div>

<div class="container mb-5">
<div class="row row-cols-3 justify-content-center">
    
    @foreach($post->pics as $pic)
    <div class="col-4 mt-3">
        <img src="{{asset($pic->image)}}" class="rounded img-thumbnail" alt="...">
    </div>
    @endforeach

</div>
@if($post->pics->first->image)
<a class="float-right btn btn-danger" href="{{url('/deleteallimg/'.$post->id)}}">Xoá hết ảnh</a>
@else
<a class="float-right btn btn-danger disabled" href="{{url('/deleteallimg/'.$post->id)}}">Xoá hết ảnh</a>
@endif

</div>


<h6 class="font-italic font-weight-light mb-1">Thêm các hình ảnh vào bài viết của bạn </h6>
<div class="input-group input-group-lg">
  
  <div class="custom-file bg-white">
    <input type="file" class="w-100 pl-2" id="gallery-photo-add"
        multiple="multiple" name="images[]" accept="image/*">
  </div>
</div>
<!-- <h6 class="h6 fst-italic text-danger"> (Lưu ý ảnh cũ sẽ mất)</h6> -->
<div class="gallery"></div>

<button class="btn btn-success float-right mt-3" type="submit">
    Đăng bài
</button>
</form>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script><?= $script ?></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        placeholder: "Thêm thẻ cho bài viết",
        allowClear: true,
        
    });
});
</script>


@endsection